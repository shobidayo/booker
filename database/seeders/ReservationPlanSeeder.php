<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class ReservationPlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reservation_plan')->insert([
            'reservation_id'=>1,
            'plan_id'=>1,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('reservation_plan')->insert([
            'reservation_id'=>2,
            'plan_id'=>2,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('reservation_plan')->insert([
            'reservation_id'=>3,
            'plan_id'=>3,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('reservation_plan')->insert([
            'reservation_id'=>4,
            'plan_id'=>4,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
