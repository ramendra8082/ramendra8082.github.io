<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class UserTableSeeder extends Seeder
{
    public function image(){
        $faker = Faker::create();
        $image=$faker->image('./public/seeds/',400, 400);
        return explode("public", $image)[1];
    }
    public function run()
    {
        $faker = Faker::create();
        DB::table('users')->insert([
            'name'   => 'Bharat Garg',
            'username'   => 'bharat',
            'email'      => 'bharatbgarg4@gmail.com',
            // 'imageUrl'    => $this->image(),
            'imageUrl'    => 'asdf',
            'password'   => bcrypt('qwert'),
            'admin'   => true,
            'editor'   => true,
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now()
            ]);
        foreach (range(1,40) as $index) {
            $name=$faker->name;
            DB::table('users')->insert([
                'name' => $name,
                'username'=>str_slug($name),
                'email' => $faker->email,
                // 'imageUrl'    => $this->image(),
                'imageUrl'    => 'asdf',
                'password' => bcrypt('qwert'),
                'editor'   => $faker->randomElement([1,0,0,0]),
                'created_at'=>\Carbon\Carbon::now(),
                'updated_at'=>\Carbon\Carbon::now()
                ]);
        }
    }
}
