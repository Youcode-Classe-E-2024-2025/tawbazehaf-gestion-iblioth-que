<?php

namespace Database\Seeders;

use App\Models\Book;
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
        User::factory()->create([
            'name' => 'tawba zehaf',
            'email' => 'tawba@gmail.com',
            'password'=>'tawbazehaf',
            'role'=>'admin'
        ]);

        // User::factory(10)->create();
        Book::factory(10)->create();

    }
}