<?php

namespace Database\Seeders;

use App\Models\Video;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Video::create([
            'title' => 'Video Pertama',
            'url' => 'https://example.com/video1'
        ]);

        Video::create([
            'title' => 'Video Kedua',
            'url' => 'https://example.com/video2'
        ]);
    }
}