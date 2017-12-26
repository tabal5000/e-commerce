<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      User::truncate();


      $faker = \Faker\Factory::create();
      User::create([
          'email' => 'admin@ep.si',
          'name' => 'Admin',
          'surname' => 'Adminius',
          'admin' => true,
          'staff' => true,
          'password' => bcrypt('pass'),
          'address' => 'Ulica bratov Rozman 4',
          'phone_number' => '051335754',
      ]);

      for ($i = 0; $i < 10; $i++) {
          User::create([
            'email' => $faker->email,
            'name' => $faker->firstName,
            'surname' => $faker->lastName,
            'password' => bcrypt('pass'),
            'address' => $faker->address,
            'phone_number' => $faker->phoneNumber,
        ]);
      }
    }
}
