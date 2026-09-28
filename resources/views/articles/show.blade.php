<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>{{ $article['title'] }}</title>
</head>
<body>
    <nav>
        <a href="{{ route('homepage') }}">Home</a> |
        <a href="{{ route('articles.index') }}">Torna al Blog</a>
    </nav>

    <hr>

    <h1>{{ $article['title'] }}</h1>
    <p><em>Categoria: {{ $article['category'] }}</em></p>

    <p>{{ $article['content'] }}</p>

    <br>
    <a href="{{ route('articles.index') }}">← Torna all'elenco articoli</a>
</body>
</html>