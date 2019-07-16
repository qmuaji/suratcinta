<h3>Daftar User:</h3>
<ul>
    @foreach ($lesson->users as $user)
        <li>{{$user->name}} - {{$user->pivot->created_at}} - {{$user->pivot->data}}</li>
    @endforeach
</ul>

<h3>Jumlah Like: {{$lesson->likes->count()}}</h3>
