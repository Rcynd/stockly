<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create([
            'name' => 'Rian Muhammad Afriasnyah',
            'email' => 'rianma1333@gmail.com',
            'level' => 'admin',
            'no_telp' => '089682941333',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),

        ]);
    }
}
