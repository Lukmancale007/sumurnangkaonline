<?php

namespace App\Http\Controllers;
\Carbon\Carbon::setLocale('id');
use App\Models\Umana;
use App\Models\IzinUmana;
use App\Models\JadwalShift;
use App\Models\AbsensiUmana; // ini adalah MODEL
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Carbon\CarbonPeriod;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;
class AbsensiUmanaController extends Controller
{

    // Gaji per shift
    const GAJI_PER_SHIFT = [
        'staf' => [
            'shift_1' => 50000,
            'shift_2' => 50000,
        ],
        'kepala' => [
            'shift_1' => 100000,
            'shift_2' => 100000,
        ],
        // Tambahkan jabatan lainnya sesuai kebutuhan
    ];
    public function index()
    {
        return view('absensi.form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nmr' => 'required'
        ]);

        $umana = Umana::where('nmr', $request->nmr)->first();

        if (!$umana) {
            return back()->with('error', 'NMR tidak ditemukan.');
        }
        $now = Carbon::now();
        $tanggal = $now->toDateString();
        $jam = $now->format('H:i:s');
        $hari = $now->isoFormat('dddd'); // hasil: Senin, Selasa, dll
        // Tentukan shift berdasarkan jam

        if ($jam >= '06:00:00' && $jam <= '12:00:00') {
            $shift = 'shift_1';
        } elseif ($jam > '12:00:00' && $jam <= '18:00:00') {
            $shift = 'shift_2';
        } else {
            return back()->with('error', 'Di luar jam absensi.');
        }

        $tanggal = Carbon::now()->toDateString();

        // Cek jadwal shift user
        $jadwal = JadwalShift::where('nmr', $request->nmr)
            ->where('hari', $hari)
            ->where('shift', $shift)
            ->first();


        if (!$jadwal) {
            return back()->with('error', $umana->nama . ' Kamu tidak dijadwalkan untuk ' . $shift . ' hari ini.');
        }

        $izin = IzinUmana::where('nmr', $request->nmr)
            ->where('tanggal', $tanggal)
            ->where('shift', $shift)
            ->first();

        if ($izin) {
            return back()->with('error', $umana->nama . ' Kamu sedang izin untuk ' . $shift . ' hari ini.');
        }

        $sudahAbsen = AbsensiUmana::where('nmr', $request->nmr)
            ->where('tanggal', $tanggal)
            ->where('shift', $shift)
            ->first();

        if ($sudahAbsen) {
            return back()->with('error', $umana->nama . ' Kamu sudah absen untuk ' . $shift . ' hari ini.');
        }

        AbsensiUmana::create([
            'nmr' => $request->nmr,
            'tanggal' => $tanggal,
            'shift' => $shift,
            'waktu' => $now,
        ]);

