<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UpdateMahasiswaMatakuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswa_matakuliah')->insert([
            [
                'mahasiswa_id' => '2',
                'matakuliah_id' => '7',
                'nilai' => 'A'
            ],
            [
                'mahasiswa_id' => '2',
                'matakuliah_id' => '1',
                'nilai' => 'A'
            ],
            [
                'mahasiswa_id' => '2',
                'matakuliah_id' => '2',
                'nilai' => 'A'
            ],
            [
                'mahasiswa_id' => '2',
                'matakuliah_id' => '5',
                'nilai' => 'A'
            ],
            [
                'mahasiswa_id' => '2',
                'matakuliah_id' => '5',
                'nilai' => 'A'
            ],
            [
                'mahasiswa_id' => '2',
                'matakuliah_id' => '6',
                'nilai' => 'A'
            ],
            [
                'mahasiswa_id' => '3',
                'matakuliah_id' => '7',
                'nilai' => 'A'
            ],
            [
                'mahasiswa_id' => '3',
                'matakuliah_id' => '1',
                'nilai' => 'A'
            ],
            [
                'mahasiswa_id' => '3',
                'matakuliah_id' => '2',
                'nilai' => 'A'
            ],
            [
                'mahasiswa_id' => '3',
                'matakuliah_id' => '5',
                'nilai' => 'A'
            ],
            [
                'mahasiswa_id' => '3',
                'matakuliah_id' => '5',
                'nilai' => 'A'
            ],
            [
                'mahasiswa_id' => '3',
                'matakuliah_id' => '6',
                'nilai' => 'A'
            ],
            [
                'mahasiswa_id' => '7',
                'matakuliah_id' => '7',
                'nilai' => 'A'
            ],
            [
                'mahasiswa_id' => '7',
                'matakuliah_id' => '1',
                'nilai' => 'A'
            ],
            [
                'mahasiswa_id' => '7',
                'matakuliah_id' => '2',
                'nilai' => 'A'
            ],
            [
                'mahasiswa_id' => '7',
                'matakuliah_id' => '5',
                'nilai' => 'A'
            ],
        ]);
    }
}
