<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Img;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $articles = Article::factory(10)->create();

        foreach ($articles as $article) {

            Img::factory(1)->create([
                'imageable_id' => $article->id,
                'imageable_type' => 'App\Models\Article'
            ]);
        }
    }
}
