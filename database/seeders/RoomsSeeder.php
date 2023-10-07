<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class RoomsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rooms')->insert([
            'type' => 'シングルルーム',
            'capacity' =>1,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
         DB::table('rooms')->insert([
            'type' => 'ツインルーム',
            'capacity' =>2,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);    
    }
}
