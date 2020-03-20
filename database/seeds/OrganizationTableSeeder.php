<?php

use Illuminate\Database\Seeder;
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
      $organization->provider_id = 'local';
      $organization->provider = 'local';
      $organization->username = 'unisuam';
      $organization->title    = 'UNISUAM';
      $organization->save();
    }
}
