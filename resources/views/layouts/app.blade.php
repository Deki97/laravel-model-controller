<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Importo un font personalizzato da Google, ovvero in questo caso Roboto --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    {{-- Creo il link al file css, che da scss verrà tradotto in css tramite il comando da terminale npm install --}}
    {{-- Con npm install importo le librerie del front-end, tra cui il css tradotto da scss --}}
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <title>Document</title>
</head>
<body>
    {{-- Questo è il file che contiene tutta la base del mio layout, dove importo gli stili ecc.. --}}
    {{-- Qui posso includere delle partials come header, footer oppure definire tramite yield delle partials che saranno diverse per ogni pagina, per esempio il main --}}
    {{-- Ad esempio posso definire uno @yield nel main dato che il suo contenuto potrebbe cambiare a seconda di in quale pagina mi trovo --}}
</body>
</html>