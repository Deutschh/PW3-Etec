@extends('layout')

@section('title', 'Página não encontrada')

@section('content')
    <section class="hero">
        <span class="tag">Erro 404</span>

        <h1>Página não encontrada</h1>

        <p>
            A página acessada não existe. Clique no botão abaixo para voltar à página inicial.
        </p>

        <a class="btn" href="{{ route('home') }}">Voltar para Home</a>
    </section>
@endsection