<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        DB::table('users')->insert([
            'name' => 'Test User',
            'email' => 'beto@uaq.mx',
            'password' => Hash::make('password'),
        ]);
        DB::table('pets')->insert([
            'name' => 'Firulais',
            'user_id' => 1,
        ]);
        DB::table('pets')->insert([
            'name' => 'Rex',
            'user_id' => 1,
        ]);
        DB::table('pets')->insert([
            'name' => 'Max',
            'user_id' => 1,
        ]);
    }
}
