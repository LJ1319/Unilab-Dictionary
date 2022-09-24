<?php

namespace Database\Seeders;

use App\Models\Tag;
use App\Models\Word;
use Illuminate\Database\Seeder;

class WordTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::factory(3)->create();
        $tags = Tag::all();

        Word::all()->each(function ($word) use ($tags) {
            $word->tags()->attach($tags->random(rand(1, $tags->count()))->pluck('id')->toArray());
        });
    }
}
