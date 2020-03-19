<?php

use Illuminate\Database\Seeder;
use GitScrum\Models\User;
use GitScrum\Models\Organization;
class OrganizationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $user_admin = User::where('name', 'Admin')->first();
      $organization = new Organization();
      $organization->title = 'Local';
      $organization->provider = 'local';
      $organization->email = 'organization@local.com';

      $organization->save();
      $user_admin->organizations()->attach($organization);

    }
}
