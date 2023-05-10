<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaMataKuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'mahasiswa_id' => '2141720073',
                'matakuliah_id' => 1,
                'nilai' => 'A',
            ],
            [
                'mahasiswa_id' => '2141720073',
                'matakuliah_id' => 2,
                'nilai' => 'B+',
            ],
            [
                'mahasiswa_id' => '2141720073',
                'matakuliah_id' => 3,
                'nilai' => 'A',
            ],
            [
                'mahasiswa_id' => '2141720073',
                'matakuliah_id' => 4,
                'nilai' => 'A',
            ],
            [
                'mahasiswa_id' => '2141720075',
                'matakuliah_id' => 2,
                'nilai' => 'A',
            ],
            [
                'mahasiswa_id' => '2141720077',
                'matakuliah_id' => 4,
                'nilai' => 'B',
            ],
        ];
        DB::table('mahasiswa_matakuliah')->insert($data);
    }
}
