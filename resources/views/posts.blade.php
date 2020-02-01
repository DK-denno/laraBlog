@extends('layout')

@section('bodysection')
<h1>Rada</h1>
@endsection
@foreach($posts as $post)
{{$post->title}}<br>
@endforeach