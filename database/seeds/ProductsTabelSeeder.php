<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::truncate();

        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 10; $i++) {
            Product::create([
                'name'=>$faker->name,
                'code'=>$faker->word,
                'price'=>$faker->numberBetween(10, 30),
                'status'=>'active'
            ]);
        }
    }
}
