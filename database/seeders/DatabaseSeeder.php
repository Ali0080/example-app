<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Category::create(
            [
                'name'  => 'سیاسی',
                'slug'  => 'politic',
                'description' => '',
            ]
        );

        Category::create([
            'name'  => 'اقتصاد',
            'slug'  => 'economy',
            'description' => '',
        ]);

        Category::create(
            [
                'name'  => 'ورزشی',
                'slug'  => 'sport',
                'description' => '',
            ]
        );

        Article::create([
            'title' => 'Lorem ipsum dolor sit amet',
            'story' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'lead'  => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'category_id' => Category::first()->id
        ]);
    }
}
