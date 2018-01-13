<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
use App\Order;

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

      $role_admin = Role::where('name','admin')->first();
      $role_staff = Role::where('name','staff')->first();
      $role_customer = Role::where('name','customer')->first();

      $first_order = Order::where('id','1')->first();
      $second_order = Order::where('id','2')->first();
      $third_order = Order::where('id','3')->first();
      $fouth_order = Order::where('id','4')->first();
      $fifth_order = Order::where('id','5')->first();
      $faker = \Faker\Factory::create();
      // User::create([
      //     'email' => 'admin@ep.si',
      //     'name' => 'Admin',
      //     'surname' => 'Adminius',
      //     'admin' => true,
      //     'staff' => true,
      //     'password' => bcrypt('pass'),
      //     'address' => 'Ulica bratov Rozman 4',
      //     'phone_number' => '051335754',
      // ]);


      $admin = new User();
      $admin->name = 'Admin';
      $admin->surname = 'Adminus';
      $admin->address = 'Ulica bratov Rozman 4';
      $admin->email = 'admin@ep.si';
      $admin->phone_number = '051335754';
      $admin->password = bcrypt('pass');
      $admin->verified = 1;
      $admin->save();
      $admin->roles()->attach($role_admin);

      $staff = new User();
      $staff->name = 'Ana';
      $staff->surname = 'Ananas';
      $staff->address = 'Palce 4';
      $staff->email = 'ana@ep.si';
      $staff->phone_number = '031264278';
      $staff->password = bcrypt('pass');
      $staff->save();
      $staff->roles()->attach($role_staff);

      $staff = new User();
      $staff->name = 'Tabs';
      $staff->surname = 'Zibert';
      $staff->address = 'Stara ulica 53';
      $staff->email = 'tabs@ep.si';
      $staff->phone_number = '055111321';
      $staff->password = bcrypt('pass');
      $staff->save();
      $staff->roles()->attach($role_staff);

      $customer = new User();
      $customer->name = 'Napoleon';
      $customer->surname = 'Precious';
      $customer->address = '3616 Farrell Park';
      $customer->email = 'ettie35@haag.com';
      $customer->phone_number = '313-131-131';
      $customer->password = bcrypt('pass');
      $customer->save();
      $customer->roles()->attach($role_customer);
      $customer->orders()->save($first_order);
      $customer->orders()->save($second_order);

      $customer = new User();
      $customer->name = 'Lisette';
      $customer->surname = "O'Hara";
      $customer->address = '596 Kerluke Shore';
      $customer->email = 'scarlett.cassin@yahoo.com';
      $customer->phone_number = '+1 (970) 508-5542';
      $customer->password = bcrypt('pass');
      $customer->save();
      $customer->roles()->attach($role_customer);
      $customer->orders()->save($third_order);
      $customer->orders()->save($fouth_order);

      $customer = new User();
      $customer->name = 'Gerard';
      $customer->surname = 'Stracke';
      $customer->address = '1232 Dell Center';
      $customer->email = 'morgan19@gmail.com';
      $customer->phone_number = '523-319-0632';
      $customer->password = bcrypt('pass');
      $customer->save();
      $customer->roles()->attach($role_customer);
      $customer->orders()->save($fifth_order);

      for ($i = 0; $i < 10; $i++) {
          $user = User::create([
            'email' => $faker->email,
            'name' => $faker->firstName,
            'surname' => $faker->lastName,
            'password' => bcrypt('pass'),
            'address' => $faker->address,
            'phone_number' => $faker->phoneNumber,
          ]);
          $user
             ->roles()
             ->attach(Role::where('name', 'customer')->first());

      }
    }
}
