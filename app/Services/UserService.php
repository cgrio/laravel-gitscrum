<?php

namespace GitScrum\Services;

use Auth;
use Illuminate\Http\Request;
use Carbon\Carbon;
use GitScrum\Http\Requests\UserRequest;
use GitScrum\Models\User;

class UserService extends Service
{
    public function create(UserRequest $request)
    {
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->email,
            'active' => $request->active,
        ];

        $user = User::create($data);

        return $user;
    }

    public function update(Request $request)
    {
        $user = User::find($request->id)->firstOrFail();



        return $user->save();
    }
}
