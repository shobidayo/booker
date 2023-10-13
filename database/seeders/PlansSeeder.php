<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class PlansSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('plans')->insert([
            'name' => 'プラン1',
            'body' => "プラン1の内容\nこのプラン内容は素泊まりのプランです。\n朝食、夕食はついておりません",
            'price' => '10000',
            'price1' => '20000',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
            
        DB::table('plans')->insert([
            'name' => 'プラン2',
            'body' => 'プラン2の内容',
            'price' => '20000',
            'price1' => '30000',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
            
        DB::table('plans')->insert([
            'name' => 'プラン3',
            'body' => 'プラン3の内容',
            'price' => '30000',
            'price1' => '40000',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
        
        DB::table('plans')->insert([
            'name' => 'プラン4',
            'body' => 'プラン4の内容',
            'price' => '40000',
            'price1' => '50000',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
            
        DB::table('plans')->insert([
            'name' => 'プラン5',
            'body' => 'プラン5の内容',
            'price' => '50000',
            'price1' => '60000',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
    }
}
