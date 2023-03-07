<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KeluargaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('keluarga')->insert([
            [
                'nama' => 'Sunarto',
                'jenis_kelamin' => 'Laki-laki',
                'relasi' => 'Bapak'
            ],
            [
                'nama' => 'Umi Latifah',
                'jenis_kelamin' => 'Perempuan',
                'relasi' => 'Ibu'
            ],
            [
                'nama' => 'Linda Alfianti',
                'jenis_kelamin' => 'Perempuan',
                'relasi' => 'Kakak'
            ],
        ]);
    }
}
