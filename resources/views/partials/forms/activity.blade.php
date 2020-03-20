<form action="{{route('activities.store')}}" method="post" id="frm_notes_title">
    {{ csrf_field() }}
    <input type="hidden" name="user_id" value="{{\Illuminate\Support\Facades\Auth::id()}}">
    <input type="hidden" name="issues_id" value="{{$id}}">

    <div class="form-group">
        <label for="activity" style="margin-right: 60px">{{trans('gitscrum.activity-performed')}}</label><label for="workload">{{trans('gitscrum.workload-label')}}</label>
        <div class="input-group" >
            <select id="activity" style="width: 200px" class="form-control" name="note_id">
                @foreach($activities as $activity)
                <option value="{{$activity->id}}">{{$activity->title}}</option>
                @endforeach
            </select>
            <input id="workload" style="width: 50px" class="form-control" max="9" min="1" name="workload" type="number" autocomplete="off">
            <label for="description" style="margin-right: 75px">{{trans('gitscrum.description')}}</label>
            <textarea id="description" style="width: 250px" class="form-control" name="description" autocomplete="off">
            </textarea>
            <span class="input-group-btn">
                <button id="frm_notes_submit" class="btn btn-default btn-loader" type="submit">{{trans('gitscrum.add')}}</button>
            </span>
        </div>
        <div class="input-group">
        </div>
    </div>
</form>
