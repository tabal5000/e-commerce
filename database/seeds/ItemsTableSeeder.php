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
          'img' => '/storage/images/svetlo.png',
        ]);

        Item::create([
            'title' => 'Laško Zlatorog Dark',
            'description' => 'Laško Zlatorog dark Laško Zlatorog dark offers a characteristic aroma from the original 1941 recipe. Lighter in alcohol content and richer with a shade of charamel malt this beer remains within the boundaries of well known drinking routine. Unique taste and top quality mix great with lighter Zlatorog beer. Discover the dark side of the legendary Slovenian beer.',
            'price' => 1.09,
            'img' => '/storage/images/temno.png',
        ]);

        Item::create([
            'title' => 'Laško Unpasteurized',
            'description' => 'Laško Nepasterizirano (Laško Unpasteurized) is an exceptionally drinkable light beer that comes in bottles with a retro hint, and is celebrated for its relaxed character formed by a full taste, a pleasantly fresh, hoppy aroma and the authentic bitterness of the legendary Slovenian beer. Laško Nepasterizirano offers a unique freshness, which is why its shelf life is limited to 12 weeks. It is, in fact, created with the help of a special procedure following the traditional recipe using pure malt. The perfect companion for spontaneous gatherings on hot and sunny days.',
            'price' => 1.33,
            'img' => '/storage/images/nepasterizirano.png',
        ]);

        Item::create([
            'title' => 'Laško Weißbier',
            'description' => "Laško Weißbier Laško Weißbier was inspired by the freshness of the Alps. This light, unfiltered beer pivo is characterized by haziness, yeast sediment and special harmonious note with mild bitterness. It's made with lovers of rich flavored beers in mind and it's the perfect refreshment for hanging out with friends.",
            'price' => 1.45,
            'img' => '/storage/images/weiss.png',
        ]);

        Item::create([
            'title' => 'Laško Malt',
            'description' => "It's easier to start when you know what's waiting for you at the end. Laško Malt is a carbonated refreshing beverage based on malt extract and comes in three fresh flavours: pear-melissa, strawberry or pineapple. It is suitable for everyone who finds the taste of beer and barley malt appealing but doesn't drink alcoholic beverages. Laško Malt is ideal refreshment for people characterized by a dynamic lifestyle and actively involved in sports. With an alcohol level of 0.0 Laško Malt fills the gap in the Laško brand product range, following global trends which predict a bright future for malt beverages. Laško Malt is the ally of '0.0' drivers.",
            'price' => 2.09,
            'img' => '/storage/images/malt.png',
        ]);

        Item::create([
            'title' => 'Laško Special',
            'description' => 'Laško Special combines classic sophistication with chic trendsetting. On the one hand, the designation “traditionally brewed” is about reviving tried and tested names in new versions, and on the other, “new tradition” suggests fresh recipes. History is embodied in a noble red, and the future in an elegant silver neck label.',
            'price' => 1.09,
            'img' => '/storage/images/special.png',
        ]);

        Item::create([
            'title' => 'Heineken Lager Beer',
            'description' => "It's a generic European lager that's been around forever. Great at weddings, picnics, and sporting events when it is being compared to domestic light beer.",
            'price' => 1.09,
            'img' => 'http://i.imgur.com/RZaSkek.jpg',
        ]);

        Item::create([
            'title' => 'Weqqik Beer',
            'description' => 'Laško Special combines classic sophistication with chic trendsetting. On the one hand, the designation “traditionally brewed” is about reviving tried and tested names in new versions, and on the other, “new tradition” suggests fresh recipes. History is embodied in a noble red, and the future in an elegant silver neck label.',
            'price' => 1.09,
            'img' => 'http://i.imgur.com/We5qqik.jpg',
        ]);

        Item::create([
            'title' => 'Bavaria Premium',
            'description' => 'Laško Special combines classic sophistication with chic trendsetting. On the one hand, the designation “traditionally brewed” is about reviving tried and tested names in new versions, and on the other, “new tradition” suggests fresh recipes. History is embodied in a noble red, and the future in an elegant silver neck label.',
            'price' => 1.09,
            'img' => 'http://www.bavaria.com/sites/default/files/Bavaria-premium-beer-bottle-33cl-%28drops%29_300dpi_297x420mm_K_11.png',
        ]);

        Item::create([
            'title' => 'Encrypted Beer',
            'description' => 'Laško Special combines classic sophistication with chic trendsetting. On the one hand, the designation “traditionally brewed” is about reviving tried and tested names in new versions, and on the other, “new tradition” suggests fresh recipes. History is embodied in a noble red, and the future in an elegant silver neck label.',
            'price' => 1.09,
            'img' => 'http://asset1.marksandspencer.com/is/image/mands/SD_FD_F23A_00360500_NC_X_EC_0',
        ]);

        Item::create([
            'title' => 'SomeBeer Lagerish Beerio',
            'description' => 'Laško Special combines classic sophistication with chic trendsetting. On the one hand, the designation “traditionally brewed” is about reviving tried and tested names in new versions, and on the other, “new tradition” suggests fresh recipes. History is embodied in a noble red, and the future in an elegant silver neck label.',
            'price' => 1.09,
            'img' => 'http://www.drinkshop.co.nz/wp-content/uploads/2010/07/file_111_8.jpg',
        ]);

        Item::create([
            'title' => 'Duff Beer',
            'description' => 'Laško Special combines classic sophistication with chic trendsetting. On the one hand, the designation “traditionally brewed” is about reviving tried and tested names in new versions, and on the other, “new tradition” suggests fresh recipes. History is embodied in a noble red, and the future in an elegant silver neck label.',
            'price' => 1.09,
            'img' => 'https://279173f3.nuajik.io/589-large_default/duff-beer-bottle.jpg',
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
