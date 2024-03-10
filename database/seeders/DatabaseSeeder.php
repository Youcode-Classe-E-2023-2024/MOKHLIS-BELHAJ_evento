<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\event;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(Roleseeder::class);
        $this->call(AdminSeeder::class);
        $this->call(LieuxSeeder::class);
        $this->call(Categorieseeder::class);
        User::factory()->count(10)->create()->each(function ($user) {
            $user->assignRole('user');
        });
        event::factory()->count(32)->create();
        

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
