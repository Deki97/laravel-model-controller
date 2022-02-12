@extends('layouts.app')

<h1>Homepage</h1>

<h2>Films</h2>

@foreach ($movies as $movie)
    <div>
        Title: {{ $movie->title }}
    </div>

    <div>
        Original Title: {{ $movie->original_title }}
    </div>

    <div>
        Vote: {{ $movie->vote }}
    </div>
@endforeach