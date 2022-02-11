<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>
<body>
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

</body>
</html>