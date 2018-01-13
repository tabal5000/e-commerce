<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      $role_admin = new App\Role();
      $role_admin->name = 'admin';
      $role_admin->save();

      $role_staff = new App\Role();
      $role_staff->name = 'staff';
      $role_staff->save();

      $role_staff = new App\Role();
      $role_staff->name = 'customer';
      $role_staff->save();

    }
}
