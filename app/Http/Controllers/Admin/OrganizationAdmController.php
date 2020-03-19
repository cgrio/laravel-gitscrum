<?php

namespace GitScrum\Http\Controllers\Admin;

use Illuminate\Http\Request;
use GitScrum\Models\User;
use GitScrum\Models\Organization;
use Carbon\Carbon;
use Auth;

class OrganizationAdmController extends Controller
{



    public function index(){
        $users = User::all();

        return view('admin.users.index')
        ->with('list', $users);
    }

}
