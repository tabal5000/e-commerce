<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Order;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      $order1 = new Order();
      $order1->processed = 1;
      $order1->user_id = 4;
      $order1->cart = 'O:8:"App\Cart":3:{s:5:"items";a:2:{i:10;a:3:{s:3:"qty";i:2;s:5:"price";d:5;s:4:"item";O:8:"stdClass":7:{s:2:"id";i:10;s:5:"title";s:17:"Bear Beer Special";s:11:"description";s:176:"Special Bear Beer beer. Combines classic sophistication with chic trendsetting.Great at weddings, picnics, and sporting events when it is being compared to domestic light beer.";s:5:"price";s:4:"2.50";s:3:"img";s:28:"/storage/images/bearbeer.png";s:10:"created_at";s:19:"2018-01-07 19:27:47";s:10:"updated_at";s:19:"2018-01-07 19:27:47";}}i:6;a:3:{s:3:"qty";i:1;s:5:"price";d:2;s:4:"item";O:8:"stdClass":7:{s:2:"id";i:6;s:5:"title";s:14:"Laško Special";s:11:"description";s:334:"Laško Special combines classic sophistication with chic trendsetting. On the one hand, the designation “traditionally brewed” is about reviving tried and tested names in new versions, and on the other, “new tradition” suggests fresh recipes. History is embodied in a noble red, and the future in an elegant silver neck label.";s:5:"price";s:4:"2.00";s:3:"img";s:27:"/storage/images/special.png";s:10:"created_at";s:19:"2018-01-07 19:27:47";s:10:"updated_at";s:19:"2018-01-07 19:27:47";}}}s:8:"totalQty";i:3;s:10:"totalPrice";d:7;}';
      $order1->save();

      $order2 = new Order();
      $order2->processed = 1;
      $order2->user_id = 4;
      $order2->cart = 'O:8:"App\Cart":3:{s:5:"items";a:2:{i:4;a:3:{s:3:"qty";i:2;s:5:"price";d:2.8999999999999999;s:4:"item";O:8:"stdClass":7:{s:2:"id";i:4;s:5:"title";s:16:"Laško Weißbier";s:11:"description";s:320:"Laško Weißbier Laško Weißbier was inspired by the freshness of the Alps. This light, unfiltered beer pivo is characterized by haziness, yeast sediment and special harmonious note with mild bitterness. It"s made with lovers of rich flavored beers in mind and it"s the perfect refreshment for hanging out with friends.";s:5:"price";s:4:"1.45";s:3:"img";s:25:"/storage/images/weiss.png";s:10:"created_at";s:19:"2018-01-07 19:27:47";s:10:"updated_at";s:19:"2018-01-07 19:27:47";}}i:1;a:3:{s:3:"qty";i:4;s:5:"price";d:4.3600000000000003;s:4:"item";O:8:"stdClass":7:{s:2:"id";i:1;s:5:"title";s:15:"Laško Zlatorog";s:11:"description";s:985:"A specific taste which has remained the same over years owing to our unchanged recipe. Full of pride! Zlatorog is a pale lager with a specific flavour, rich head and a characteristic distinct bitterness achieved by using worldwide known Slovenian hop varieties. Incorporating the finest ingredients and the latest technological advances and brewed using our traditional formula which has remained unchanged for decades we can proudly say Zlatorog is a beer that was already enjoyed by our grandparents. Incorporating the finest ingredients and the latest technological advances and brewed using our traditional formula which has remained unchanged for decades we can proudly say Zlatorog is a beer that was already enjoyed by our grandparents. It is the best-selling Laško beer which suggests how nicely it goes down the hatch. In selected bars across Slovenia you can also indulge in a mug of Laško Zlatorog draught beer which gratifies all the senses and provides perfect pleasure.";s:5:"price";s:4:"1.09";s:3:"img";s:26:"/storage/images/svetlo.png";s:10:"created_at";s:19:"2018-01-07 19:27:47";s:10:"updated_at";s:19:"2018-01-07 19:27:47";}}}s:8:"totalQty";i:6;s:10:"totalPrice";d:7.2599999999999998;}';
      $order2->save();

      $order3 = new Order();
      $order3->processed = 0;
      $order3->user_id = 5;
      $order3->cart = 'O:8:"App\Cart":3:{s:5:"items";a:3:{i:9;a:3:{s:3:"qty";i:10;s:5:"price";d:49.900000000000006;s:4:"item";O:8:"stdClass":7:{s:2:"id";i:9;s:5:"title";s:19:"Desparados Tequilla";s:11:"description";s:163:"Desperados is a pale lager beer with 5.9% alcohol by volume originally produced by the French brewing company Fischer Brewery, now produced by Karlovačko Brewery.";s:5:"price";s:4:"4.99";s:3:"img";s:30:"/storage/images/desparados.png";s:10:"created_at";s:19:"2018-01-07 19:27:47";s:10:"updated_at";s:19:"2018-01-07 19:27:47";}}i:11;a:3:{s:3:"qty";i:2;s:5:"price";d:1.98;s:4:"item";O:8:"stdClass":7:{s:2:"id";i:11;s:5:"title";s:5:"Chang";s:11:"description";s:446:"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";s:5:"price";s:4:"0.99";s:3:"img";s:25:"/storage/images/chang.png";s:10:"created_at";s:19:"2018-01-07 19:27:47";s:10:"updated_at";s:19:"2018-01-07 19:27:47";}}i:10;a:3:{s:3:"qty";i:5;s:5:"price";d:12.5;s:4:"item";O:8:"stdClass":7:{s:2:"id";i:10;s:5:"title";s:17:"Bear Beer Special";s:11:"description";s:176:"Special Bear Beer beer. Combines classic sophistication with chic trendsetting.Great at weddings, picnics, and sporting events when it is being compared to domestic light beer.";s:5:"price";s:4:"2.50";s:3:"img";s:28:"/storage/images/bearbeer.png";s:10:"created_at";s:19:"2018-01-07 19:27:47";s:10:"updated_at";s:19:"2018-01-07 19:27:47";}}}s:8:"totalQty";i:17;s:10:"totalPrice";d:64.380000000000024;}';
      $order3->save();

      $order4 = new Order();
      $order4->processed = 1;
      $order4->user_id = 5;
      $order4->cart = 'O:8:"App\Cart":3:{s:5:"items";a:1:{i:3;a:3:{s:3:"qty";i:2;s:5:"price";d:2.6600000000000001;s:4:"item";O:8:"stdClass":7:{s:2:"id";i:3;s:5:"title";s:20:"Laško Unpasteurized";s:11:"description";s:574:"Laško Nepasterizirano (Laško Unpasteurized) is an exceptionally drinkable light beer that comes in bottles with a retro hint, and is celebrated for its relaxed character formed by a full taste, a pleasantly fresh, hoppy aroma and the authentic bitterness of the legendary Slovenian beer. Laško Nepasterizirano offers a unique freshness, which is why its shelf life is limited to 12 weeks. It is, in fact, created with the help of a special procedure following the traditional recipe using pure malt. The perfect companion for spontaneous gatherings on hot and sunny days.";s:5:"price";s:4:"1.33";s:3:"img";s:35:"/storage/images/nepasterizirano.png";s:10:"created_at";s:19:"2018-01-07 19:27:47";s:10:"updated_at";s:19:"2018-01-07 19:27:47";}}}s:8:"totalQty";i:2;s:10:"totalPrice";d:2.6600000000000001;}';
      $order4->save();

      $order5 = new Order();
      $order5->processed = 0;
      $order5->user_id = 6;
      $order5->cart = 'O:8:"App\Cart":3:{s:5:"items";a:1:{i:12;a:3:{s:3:"qty";i:24;s:5:"price";d:7.9199999999999999;s:4:"item";O:8:"stdClass":7:{s:2:"id";i:12;s:5:"title";s:10:"KingFisher";s:11:"description";s:446:"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";s:5:"price";s:4:"0.33";s:3:"img";s:30:"/storage/images/kingfisher.png";s:10:"created_at";s:19:"2018-01-07 19:27:47";s:10:"updated_at";s:19:"2018-01-07 19:27:47";}}}s:8:"totalQty";i:24;s:10:"totalPrice";d:7.9200000000000008;}';
      $order5->save();

    }
}
