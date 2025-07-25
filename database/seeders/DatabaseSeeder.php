<?php

namespace Database\Seeders;

use App\Models\Kamar;
use App\Models\User;
use App\Models\Role;
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
        Role::create([
            'id' => '1',
            'name' => 'admin',
        ]);
        Role::create([
            'id' => '2',
            'name' => 'asrama',
        ]);
        Role::create([
            'id' => '3',
            'name' => 'bendahara',
        ]);
        User::create([
            'image' => 'EDLz4Qw0ql4jaQ0yC0HPMvUErsTSY50WpTxu7QZU.jpg',
            'name' => 'bendahara',
            'email' => 'bendahara@gmail.com',
            'password' => bcrypt('123'),
            'role_id' => 3, // Gantilah 2 dengan ID peran yang sesuai
        ]);
        User::create([
            'image' => 'EDLz4Qw0ql4jaQ0yC0HPMvUErsTSY50WpTxu7QZU.jpg',
            'name' => 'asrama',
            'email' => 'asrama@gmail.com',
            'password' => bcrypt('123'),
            'role_id' => 2, // Gantilah 2 dengan ID peran yang sesuai
        ]);
        User::create([
            'image' => 'EDLz4Qw0ql4jaQ0yC0HPMvUErsTSY50WpTxu7QZU.jpg',
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123'),
            'role_id' => 1, // Gantilah 2 dengan ID peran yang sesuai
        ]);
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

        // KepalaKamar::create([
        //     'username' => 'kamarlukman',
        //     'password' => Hash::make('123456'),
        //     'kamar_id' => 1,
        // ]);
        // {
        //     // Seeder untuk kamar
        //     $kamars = ['Al-Fatih', 'An-Nur', 'Ar-Rahman', 'As-Salam', 'Al-Hikmah'];
        //     foreach ($kamars as $nama) {
        //         Kamar::create(['nama_kamar' => $nama]);
        //     }

        //     // Seeder untuk kepala kamar dengan password berbeda-beda
        //     $data = [
        //         ['nama' => 'Ahmad Fauzi', 'password' => 'fauzi123', 'kamar_nama' => 'Al-Fatih'],
        //         ['nama' => 'Budi Santoso', 'password' => 'budi456', 'kamar_nama' => 'An-Nur'],
        //         ['nama' => 'Dani Firmansyah', 'password' => 'dani789', 'kamar_nama' => 'Ar-Rahman'],
        //     ];

        //     foreach ($data as $item) {
        //         $kamar = Kamar::where('nama_kamar', $item['kamar_nama'])->first();

        //         if ($kamar && is_null($kamar->kepala_kamar_id)) {
        //             $username = strtolower(str_replace(' ', '_', $item['nama']));
        //             $original = $username;
        //             $i = 1;

        //             while (KepalaKamar::where('username', $username)->exists()) {
        //                 $username = $original . '_' . $i++;
        //             }

        //             $kepala = KepalaKamar::create([
        //                 'nama' => $item['nama'],
        //                 'username' => $username,
        //                 'password' => bcrypt($item['password']),
        //                 'kamar_id' => $kamar->id,
        //             ]);

        //             $kamar->kepala_kamar_id = $kepala->id;
        //             $kamar->save();
        //         }
        //     }
        // }



    }
}
