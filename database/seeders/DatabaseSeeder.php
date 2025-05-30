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
         User::factory(10)->create();
       // User::factory()->count(10)->create();
         $this->call([CategorySeeder::class, ]);
         $this->call([ProductSeeder::class, ]);
       
         

        User::factory()->create([
    'name' => 'Mykinde User',
    'email' => 'mykinde@gmail.com',
    'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
    'city' => 'Lagos',
    'phone' => '08012345678',
     'company' => "Mykinde Tech",
    'remember_token' => 'mykinde123',
    'role' => 'admin', // or 'user' depending on your role setup
        ]);

    }
}
