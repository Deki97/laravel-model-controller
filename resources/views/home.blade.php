@extends('layouts.app')

<div class="container">
    <h1>Homepage</h1>

    <h2>Films</h2>

    <div class="movies">
        @foreach ($movies as $movie)
        <div class="single-movie">
            <div class="title">
                <span class="tag">
                    Titolo
                </span> 
                <div>
                    {{ $movie->title }}
                </div>
            </div>
        
            <div class="original-title">
                <span class="tag">
                    Titolo originale
                </span> 
                <div>
                    {{ $movie->original_title }}
                </div>
            </div>
        
            <div class="vote">
                <span class="tag">
                    Voto
                </span> 
                <div>
                    {{ $movie->vote }}
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>