<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Article;
class ArticleSeeder extends Seeder
{
    /**
     * uso di faker nel seed
     *
     * @return void
     */
    public function run(Faker  $faker)
    {
        for ($i=0; $i < 10; $i++) { 
            $newArticle = new Article();
            $newArticle->title = $faker->words(5, true);
            $newArticle->body = $faker->paragraph(4);
            $newArticle->save();
        }
    }
}
