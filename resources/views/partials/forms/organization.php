<form action="{{route($route,['id'=>@$organization->id])}}" method="post" class="form-horizontal">
    {{ csrf_field() }}
    @if(strtolower($action) == "update"))
    {{method_field('PATCH')}}
    @endif
    <div class="form-group">
        <label class="col-sm-12">{{trans('gitscrum.organizations')}}</label>
        <input type="hidden" name="is_api" value="1" />
    </div>
    <div class="hr-line-dashed"></div>
    <div class="form-group">
        <label class="col-sm-12">{{trans('gitscrum.name')}}</label>
        <div class="col-sm-12">
            <input name="name" type="text" class="form-control" value="{{ @$organization->title }}"
                pattern=".{2,255}" title="{{trans('gitscrum.title-must-be-between-2-and-255-characters')}}"
                autocomplete="off" maxlength="255" required>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-12">{{trans('gitscrum.email')}}</label>
        <div class="col-sm-12">
            <textarea name="email" type="text" class="form-control">{{ @$organization->email }}</textarea>
            <span class="help-block m-b-none"></span>
        </div>
    </div>

    <div class="col-sm-12">
      <select name="active" class="form-control m-b">
            <option value="0" {{ @$organization->active==0?"selected='selected'":'' }}>desativado</option>
            <option value="1" {{ @$organization->active==1?"selected='selected'":'' }}>ativo</option>

        </select>

    </div>
    <div class="hr-line-dashed"></div>

    @include('partials.includes.form-btn-submit', ['action' => @$action])
</form>
