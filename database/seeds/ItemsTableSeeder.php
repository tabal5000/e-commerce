<?php

use Illuminate\Database\Seeder;
use App\Item;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Item::truncate();
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 10; $i++) {
            Item::create([
                'title' => $faker->sentence,
                'description' => $faker->text,
                'price' => $faker->randomFloat($maxNumOfDecimals = 2,$min = 1, $max = 2000),
                'img_url' => $faker->imageUrl($width = 400, $height = 600, 'cats', true, 'Faker')
            ]);
        }
    }
}
