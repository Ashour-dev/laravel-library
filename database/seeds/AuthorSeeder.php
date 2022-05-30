<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use App\Author;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 100 ; $i++) { 
            $NewAuthor= new Author();
            $NewAuthor->first_name=$faker->firstName();
            $NewAuthor->last_name=$faker->lastName();
            $NewAuthor->save();
        }
    }
}
