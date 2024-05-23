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
        // User::factory(10)->create();

        User::factory()->create([
            'name'      => 'Test User',
            'email'     => 'teste@teste.com',
            'password'  => '$2y$12$VldngrHA6nRQvHYA.cVSS.5odGq76zLFUrs/AUDvZt8ze3.FexQ12'
        ]);
    }
}
