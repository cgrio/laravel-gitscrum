<?php

namespace GitScrum\Http\Controllers\Admin;

use Illuminate\Http\Request;
use GitScrum\Models\User;
use GitScrum\Http\Requests\UserRequest;
use GitScrum\Models\Organization;
use Carbon\Carbon;
use Auth;

class UserAdmController extends Controller
{

public function __construct(){
    $this->middleware('auth');
    $this->middleware('admin.authenticated');
}


    public function index(){
        $users = User::all();

        return view('admin.users.index')
        ->with('list', $users);
    }

public function create(){
    return view('admin.users.create')->with('action', 'Create');
}



public function edit($id){
    $user = User::find($id);

    return view('admin.users.edit')
    ->with('user', $user)
    ->with('action', 'Update');
}



    public function store(UserRequest $request)
    {

        User::create($request->all());

        return redirect()->route('usuarios.index')->with('success', trans('gitscrum.added-successfully'));
    }

    public function update(UserRequest $request,$id)
    {

       $user = User::findOrFail($id);

         $user->update($request->all());

        return redirect()->route('usuarios.index')->with('success', trans('gitscrum.updated-successfully'));
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        //return back()->with('success', trans('gitscrum.deleted-successfully'));
        return redirect()->route('usuarios.index')->with('success', trans('gitscrum.deleted-successfully'));

    }
}
