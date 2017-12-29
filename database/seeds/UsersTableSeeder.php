<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

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

      for ($i = 0; $i < 20; $i++) {
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
