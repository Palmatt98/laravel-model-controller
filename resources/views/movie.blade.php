@extends('layouts.app')

@section('content')
    <h2>Movie</h2>
    <ul>
        @foreach ($movies as $movie)
        <li>{{$movie->title}}</li>
        @endforeach
    </ul>
@endsection
