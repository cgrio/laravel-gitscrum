<div class="feed-element">
    <a href="{{route('user.profile', ['username'=>$activity->username])}}" class="pull-left  mr10">
        <img alt="image" class="img-rounded avatar" src="{{$activity->avatar}}">
    </a>
    <div class="media-body">
        <small class="pull-right">{{$activity->dateforHumans()}}</small>
        <strong>{{$activity->username}}</strong>  ||  <strong>Horas:</strong> {{$activity->workload}}  <strong>Atividade:</strong> {{$activity->title}} <strong>Descrição: </strong> <small>{{$activity->descripition_activity}}</small>
        <br>
        <small class="text-muted"></small>
    </div>
</div>
