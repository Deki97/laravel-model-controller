{{-- File home.blade.php che contiene la views della schermata home, ovvero quella di default --}}
{{-- Questa è la pagina che viene mostrata appena il progetto viene caricato --}}
{{-- Infatti nella route web.php, è richiamata questa pagina, dato che è stata passata alla view tramite il Controller --}}

{{-- Indico che estende il layout di base che ho definito all'interno del file app.blade.php --}}
@extends('layouts.app')

<div class="container">
    <h1>Homepage</h1>

    <h2>Films</h2>

    <div class="movies">
        {{-- $movies è il nome della variabile nella quale in HomeController ho preso tutti i dati dal database tramite il Model Movie --}}
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