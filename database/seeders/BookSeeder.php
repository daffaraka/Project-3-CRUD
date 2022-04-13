<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create('id_ID');

        for($i = 1; $i <= 20; $i++){
            DB::table('books')->insert([
                'book_name' => $faker->word,
                'book_category' =>$faker->text(5),
                'book_author' => $faker->name,
            ]);
        }
       
    }
}
