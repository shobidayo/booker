<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(HotelsSeeder::class);
        $this->call(PlansSeeder::class);
        $this->call(RoomsSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(ReservationsSeeder::class);
        $this->call(PlanRoomSeeder::class);
        $this->call(ReservationRoomSeeder::class);
        $this->call(PlanReservationSeeder::class);
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
