<?php

namespace Database\Seeders;

use App\Models\project;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'juliano',
            'email' => 'julianohogberg@hotmail.com',
            'password' => bcrypt('123456A'),
            'email_verified_at' => time(),
        ]);
            Project::factory()
            ->count(30)
            ->hasTasks(30)
            ->create();
    }
}
