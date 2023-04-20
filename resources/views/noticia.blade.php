@extends('app')

@section('content')
<header>
    <h1>{{ $noticia->titulo }}</h1>
</header>
<main>
    <div class="credits">
        <p>{{ $noticia->autor }}</p>
        <p>{{ $noticia->fechapub }}</p>
    </div>
    <div class="contenido">
        <p>{{ $noticia->contenido }}</p>
        <img src="{{ $noticia->imagen }}" alt="{{ $noticia->titulo }}" width="200">
        <h3>Categorías</h3>
        <ol>
        @foreach ($categorias as $categoria)
            <li>{{ $categoria->nombre }}</li>
        @endforeach
        </ol>
    </div>
    <a href="{{ route('inicial') }}">Volver</a>
</main>

 @endsection