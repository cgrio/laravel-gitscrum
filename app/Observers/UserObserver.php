<?php

namespace GitScrum\Observers;

use GitScrum\Models\User;
use GitScrum\Models\Organization;
use GitScrum\Classes\Helper;
use Auth;

class UserObserver
{
    public function creating(User $user)
    {


        if (!isset($user->password)) {
            $user->password = encrypt('secret');
        }

        if (!isset($user->username)) {
            $user->username = snake_case($user->name);
        }

        if (!isset($user->active)) {
            $user->active = 0;
        }

        if (!isset($user->provider)) {
            $user->provider = 'local';
        }

        if (!isset($user->provider_id)) {
            $user->provider_id = mt_rand(0,9999999999);
        }
        if (!isset($user->avatar)) {
            $user->avatar = '/img/profile.png';
        }

    }

    public function created(User $user)
    {

        $organizations = Organization::all();
          if (count($user->organizations) == 0) {
            foreach($organizations as $org){
                $user->organizations()->attach($org);
            }
        }

    }

    public function updating(User $user)
    {

    }
}
