<?php

namespace Database\Seeders;

use App\Models\Kamar;
use App\Models\User;
use App\Models\KepalaKamar;
use App\Models\Santri;
use App\Models\Umana;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //   // Buat 5 kamar
//         $kamarIds = [];
//         for ($i = 1; $i <= 5; $i++) {
//             $kamar = Kamar::create([
//                 'nama_kamar' => 'Kamar ' . chr(64 + $i), // A, B, C, D, E
//             ]);
//             $kamarIds[] = $kamar->id;
//         }

        //         // Buat 10 santri, 2 per kamar
//         $counter = 1;
//         $santriKetuaMap = [];

        //         foreach ($kamarIds as $kamarId) {
//             for ($j = 1; $j <= 2; $j++) {
//                 $gender = $counter % 2 === 0 ? 'putri' : 'putra';

        //                 $santri = Santri::create([
//                     'nama' => "Santri $counter",
//                     'gender' => $gender,
//                     'image' => 'default.jpg',
//                     'tanggal_lahir' => '2005-01-01',
//                     'alamat' => 'Alamat Santri ' . $counter,
//                     'ayah' => 'Ayah ' . $counter,
//                     'ibu' => 'Ibu ' . $counter,
//                     'kamar_id' => $kamarId,
//                 ]);

        //                 // Santri pertama di setiap kamar jadi ketua
//                 if ($j == 1) {
//                     $santriKetuaMap[$kamarId] = $santri->id;
//                 }

        //                 $counter++;
//             }
//         }

        //         // Update ketua_kamar_id di tiap kamar
//         foreach ($santriKetuaMap as $kamarId => $ketuaId) {
//             Kamar::where('id', $kamarId)->update([
//                 'ketua_kamar_id' => $ketuaId,
//             ]);
//         }


        // User::factory(10)->create();

        // User::factory()->create([
        //   ,  'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]
        // User::create([
        //     'image' => 'EDLz4Qw0ql4jaQ0yC0HPMvUErsTSY50WpTxu7QZU.jpg',
        //     'name' => 'asrama',
        //     'email' => 'asrama@gmail.com',
        //     'password' => bcrypt('123'),
        //     'role_id' => 2, // Gantilah 2 dengan ID peran yang sesuai
        // ]);
        // User::create([
        //     'image' => 'EDLz4Qw0ql4jaQ0yC0HPMvUErsTSY50WpTxu7QZU.jpg',
        //     'name' => 'kepalakamar',
        //     'email' => 'kepalakamar@gmail.com',
        //     'password' => bcrypt('123'),
        //     'role_id' => 3, // Gantilah 2 dengan ID peran yang sesuai
        // ]);
        // Santri::create([
        // 'kode' => 'S001',
        // 'nama' => 'Ahmad Fauzi',
        // 'kamar_id' => 1, // Al-Ghazali
        // ]);
        // Santri::create([
        // 'kode' => 'S001',
        // 'nama' => 'Ahmad Fauzi',
        // 'kamar_id' => 1, // Al-Ghazali
        // ]);

        // Santri::create([
        //         'kode' => 'S002',
        //     'nama' => 'Muhammad Zaid',
        //     'kamar_id' => 1,
        // ]);

        // Santri::create([
        //     'kode' => 'S003',
        //     'nama' => 'Budi Hartono',
        //     'kamar_id' => 2, // Asy-Syafi’i
        // ]);
        // Berita::create([
        //     'gambar' => 'EDLz4Qw0ql4jaQ0yC0HPMvUErsTSY50WpTxu7QZU.jpg',
        //     'judul' => 'Lukman',
        //     'tanggal_berita' => 'll@gmail.com',
        //     'isi' => 'aswwwwwwwww',
        //     'penulis' => 'dsdsdwds',
        // ]);
        // Umana::create([
        //     'nmr' => '11111',
        //     'nama' => 'Rm dyana',
        //     'jabatan' => 'staf',
        //     'nomor_wa' => '6285745549410',

        // ]);

        KepalaKamar::create([
            'username' => 'kamarlukman',
            'password' => Hash::make('123456'),
            'kamar_id' => 1,
        ]);

    }
}
