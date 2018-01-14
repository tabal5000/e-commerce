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

        Item::create([
          'title' => 'Laško Zlatorog',
          'description' => 'A specific taste which has remained the same over years owing to our unchanged recipe. Full of pride! Zlatorog is a pale lager with a specific flavour, rich head and a characteristic distinct bitterness achieved by using worldwide known Slovenian hop varieties. Incorporating the finest ingredients and the latest technological advances and brewed using our traditional formula which has remained unchanged for decades we can proudly say Zlatorog is a beer that was already enjoyed by our grandparents. Incorporating the finest ingredients and the latest technological advances and brewed using our traditional formula which has remained unchanged for decades we can proudly say Zlatorog is a beer that was already enjoyed by our grandparents. It is the best-selling Laško beer which suggests how nicely it goes down the hatch. In selected bars across Slovenia you can also indulge in a mug of Laško Zlatorog draught beer which gratifies all the senses and provides perfect pleasure.',
          'price' => 1.09,
          'img' => 'svetlo.png',
        ]);

        Item::create([
            'title' => 'Laško Zlatorog Dark',
            'description' => 'Laško Zlatorog dark Laško Zlatorog dark offers a characteristic aroma from the original 1941 recipe. Lighter in alcohol content and richer with a shade of charamel malt this beer remains within the boundaries of well known drinking routine. Unique taste and top quality mix great with lighter Zlatorog beer. Discover the dark side of the legendary Slovenian beer.',
            'price' => 1.11,
            'img' => 'temno.png',
        ]);

        Item::create([
            'title' => 'Laško Unpasteurized',
            'description' => 'Laško Nepasterizirano (Laško Unpasteurized) is an exceptionally drinkable light beer that comes in bottles with a retro hint, and is celebrated for its relaxed character formed by a full taste, a pleasantly fresh, hoppy aroma and the authentic bitterness of the legendary Slovenian beer. Laško Nepasterizirano offers a unique freshness, which is why its shelf life is limited to 12 weeks. It is, in fact, created with the help of a special procedure following the traditional recipe using pure malt. The perfect companion for spontaneous gatherings on hot and sunny days.',
            'price' => 1.33,
            'img' => 'nepasterizirano.png',
        ]);

        Item::create([
            'title' => 'Laško Weißbier',
            'description' => "Laško Weißbier Laško Weißbier was inspired by the freshness of the Alps. This light, unfiltered beer pivo is characterized by haziness, yeast sediment and special harmonious note with mild bitterness. It's made with lovers of rich flavored beers in mind and it's the perfect refreshment for hanging out with friends.",
            'price' => 1.45,
            'img' => 'weiss.png',
        ]);

        Item::create([
            'title' => 'Laško Malt',
            'description' => "It's easier to start when you know what's waiting for you at the end. Laško Malt is a carbonated refreshing beverage based on malt extract and comes in three fresh flavours: pear-melissa, strawberry or pineapple. It is suitable for everyone who finds the taste of beer and barley malt appealing but doesn't drink alcoholic beverages. Laško Malt is ideal refreshment for people characterized by a dynamic lifestyle and actively involved in sports. With an alcohol level of 0.0 Laško Malt fills the gap in the Laško brand product range, following global trends which predict a bright future for malt beverages. Laško Malt is the ally of '0.0' drivers.",
            'price' => 2.09,
            'img' => 'malt.png',
        ]);

        Item::create([
            'title' => 'Laško Special',
            'description' => 'Laško Special combines classic sophistication with chic trendsetting. On the one hand, the designation “traditionally brewed” is about reviving tried and tested names in new versions, and on the other, “new tradition” suggests fresh recipes. History is embodied in a noble red, and the future in an elegant silver neck label.',
            'price' => 2.00,
            'img' => 'special.png',
        ]);

        Item::create([
            'title' => 'Heineken Lager Beer',
            'description' => "It's a generic European lager that's been around forever. Great at weddings, picnics, and sporting events when it is being compared to domestic light beer.",
            'price' => 0.50,
            'img' => 'heineken.png',
        ]);

        Item::create([
            'title' => 'Bavaria Premium',
            'description' => 'Laško Special combines classic sophistication with chic trendsetting. On the one hand, the designation “traditionally brewed” is about reviving tried and tested names in new versions, and on the other, “new tradition” suggests fresh recipes. History is embodied in a noble red, and the future in an elegant silver neck label.',
            'price' => 1.03,
            'img' => 'bavaria.png',
        ]);

        Item::create([
            'title' => 'Desparados Tequilla',
            'description' => 'Desperados is a pale lager beer with 5.9% alcohol by volume originally produced by the French brewing company Fischer Brewery, now produced by Karlovačko Brewery.',
            'price' => 4.99,
            'img' => 'desparados.png',
        ]);

        Item::create([
            'title' => 'Bear Beer Special',
            'description' => 'Special Bear Beer beer. Combines classic sophistication with chic trendsetting.Great at weddings, picnics, and sporting events when it is being compared to domestic light beer.',
            'price' => 2.50,
            'img' => 'bearbeer.png',
        ]);

        Item::create([
            'title' => 'Chang',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'price' => 0.99,
            'img' => 'chang.png',
        ]);

        Item::create([
            'title' => 'KingFisher',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'price' => 0.33,
            'img' => 'kingfisher.png',
        ]);
        // for ($i = 0; $i < 10; $i++) {
        //     Item::create([
        //         'title' => $faker->sentence,
        //         'description' => $faker->text,
        //         'price' => $faker->randomFloat($maxNumOfDecimals = 2,$min = 1, $max = 2000),
        //         'img' => $faker->image('public/storage/images',300,400,null,false),
        //     ]);
        // }
    }
}
