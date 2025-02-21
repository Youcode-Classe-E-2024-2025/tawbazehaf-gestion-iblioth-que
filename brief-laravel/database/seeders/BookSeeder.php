<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    public function run()
    {
        $books = [
            [
                'title' => 'The Great Gatsby',
                'author' => 'F. Scott Fitzgerald',
                'description' => 'A story of decadence and excess.',
                'image' => 'https://example.com/gatsby.jpg',
                'status' => 'available'
            ],
            [
                'title' => '1984',
                'author' => 'George Orwell',
                'description' => 'A dystopian social science fiction.',
                'image' => 'https://example.com/1984.jpg',
                'status' => 'available'
            ],
            // Add more books as needed
        ];

        foreach ($books as $book) {
            Book::create($book);
        }
    }}