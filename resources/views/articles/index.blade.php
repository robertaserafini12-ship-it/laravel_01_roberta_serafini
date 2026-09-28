<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Il Mio Blog</title>
</head>
<body>
    <nav>
        <a href="{{ route('homepage') }}">Home</a> |
        <a href="{{ route('about') }}">Chi Siamo</a> |
        <a href="{{ route('articles.index') }}">Blog</a>
    </nav>

    <hr>

    <h1>Articoli del Blog</h1>

    @foreach($articles as $id => $article)
        <div style="margin-bottom: 20px;">
            <h2>{{ $article['title'] }}</h2>
            <p><strong>Categoria:</strong> {{ $article['category'] }}</p>
            <!-- Link parametrico -->
            <a href="{{ route('articles.show', ['id' => $id]) }}">Leggi l'articolo</a>
        </div>
    @endforeach
</body>
</html>