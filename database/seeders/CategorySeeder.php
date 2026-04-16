<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['cat_name' => 'Makanan', 'description' => 'makanan'],
            ['cat_name' => 'Minuman', 'description' => 'minuman'],
        ];

        foreach ($categories as $category) {
            \App\Models\Category::create($category);
        }
    }
}
