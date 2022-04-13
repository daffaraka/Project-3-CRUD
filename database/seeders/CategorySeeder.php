<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $faker = Factory::create('id_ID');

        // for($i = 1; $i <= 5; $i++){
            DB::table('categories')->insert([
                'category' => 'Tabloid',
            ]);

            DB::table('categories')->insert([
                'category' => 'Buku Besar',
            ]);

            DB::table('categories')->insert([
                'category' => 'Majalah',
            ]);

            DB::table('categories')->insert([
                'category' => 'Komik',
            ]);

            DB::table('categories')->insert([
                'category' => 'Buku SMA',
            ]);


            DB::table('categories')->insert([
                'category' => 'Buku SMP',
            ]);
        // }
    }
}
