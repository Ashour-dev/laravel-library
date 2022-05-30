<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use App\book;

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
        for ($i=0; $i < 200; $i++) { 
            $newBook= new Book();
            $newBook->name=$faker->words(2,true);
            $newBook->lang=$faker->languageCode();
            $newBook->format=$formats[rand(0,2)];
            $newBook->pages_number=rand(50,1000);
            $newBook-> save();
        }
    }
}
