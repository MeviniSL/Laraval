<?php

namespace Database\Seeders;
use App\Models\Category;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Technology',
            'description' => 'Tech related articles'
        ]);

        Category::create([
            'name' => 'Education',
            'description' => 'Educational content'
        ]);

        Category::create([
            'name' => 'Health',
            'description' => 'Health and wellness posts'
        ]);
    }
}
