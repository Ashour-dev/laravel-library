<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use App\book;
use App\Author;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $formats=['flexible cover','hardcover','E-Book'];
        $Authors_id=Author::pluck('id')->toArray();
        $c=count($Authors_id);
        for ($i=0; $i < 200; $i++) { 
            $newBook= new Book();
            $newBook->name=$faker->words(2,true);
            $newBook->cover='https://picsum.photos/id/' . rand(1,1000) . '/250/350';
            $newBook->lang=$faker->languageCode();
            $newBook->format=$formats[rand(0,2)];
            $newBook->pages_number=rand(50,1000);
            $newBook->Author_id=$faker->randomElement($Authors_id);
            $newBook-> save();
        }
    }
}
