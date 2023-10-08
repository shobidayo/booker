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
            'plan_id'=>6,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
        DB::table('plan_room')->insert([
            'room_id'=>2,
            'plan_id'=>6,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);    
        DB::table('plan_room')->insert([
            'room_id'=>1,
            'plan_id'=>7,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);  
        DB::table('plan_room')->insert([
            'room_id'=>2,
            'plan_id'=>7,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
        DB::table('plan_room')->insert([
            'room_id'=>1,
            'plan_id'=>8,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
        DB::table('plan_room')->insert([
            'room_id'=>2,
            'plan_id'=>8,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
        DB::table('plan_room')->insert([
            'room_id'=>1,
            'plan_id'=>9,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
        DB::table('plan_room')->insert([
            'room_id'=>2,
            'plan_id'=>9,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);   
        DB::table('plan_room')->insert([
            'room_id'=>1,
            'plan_id'=>10,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);    
        DB::table('plan_room')->insert([
            'room_id'=>2,
            'plan_id'=>10,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);    
    }
}
