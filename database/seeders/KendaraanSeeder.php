<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\Table;

class KendaraanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kendaraan')->insert([
            [
                'nopol' => 'AG 1234 AB',
                'merk' => 'Toyota',
                'jenis' => 'Avanza',
                'tahun_buat' => 2010,
                'warna' => 'Hitam'
            ],
            [
                'nopol' => 'AG 1235 A',
                'merk' => 'Honda',
                'jenis' => 'Jazz',
                'tahun_buat' => 2015,
                'warna' => 'Putih'
            ],
            [
                'nopol' => 'AG 1236 A',
                'merk' => 'Yamaha',
                'jenis' => 'Mio',
                'tahun_buat' => 2018,
                'warna' => 'Merah'
            ]
        ]);
    }
}
