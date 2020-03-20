<?php

use Illuminate\Database\Seeder;
use GitScrum\Models\User;
use GitScrum\Models\Role;
use GitScrum\Models\Organization;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $role_admin = Role::where('name', 'admin')->first();
      $role_manager  = Role::where('name', 'manager')->first();
      $organization = Organization::where('username', 'unisuam')->first();

      $admin = new User();
      $admin->name = 'Admin';
      $admin->email = 'admin@teste.com';
      $admin->password = bcrypt('secret');
      $admin->active = 1;
      $admin->provider = 'local';
      $admin->avatar = '/img/profile.png';
      $admin->save();
      $admin->roles()->attach($role_admin);
      $admin->organizations()->attach($organization);

      $manager = new User();
      $manager->name = 'Manager Name';
      $manager->email = 'manager@teste.com';
      $manager->password = bcrypt('secret');
      $manager->active = 1;
      $manager->avatar = '/img/profile.png';
      $manager->provider = 'local';
      $manager->save();
      $manager->roles()->attach($role_manager);
      $manager->organizations()->attach($organization);
    }
}
