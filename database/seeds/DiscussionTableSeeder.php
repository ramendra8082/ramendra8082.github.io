<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class DiscussionTableSeeder extends Seeder
{
	public function run()
	{
		$faker = Faker::create();
		foreach (range(1,30) as $index) {
			$title=$faker->sentence;
			DB::table('discussions')->insert([
				'title'   => $title,
				'slug'=>str_slug($title),
				'content'      => $faker->text,
				'created_at'=>\Carbon\Carbon::now(),
				'updated_at'=>\Carbon\Carbon::now(),
				'user_id'=>$faker->numberBetween(1,20)
				]);
		}
	}
}
