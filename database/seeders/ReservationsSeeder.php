<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class ReservationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reservations')->insert([
            'user_id'=>1,
            'checkin_date'=>'2023-12-01',
            'checkout_date'=>'2023-12-02',
            'reserver_people'=>1,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
        DB::table('reservations')->insert([
            'user_id'=>2,
            'checkin_date'=>'2024-01-01',
            'checkout_date'=>'2024-01-02',
            'reserver_people'=>1,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);    
        DB::table('reservations')->insert([
            'user_id'=>3,
            'checkin_date'=>'2023-12-05',
            'checkout_date'=>'2023-12-07',
            'reserver_people'=>2,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
        DB::table('reservations')->insert([
            'user_id'=>4,
            'checkin_date'=>'2023-12-10',
            'checkout_date'=>'2023-12-13',
            'reserver_people'=>2,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
    }
}
