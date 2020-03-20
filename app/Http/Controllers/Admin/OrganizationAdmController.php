<?php

namespace GitScrum\Http\Controllers\Admin;

use Illuminate\Http\Request;
use GitScrum\Models\User;
use GitScrum\Http\Requests\OrganizationRequest;
use GitScrum\Models\Organization;
use Carbon\Carbon;
use Auth;

class OrganizationAdmController extends Controller
{

public function __construct(){
    $this->middleware('auth');
    $this->middleware('admin.authenticated');
}


    public function index(){
        $organizations = Organization::all();

        return view('admin.organizations.index')
        ->with('list', $organizations);
    }

public function create(){
    return view('admin.organizations.create')->with('action', 'Create');
}



public function edit($id){
    $organization = Organization::find($id);

    return view('admin.organizations.edit')
    ->with('user', $organization)
    ->with('action', 'Update');
}



    public function store(OrganizationRequest $request)
    {

        Organization::create($request->all());

        return redirect()->route('usuarios.index')->with('success', trans('gitscrum.added-successfully'));
    }

    public function update(OrganizationRequest $request,$id)
    {

       $organization = Organization::findOrFail($id);

         $organization->update($request->all());

        return redirect()->route('usuarios.index')->with('success', trans('gitscrum.updated-successfully'));
    }

    public function destroy($id)
    {
        $organization = Organization::find($id);
        $organization->delete();

        //return back()->with('success', trans('gitscrum.deleted-successfully'));
        return redirect()->route('usuarios.index')->with('success', trans('gitscrum.deleted-successfully'));

    }
}
