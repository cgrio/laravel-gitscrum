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
      $organization = new Organization();
      $organization->title = 'Local';
      $organization->provider = 'local';
      $organization->email = 'organization@local.com';
      $organization->save();
    }
}