        return back()->with('success', 'Absensi  berhasil untuk ' . $umana->nama . $shift);
    }

    public function laporanGaji(Request $request)
    {

        $bulan = (int) ($request->bulan ?? now()->format('m'));
        $tahun = (int) ($request->tahun ?? now()->format('Y')); // default: tahun sekarang

        $data = AbsensiUmana::select('absensiumana.nmr', 'umana.nama', 'umana.jabatan', DB::raw('
            SUM(CASE WHEN shift = "shift_1" THEN 1 ELSE 0 END) as total_shift_1,
            SUM(CASE WHEN shift = "shift_2" THEN 1 ELSE 0 END) as total_shift_2
        '))
            ->join('umana', 'absensiumana.nmr', '=', 'umana.nmr')
            ->whereMonth('tanggal', $bulan)
            ->whereYear('tanggal', $tahun)
            ->groupBy('absensiumana.nmr', 'umana.nama', 'umana.jabatan')
            ->paginate(10);

        foreach ($data as $item) {
            $jabatan = $item->jabatan;
            $gajiPerShift = self::GAJI_PER_SHIFT[$jabatan] ?? ['shift_1' => 0, 'shift_2' => 0];

            $item->total_gaji =
                ($item->total_shift_1 * $gajiPerShift['shift_1']) +
                ($item->total_shift_2 * $gajiPerShift['shift_2']);
        }


        return view('absensi.laporan_gaji', compact('data', 'bulan', 'tahun'));
    }


    public function rekapBulanan(Request $request)
    {
        $bulan = $request->bulan ?? date('m');
        $tahun = $request->tahun ?? date('Y');
        $tanggalAwal = Carbon::create($tahun, $bulan, 1);
        $tanggalAkhir = $tanggalAwal->copy()->endOfMonth();
        $period = CarbonPeriod::create($tanggalAwal, $tanggalAkhir);

        $users = Umana::all();
        $rekapShift1 = [];
        $rekapShift2 = [];

        foreach ($users as $user) {
            $baris1 = [
                'nmr' => $user->nmr,
                'nama' => $user->nama,
                'jabatan' => $user->jabatan,
            ];
            $baris2 = $baris1;

            foreach ($period as $tanggal) {
                $tanggalStr = $tanggal->format('Y-m-d');
                $hari = $tanggal->isoFormat('dddd');

                // -------- Shift 1 ----------
                $dijadwalkan1 = JadwalShift::where('nmr', $user->nmr)
                    ->where('hari', $hari)
                    ->where('shift', 'shift_1')
                    ->exists();

                if ($dijadwalkan1) {
                    $hadir = AbsensiUmana::where('nmr', $user->nmr)
                        ->where('tanggal', $tanggalStr)
                        ->where('shift', 'shift_1')
                        ->exists();

                    $izin = IzinUmana::where('nmr', $user->nmr)
                        ->where('tanggal', $tanggalStr)
                        ->where('shift', 'shift_1')
                        ->exists();

                    $baris1[$tanggal->day] = $hadir ? 'H' : ($izin ? 'I' : 'A');
                } else {
                    $baris1[$tanggal->day] = '-';
                }

                // -------- Shift 2 ----------
                $dijadwalkan2 = JadwalShift::where('nmr', $user->nmr)
                    ->where('hari', $hari)
                    ->where('shift', 'shift_2')
                    ->exists();

                if ($dijadwalkan2) {
                    $hadir = AbsensiUmana::where('nmr', $user->nmr)
                        ->where('tanggal', $tanggalStr)
                        ->where('shift', 'shift_2')
                        ->exists();

                    $izin = IzinUmana::where('nmr', $user->nmr)
                        ->where('tanggal', $tanggalStr)
                        ->where('shift', 'shift_2')
                        ->exists();

                    $baris2[$tanggal->day] = $hadir ? 'H' : ($izin ? 'I' : 'A');
                } else {
                    $baris2[$tanggal->day] = '-';
                }
            }

            $rekapShift1[] = $baris1;
            $rekapShift2[] = $baris2;
        }

        return view('bendahara.laporan.rekap_bulanan', compact(
            'rekapShift1',
            'rekapShift2',
            'bulan',
            'tahun',
            'tanggalAwal',
            'tanggalAkhir'
        ));
    }


    public function exportPdf(Request $request)
    {
        $bulan = $request->bulan ?? date('m');
        $tahun = $request->tahun ?? date('Y');

        // ambil rekap sesuai metode kamu
        $rekap = $this->generateRekap($bulan, $tahun); // contoh fungsi

        $pdf = Pdf::loadView('bendahara.laporan.rekap_pdf', compact('rekap', 'bulan', 'tahun'))
            ->setPaper('A4', 'landscape');

        return $pdf->stream('rekap-absensi-' . $bulan . '-' . $tahun . '.pdf');
    }

    public function kirimWhatsApp($nomor, $pesan)
    {
        $curl = curl_init();

        $data = [
            'target' => $nomor,
            'message' => $pesan,
        ];

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.fonnte.com/send",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => json_encode($data),
            CURLOPT_HTTPHEADER => [
                "Authorization: " . env('FONNTE_TOKEN'),
                "Content-Type: application/json"
            ],
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);

        if ($err) {
            logger()->error("WA Error: $err");
            return false;
        }

        logger()->info("WA Sent: $response");

        return true;
    }


    public function kirimLaporanGajiViaWa(Request $request)
    {
        $bulan = $request->bulan ?? date('m');
        $tahun = $request->tahun ?? date('Y');

        $rekap = $this->generateRekap($bulan, $tahun); // hasil seperti di rekapBulanan()

        foreach ($rekap as $item) {
            $user = Umana::where('nmr', $item['nmr'])->first();

            if (!$user || !$user->nomor_wa)
                continue;

            $gajiPerShift = self::GAJI_PER_SHIFT[$item['jabatan']] ?? ['shift_1' => 0, 'shift_2' => 0];
            $totalGaji = ($item['hadir_shift_1'] * $gajiPerShift['shift_1']) + ($item['hadir_shift_2'] * $gajiPerShift['shift_2']);

            $pesan = "Assalamu'alaikum {$item['nama']}!\n"
                . "Berikut rekap gaji bulan {$bulan}-{$tahun}:\n"
                . "Hadir Shift 1: {$item['hadir_shift_1']} kali\n"
                . "Hadir Shift 2: {$item['hadir_shift_2']} kali\n"
                . "Total Gaji: Rp. " . number_format($totalGaji, 0, ',', '.');

            $this->kirimWhatsApp($user->nomor_wa, $pesan);
        }

        return back()->with('success', 'Laporan berhasil dikirim ke WhatsApp semua umana.');
    }

    public function generateRekap($bulan, $tahun)
    {
        $tanggalAwal = Carbon::create($tahun, $bulan, 1);
        $tanggalAkhir = $tanggalAwal->copy()->endOfMonth();
        $period = CarbonPeriod::create($tanggalAwal, $tanggalAkhir);

        $rekap = [];
        $users = Umana::all();

        foreach ($users as $user) {
            $jadwal = JadwalShift::where('nmr', $user->nmr)->get();

            $shift_1_jadwal = 0;
            $shift_2_jadwal = 0;
            $shift_1_hadir = 0;
            $shift_2_hadir = 0;
            $shift_1_izin = 0;
            $shift_2_izin = 0;

            foreach ($period as $tanggal) {
                $hari = $tanggal->isoFormat('dddd');

                foreach ($jadwal as $j) {
                    if ($j->hari == $hari) {
                        $shift = $j->shift;

                        $hadir = AbsensiUmana::where('nmr', $user->nmr)
                            ->whereDate('tanggal', $tanggal)
                            ->where('shift', $shift)
                            ->exists();

                        $izin = IzinUmana::where('nmr', $user->nmr)
                            ->whereDate('tanggal', $tanggal)
                            ->where('shift', $shift)
                            ->exists();

                        if ($shift == 'shift_1')
                            $shift_1_jadwal++;
                        if ($shift == 'shift_2')
                            $shift_2_jadwal++;

                        if ($hadir) {
                            if ($shift == 'shift_1')
                                $shift_1_hadir++;
                            if ($shift == 'shift_2')
                                $shift_2_hadir++;
                        } elseif ($izin) {
                            if ($shift == 'shift_1')
                                $shift_1_izin++;
                            if ($shift == 'shift_2')
                                $shift_2_izin++;
                        }
                    }
                }
            }

            $jabatan = $user->jabatan;
            $gajiPerShift = self::GAJI_PER_SHIFT[$jabatan] ?? ['shift_1' => 0, 'shift_2' => 0];

            $total_gaji = ($shift_1_hadir * $gajiPerShift['shift_1']) + ($shift_2_hadir * $gajiPerShift['shift_2']);

            $rekap[] = [
                'nmr' => $user->nmr,
                'nama' => $user->nama,
                'jabatan' => $jabatan,
                'jadwal_shift_1' => $shift_1_jadwal,
                'jadwal_shift_2' => $shift_2_jadwal,
                'hadir_shift_1' => $shift_1_hadir,
                'hadir_shift_2' => $shift_2_hadir,
                'izin_shift_1' => $shift_1_izin,
                'izin_shift_2' => $shift_2_izin,
                'tidak_hadir_shift_1' => $shift_1_jadwal - $shift_1_hadir - $shift_1_izin,
                'tidak_hadir_shift_2' => $shift_2_jadwal - $shift_2_hadir - $shift_2_izin,
                'total_gaji' => $total_gaji,
            ];
        }

        return $rekap;
    }



    public function indexJadwalUmana()
    {
        $tanggal = now()->toDateString();

        $data = AbsensiUmana::with('umana') // pastikan relasi didefinisikan
            ->whereDate('tanggal', $tanggal)
            ->get();
        $umana = Umana::all();
        return view('bendahara.jadwal.index', compact('umana', 'data', 'tanggal'));
    }
    public function editJadwalShift($nmr)
    {
        $umana = Umana::where('nmr', $nmr)->firstOrFail();
        $existingJadwal = JadwalShift::where('nmr', $nmr)->get();

        return view('bendahara.jadwal.jadwal_edit', compact('umana', 'existingJadwal'));
    }

    public function updateJadwalShift(Request $request, $nmr)
    {
        JadwalShift::where('nmr', $nmr)->delete();

        foreach ($request->jadwal as $hari => $shifts) {
            foreach ($shifts as $shift => $aktif) {
                if ($aktif) {
                    JadwalShift::create([
                        'nmr' => $nmr,
                        'hari' => $hari,
                        'shift' => $shift,
                    ]);
                }
            }
        }

        return redirect()->route('jadwal.index')->with('success', 'Jadwal shift berhasil diperbarui.');
    }



}