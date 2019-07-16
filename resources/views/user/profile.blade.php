
<h1>hallo {{ $user->name }} no.passportnya {{$user->passport->no_pass}}</h1>

<h3>Daftar Forum</h3>
<ul>
    @foreach ($user->forums as $forum)
        <li>{{$forum->title}}</li>
    @endforeach
</ul>

<h3>Daftar kelas</h3>
<ul>
    @foreach ($user->lessons as $lesson)
        <li>{{$lesson->title}}</li>
    @endforeach
</ul>
