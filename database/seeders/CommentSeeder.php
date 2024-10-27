<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Video;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Komentar untuk Post
        $post = Post::first();
        $post->comments()->create([
            'content' => 'Komentar pertama pada post pertama.'
        ]);

        $post = Post::find(2);
        $post->comments()->create([
            'content' => 'Komentar pertama pada post kedua.'
        ]);

        // Komentar untuk Video
        $video = Video::first();
        $video->comments()->create([
            'content' => 'Komentar pertama pada video pertama.'
        ]);

        $video = Video::find(2);
        $video->comments()->create([
            'content' => 'Komentar pertama pada video kedua.'
        ]);
    }
}
