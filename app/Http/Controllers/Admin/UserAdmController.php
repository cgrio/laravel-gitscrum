<?php

namespace GitScrum\Http\Controllers\Admin;

use Illuminate\Http\Request;
use GitScrum\Models\User;
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
    public function store(Request $request)
    {
        resolve('NoteService')->create($request);

        return back()->with('success', trans('gitscrum.added-successfully'));
    }

    public function update(Request $request, $slug)
    {
        $request->request->add([
            'slug' => $slug
        ]);

        resolve('NoteService')->update($request);

        return back()->with('success', trans('gitscrum.updated-successfully'));
    }

    public function destroy($id)
    {
        $note = Note::find($id);
        //->where('user_id', Auth::user()->id)->firstOrFail();
        $note->delete();

        return back()->with('success', trans('gitscrum.deleted-successfully'));
    }
}
