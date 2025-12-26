<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\BlogPost;

class BlogPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BlogPost::create([
            'title' => 'Laravel 12 Introduction',
            'description' => 'This post explains Laravel 12 basics.',
            'author' => 'Admin'
        ]);

        BlogPost::create([
            'title' => 'Eloquent ORM',
            'description' => 'Working with database using Eloquent.',
            'author' => 'Mevini'
        ]);
    }
}
