@extends('layout')

@section('title', 'Cursos')

@section('content')
    <section class="hero">
        <span class="tag">Cursos técnicos</span>

        <h1>Cursos disponíveis</h1>

        <p>
            Conheça alguns cursos oferecidos pela ETEC e suas principais áreas de atuação.
        </p>
    </section>

    <section class="grid">
        @foreach ($cursos as $curso)
            <article class="card">
                <h2>{{ $curso['nome'] }}</h2>

                <p>
                    {{ $curso['descricao'] }}
                </p>
            </article>
        @endforeach
    </section>
@endsection