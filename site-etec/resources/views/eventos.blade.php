@extends('layout')

@section('title', 'Eventos')

@section('content')
    <section class="hero">
        <span class="tag">Agenda escolar</span>

        <h1>Eventos da ETEC</h1>

        <p>
            Confira alguns eventos acadêmicos e tecnológicos realizados na unidade.
        </p>
    </section>

    <section class="grid">
        @foreach ($eventos as $evento)
            <article class="card">
                <h2>{{ $evento['titulo'] }}</h2>

                <p>
                    <strong>Data:</strong> {{ $evento['data'] }}
                </p>

                <p>
                    {{ $evento['descricao'] }}
                </p>
            </article>
        @endforeach
    </section>
@endsection