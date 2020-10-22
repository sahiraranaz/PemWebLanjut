<?php

use app\Article;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach(range(0,10) as $i){
            DB::table('articles')->insert([
                // 'id' => $faker->number,
                'title' => $faker->text($maxNbChars = 10),
                'content' => $faker->text($maxNbChars = 250),
                'featured_image' => $faker->imageUrl($width = 640, $height = 480),
            ]);
        }
    }
}