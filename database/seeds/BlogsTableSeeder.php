<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;
use App\Models\Blog;


class BlogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
  public function run()
  {
  	$faker = Faker::create();
  	for ($i = 0; $i <10 ; $i++) {
		  Blog::create([
				'title' => $faker->title,
				'description' => $faker->text
			]);
  	}
  }
}
