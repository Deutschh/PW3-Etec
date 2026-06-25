@extends('layout')

@section('title', 'Página não encontrada')

@section('content')
    <section class="hero">
        <div class="hero-content">
            <span class="tag">⚠️ Erro 404</span>

            <h1>Essa página saiu da rota</h1>

            <p>
                A URL acessada não faz parte do site da ETEC Zona Leste.
                Use o botão abaixo para voltar à página inicial.
            </p>

            <div class="actions">
                <a class="btn" href="{{ route('home') }}">Voltar para Home</a>
                <a class="btn btn-secondary" href="{{ route('cursos') }}">Ver cursos</a>
            </div>
        </div>
    </section>
@endsection