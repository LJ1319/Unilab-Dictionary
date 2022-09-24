<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Word;
use Illuminate\Database\Seeder;

class WordCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::factory(3)->create();
        Word::factory(5)->create();
        $categories = Category::all();

        Word::all()->each(function ($word) use ($categories) {
            $word->categories()->attach($categories->random(rand(1, $categories->count()))->pluck('id')->toArray());
        });
    }
}
