<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie; 

// Controller che creo tramite la riga di comando 'php artisan make:controller HomeController'
// Il Controller è una classe con dei metodi che vengono chiamati dalla Route
class HomeController extends Controller
{
    // Funzione index che assegna alla variabile '$movies' tutti i dati del database tramite il model 'Movie'
    // Il model Movie permette di lavorare con la tabella nel database, e deve essere il nome al singolare del database
    public function index() {
        // Quando il Controller ha bisogno dei dati, chiama il Model, in questo caso Movie
        $movies = Movie::all();
        
        // Passo dentro $data tutti i dati assegnandoli alla chiave 'movies'
        $data = [
            'movies' => $movies
        ];
        
        // Infine passo alla view tutti i dati che ho ottenuto dal database tramite la variabile $data
        return view('home', $data);
    }
}
