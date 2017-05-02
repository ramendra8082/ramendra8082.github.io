<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class ArticleTableSeeder extends Seeder
{
	public function image(){
	    $faker = Faker::create();
	    $image=$faker->image('./public/seeds/',480, 320);
	    return explode("public", $image)[1];
	}

	public function run()
	{
		$faker = Faker::create();
		foreach (range(1,20) as $index) {
			$title=$faker->sentence;
			DB::table('articles')->insert([
				'title'   =>$title,
				'slug'=> str_slug($title),
				'preview'   => $faker->text,
				'imageUrl' => 'fasd',
				// 'imageUrl' => $this->image(),
				'content'      => $faker->text,
				'created_at'=>\Carbon\Carbon::now(),
				'updated_at'=>\Carbon\Carbon::now(),
				'user_id'=>$faker->numberBetween(1,8),
				]);
		}
	}
}
