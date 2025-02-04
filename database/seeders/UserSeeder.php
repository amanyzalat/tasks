<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          // Create admins
        User::factory()->count(100)->create([
            'is_admin' => true
        ]);

        // Create non-admin users
        User::factory()->count(10000)->create([
            'is_admin' => false
        ]);
    }
}
