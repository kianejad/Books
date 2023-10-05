<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{

    public function run(): void
    {
        \App\Models\Book::factory(100)->create();
    }
}
