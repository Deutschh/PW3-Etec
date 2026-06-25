@extends('layout')

@section('title', 'Eventos')

@section('content')
    <section class="hero">
        <div class="hero-content">
            <span class="tag">📅 Agenda escolar</span>

            <h1>Eventos e atividades da ETEC Zona Leste</h1>

            <p>
                Uma página dedicada a simular eventos acadêmicos, mostras, palestras e atividades
                que aproximam os alunos da prática profissional.
            </p>
        </div>
    </section>

    <section class="grid">
        @foreach ($eventos as $evento)
            <article class="card">
                <span class="event-type">{{ $evento['tipo'] }}</span>

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

    <section class="split">
        <div class="visual-panel">
            <div>
                <span class="tag">🚀 Mostra técnica</span>
                <h2>Alunos como protagonistas</h2>
                <p>
                    Os eventos valorizam projetos, apresentações e soluções desenvolvidas durante o curso.
                </p>
            </div>
        </div>

        <div class="card">
            <h2>Eventos no contexto escolar</h2>

            <p>
                As atividades acadêmicas ajudam os alunos a desenvolver comunicação, trabalho em equipe,
                criatividade e aplicação prática dos conhecimentos estudados.
            </p>

            <a class="btn" href="{{ route('formulario') }}">Enviar mensagem</a>
        </div>
    </section>
@endsection