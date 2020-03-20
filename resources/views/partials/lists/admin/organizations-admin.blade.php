
<tr>
    <td>
        @switch(strtolower($organization->provider))
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
    <a href="{{$organization->html_url}}" target="_blank">
        <i class="fa {{ $class_avatar }}" aria-hidden="true"></i></a>
    </td>
    <td>{{$organization->name}}<br>
        <small>{{$organization->created_at}}</small></td>
    <td>{{$organization->email}}</td>
 @switch(strtolower($organization->provider))
        @case('local')
           @php($class_avatar = 'fas fa-building')
            @break
        @case('github')
        @php($class_avatar = 'fa-github-alt')
            @break
        @case('gitlab')
        @php($class_avatar = 'fa-gitlab-alt')
            @break
        @default
        @php($class_avatar = 'fas fa-server')
    @endswitch
    <td>
        <a href="{{$organization->html_url}}" target="_blank">
            <i class="fa {{ $class_avatar }}" aria-hidden="true"></i></a>  {{ $organization->provider }}
    </td>

<td>

</td>
    <td>
    @if(strtolower($organization->provider) == 'local')
        <a href="/gestao/organizations/{{$organization->id}}/edit" class="btn btn-primary">Editar</a>
        <form action="{{route('organizations.destroy',['id'=>$organization->id])}}" method="POST">
            {{method_field('DELETE')}}
       &nbsp; <input type="submit" class="btn btn-danger ml-2" onclick="return confirm('Deseja mesmo apagar')" value="Apagar" />
        </form>
   @endif
    </td>
</tr>
