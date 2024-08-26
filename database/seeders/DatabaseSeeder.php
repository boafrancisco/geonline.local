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
        $this->call(UserStart::class);
        //User::factory()->create([
        //    'first_name' => 'Bicael',
        //    'last_name' => 'Omardine',
        //    'email' => 'bicael.francisco@sticon.co.mz',
        //]);
    }
}
