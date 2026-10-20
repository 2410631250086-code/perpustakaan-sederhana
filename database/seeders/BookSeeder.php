<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('books')->insert([
            [
                'title' => 'Lovelly Runner',
                'author' => 'Byeon Woo Seok',
                'year' => 2024,
                'stock' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Twinkling Watermelon',
                'author' => 'hayichan',
                'year' => 2023,
                'stock' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Study Grup',
                'author' => 'chawomin',
                'year' => 2025,
                'stock' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}