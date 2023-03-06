<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HobbySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hobbies')->insert([
            [
                'name' => 'Mendengarkan musik',
                'alasan' => 'Mendengarkan musik itu menyenangkan dan menenangkan'
            ],
            [
                'name' => 'Menonton film',
                'alasan' => 'Film menyajikan berbagaid macam informasi, wawasan dan amanah'
            ],
            [
                'name' => 'Bermain game',
                'alasan' => 'Game itu seru dan menantang'
            ],
            [
                'name' => 'Coding',
                'alasan' => 'Coding itu menyenangkan dan menantang'
            ]
        ]);
    }
}
