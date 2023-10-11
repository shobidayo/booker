<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class PlanRoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('plan_room')->insert([
            'room_id'=>1,
            'plan_id'=>1,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
        DB::table('plan_room')->insert([
            'room_id'=>2,
            'plan_id'=>1,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);    
        DB::table('plan_room')->insert([
            'room_id'=>1,
            'plan_id'=>2,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);  
        DB::table('plan_room')->insert([
            'room_id'=>2,
            'plan_id'=>2,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
        DB::table('plan_room')->insert([
            'room_id'=>1,
            'plan_id'=>3,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
        DB::table('plan_room')->insert([
            'room_id'=>2,
            'plan_id'=>3,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
        DB::table('plan_room')->insert([
            'room_id'=>1,
            'plan_id'=>4,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
        DB::table('plan_room')->insert([
            'room_id'=>2,
            'plan_id'=>4,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);   
        DB::table('plan_room')->insert([
            'room_id'=>1,
            'plan_id'=>5,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);    
        DB::table('plan_room')->insert([
            'room_id'=>2,
            'plan_id'=>5,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);    
    }
}
