@extends("layouts")

@section('title')
Contact us
@endsection
<h1>WELCOME TO CONTACT PAGE </h1>

<ul>
    @foreach ($tasks as $task)
        <li> {{$task}} </li>
    @endforeach
</ul>
    