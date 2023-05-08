<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kelas')->insert([
            ['nama_kelas' => 'TI 2A'],
            ['nama-kelas' => 'TI 2B'],
            ['nama-kelas' => 'TI 2C'],
            ['nama-kelas' => 'TI 2D'],
            ['nama-kelas' => 'TI 2E'],
            ['nama-kelas' => 'TI 2F'],
            ['nama-kelas' => 'TI 2G'],
            ['nama-kelas' => 'TI 2H'],
            ['nama-kelas' => 'TI 2I'],
        ]);
    }
}
