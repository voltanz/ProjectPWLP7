<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $data = [
            [
                'Nim' => 2141720073,
                'Nama' => 'Abdullah Azzam',
                'Tanggal_Lahir' => '17 Oktober 2003',
                'Kelas' => 'TI-2F',
                'Jurusan' => 'Teknologi Informasi',
                'No_Handphone' => '081290707944',
                'Email' => 'azoom@gmail.com'
            ],
            [
                'Nim' => 2141720983,
                'Nama' => 'Muhammad Endar Darmawan',
                'Tanggal_Lahir' => '17 Agustus 1945',
                'Kelas' => 'TI-2F',
                'Jurusan' => 'Teknologi Informasi',
                'No_Handphone' => '08514498273',
                'Email' => 'kumisjangs@gmail.com'
            ],
            [
                'Nim' => 2141720075,
                'Nama' => 'Alfi Surya Pratama',
                'Tanggal_Lahir' => '7 Januari 2003',
                'Kelas' => 'TI-2F',
                'Jurusan' => 'Teknologi Informasi',
                'No_Handphone' => '081517454939',
                'Email' => 'alpunpisangan@gmail.com'
            ],
            [
                'Nim' => 2141720138,
                'Nama' => 'Andhito Galih Nur Cahyo',
                'Tanggal_Lahir' => '15 Mei 2002',
                'Kelas' => 'TI-2F',
                'Jurusan' => 'Teknologi Informasi',
                'No_Handphone' => '082333903430',
                'Email' => 'sepurane@gmail.com'
            ],
            [
                'Nim' => 2141720249,
                'Nama' => 'Dimitri Abdullah',
                'Tanggal_Lahir' => '15 Agustus 2003',
                'Kelas' => 'TI-2F',
                'Jurusan' => 'Teknologi Informasi',
                'No_Handphone' => '08888090576',
                'Email' => 'dbdb@gmail.com'
            ],
            [
                'Nim' => 2141720055,
                'Nama' => 'Iemaduddin',
                'Tanggal_Lahir' => '13 Agustus 2002',
                'Kelas' => 'TI-2F',
                'Jurusan' => 'Teknologi Informasi',
                'No_Handphone' => '082331311947',
                'Email' => 'ketum@gmail.com'
            ],
        ];
        DB::table('mahasiswas')->insert($data);
    }
}