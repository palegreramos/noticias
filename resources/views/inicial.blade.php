@extends('app')

@section('content')
<header>
    <h1>Blog de noticias</h1>
    <nav>
        <a href="api/noticia/1">Api Noticia</a>
        <a href="api/categoria/1/1">Api Categoria</a>
        <a href="api/noticias/1">Api Noticias</a>
    </nav>
</header>
<main>
    <h2>Últimas noticias</h2>

@foreach ($portada as $noticia)
    <ul>
        <li><a href="noticia/{{$noticia->id}}">{{ $noticia->titulo }}</a></li>
        <li>{{ $noticia->autor }}</li>
        <li>{{ $noticia->fechapub}}</li>
    </ul>
    <hr>
@endforeach

</main>
@endsection
