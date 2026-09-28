<h1>I miei articoli</h1>

<ul>
    @foreach($articles as $id => $article)
        <li>
            <h3>{{ $article['title'] }}</h3>
            <p>Categoria: {{ $article['category'] }}</p>
            <!-- Link con parametro dinamico -->
            <a href="{{ route('blog.show', ['id' => $id]) }}">Leggi di più</a>
        </li>
    @endforeach
</ul>