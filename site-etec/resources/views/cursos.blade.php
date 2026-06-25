@extends('layout')

@section('title', 'Cursos')

@section('content')
    <section class="hero">
        <div class="hero-content">
            <span class="tag">📚 Cursos técnicos</span>

            <h1>Cursos da ETEC Zona Leste</h1>

            <p>
                Conheça alguns cursos técnicos representados neste projeto, com foco em tecnologia,
                gestão, operações e formação profissional.
            </p>
        </div>
    </section>

    <section class="grid">
        @foreach ($cursos as $curso)
            <article class="card">
                <div class="icon-box">{{ $curso['icone'] }}</div>

                <span class="course-area">{{ $curso['area'] }}</span>

                <h2>{{ $curso['nome'] }}</h2>

                <p>
                    {{ $curso['descricao'] }}
                </p>

                <a class="btn btn-secondary" href="{{ route('formulario') }}">
                    Tenho interesse
                </a>
            </article>
        @endforeach
    </section>

    <section class="card highlight">
        <h2>Por que escolher uma formação técnica?</h2>

        <p>
            A formação técnica aproxima o aluno de situações reais do mercado, desenvolvendo
            competências práticas, raciocínio lógico, organização e visão profissional.
        </p>
    </section>
@endsection