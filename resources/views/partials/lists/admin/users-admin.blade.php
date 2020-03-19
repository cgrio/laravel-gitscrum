

<tr>
    <td><a href="{{route('user.profile', ['username'=>$user->username])}}">
        <img src="{{$user->avatar}}" width="50" height="50" class="avatar-min" /></a></td>
    <td>{{$user->name}}<br>
        <small>{{$user->created_at}}</small></td>
    <td>{{$user->email}}</td>
 @switch(strtolower($user->provider))
        @case("local")
           @php($class_avatar = 'fas fa-building')
            @break
        @case("github")
        @php($class_avatar = 'fa-github-alt')
            @break
        @case("gitlab")
        @php($class_avatar = 'fa-gitlab-alt')
            @break
        @default
        @php($class_avatar = 'fas fa-server')
    @endswitch
    <td>
        <a href="{{$user->html_url}}" target="_blank">
        <i class="fa {{ $class_avatar }}" aria-hidden="true"></i></a>  {{ $user->provider }}
    </td>
    <td>
    @if(strtolower($user->provider) == 'local')
        <a href="/gestao/usuarios/{{$user->id}}/edit" class="btn btn-primary">Editar</a>
       &nbsp; <a href="/gestao/usuarios/{{$user->id}}/destroy" class="btn btn-danger ml-2">Apagar</a>

   @endif
    </td>
</tr>
