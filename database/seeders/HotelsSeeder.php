<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HotelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hotels')->insert([
            'name' => '茶道旅館',
            'description' => '茶道旅館は、日本の文化をもっと体験して欲しい。この良さをもっと知ってほしい。
        という思いで建てていく旅館。
        日本ならではの空間にこだわり、心が安らぐ寝心地の良いお部屋を採用しています。
        ゆっくりとした時間を味わい、静かなひと時を感じる、
        日本の文化「茶道」を体験できるイベントも行っていきます。',
            'room_type' => 'シングルルーム,ツインルーム',
            'event' => 'イベント',
            'information' => 'お知らせ',
            'FAQ' => 'FAQ',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
    }
}
