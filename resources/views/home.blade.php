<h1>Homepage</h1>

<h2>Lista dei film</h2>

@foreach ($movies as $movie)
    <div>
        {{ $movie->title }}
    </div>
@endforeach