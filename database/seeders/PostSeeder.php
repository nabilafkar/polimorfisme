<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::create([
            'title' => 'Post Pertama',
            'body' => 'Ini adalah isi dari post pertama.'
        ]);

        Post::create([
            'title' => 'Post Kedua',
            'body' => 'Ini adalah isi dari post kedua.'
        ]);
    }
}