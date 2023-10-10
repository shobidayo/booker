<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class ReservationRoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reservation_room')->insert([
            'reservation_id'=>1,
            'room_id'=>1,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('reservation_room')->insert([
            'reservation_id'=>2,
            'room_id'=>1,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('reservation_room')->insert([
            'reservation_id'=>3,
            'room_id'=>2,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('reservation_room')->insert([
            'reservation_id'=>4,
            'room_id'=>2,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
