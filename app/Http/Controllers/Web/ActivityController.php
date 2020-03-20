<?php

namespace GitScrum\Http\Controllers\Web;

use GitScrum\Http\Requests\ActivityRequest;
use GitScrum\Models\Activities;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function store(ActivityRequest $request){
        Activities::create($request->all());
        return back()->with('success', trans('gitscrum.added-successfully'));
    }

    public function destroy(int $id){
        Activities::destroy($id);
        return back()->with('success', trans('gitscrum.deleted-successfully'));
    }
}
