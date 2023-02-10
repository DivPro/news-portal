<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\News;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Category::factory()->create([
            'created_at' => new \DateTime(),
            'title' => Str::random(20),
        ]);

        News::factory()->create([
            'created_at' => new \DateTime(),
            'title' => Str::random(20),
            'announce' => Str::random(100),
            'content' => Str::random(1000),
        ]);
    }
}
