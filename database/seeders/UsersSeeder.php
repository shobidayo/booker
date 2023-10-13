<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use DateTime;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => '石川',
            'address' => '東京都',
            'email' => 'aaa@email.com',
            'tell_number' => '09012345678',
            'password' => Hash::make('パスワード'),
            'email_verified_at' => now(),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
        DB::table('users')->insert([
            'name' => '山田',
            'address' => '北海道',
            'email' => 'iii@email.com',
            'tell_number' => '01234567890',
            'password' => Hash::make('パスワード1'),
            'email_verified_at' => now(),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
        DB::table('users')->insert([
            'name' => '佐藤',
            'address' => '大阪府',
            'email' => 'uuu@email.com',
            'tell_number' => '08012345678',
            'password' =>Hash::make('パスワード2'),
            'email_verified_at' => now(),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
        DB::table('users')->insert([
            'name' => '田中',
            'address' => '沖縄',
            'email' => 'eee@email.com',
            'tell_number' => '07012345678',
            'password' => Hash::make('パスワード3'),
            'email_verified_at' => now(),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);        
    }
}
