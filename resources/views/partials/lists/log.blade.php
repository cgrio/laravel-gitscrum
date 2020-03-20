<div class="feed-element">
    <a href="{{route('user.profile', ['username'=>$log->user->username])}}" class="pull-left  mr10">
        <img alt="image" class="img-rounded avatar" src="{{$log->user->avatar}}">
    </a>
    <div class="media-body">
        <small class="pull-right">{{$log->dateforHumans()}}</small>
        <strong>{{$log->user->username}}</strong> {{$log->configStatus->description}}
        <br>
        <small class="text-muted"></small>
    </div>
</div>
