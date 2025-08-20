<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::create([
            'title' => 'Laravel Slug Example',
            'content' => 'Seeder post content.'
        ]);

        Post::create([
            'title' => 'Laravel Slug Example',
            'content' => 'Seeder post duplicate title.'
        ]);

        Post::create([
            'title' => 'Third Post',
            'slug' => 'third-post',
            'content' => 'This is the content of the third post.'
        ]);
    }
}
