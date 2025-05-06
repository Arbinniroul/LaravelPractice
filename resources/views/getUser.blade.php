<h1>getUserName here</h1>
<h1>User name is {{$name}}</h1>
<h2>{{$users[0]}}</h2>


@if($name=="Anil")
<h2>This is hero</h2>
@elseif($name=="sam")
<h1>This us sam</h1>
@else
<h2>Other users</h2>
@endif

<div>
    @foreach($users as $user)
    <h5>{{$user}}</h5>
    @endforeach
</div>
<div>
    @for($i=0;$i<10;$i++)

     <h3>{{$i}}</h3>
     @endfor

</div>