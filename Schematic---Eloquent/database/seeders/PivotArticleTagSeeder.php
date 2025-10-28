<?php

namespace Database\Seeders;
use App\Models\Tag;
use App\Models\Article;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PivotArticleTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
         $tagIds = Tag::pluck('id');

        Article::all()->each(function ($article) use ($tagIds) {
            $article->tags()->sync($tagIds->random(rand(1, 4))->all());
        });
    }
}
