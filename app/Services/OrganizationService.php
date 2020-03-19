<?php

namespace GitScrum\Services;

use Auth;
use Illuminate\Http\Request;
use Carbon\Carbon;
use GitScrum\Http\Requests\OrganizationRequest;
use GitScrum\Models\Organization;

class OrganizationService extends Service
{
    public function create(OrganizationRequest $request)
    {
        $data = [
            'title' => $request->title,
            'description' => $request->description,

        ];

        $organization = Organization::create($data);

        return $organization;
    }

    public function update(Request $request)
    {
        $organization = Organization::find($request->id)->userActive()->firstOrFail();
        return $organization->save();
    }
}
