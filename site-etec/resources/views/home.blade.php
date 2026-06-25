@extends('layout')

@section('title', 'Home')

@section('content')
    <section class="hero">
        <span class="tag">Site institucional</span>

        <h1>Bem-vindo ao site da ETEC</h1>

        <p>
            Este projeto apresenta um site institucional simples desenvolvido em Laravel,
            contendo páginas de cursos, eventos e formulário com proteção CSRF.
        </p>

        <a class="btn" href="{{ route('cursos') }}">Conhecer cursos</a>
    </section>

    <section class="grid">
        <div class="card">
            <h3>Ensino técnico</h3>
            <p>
                A ETEC oferece cursos técnicos voltados ao mercado de trabalho e à formação profissional.
            </p>
        </div>

        <div class="card">
            <h3>Projetos escolares</h3>
            <p>
                Os alunos desenvolvem projetos práticos utilizando tecnologia, pesquisa e criatividade.
            </p>
        </div>

        <div class="card">
            <h3>Eventos acadêmicos</h3>
            <p>
                A unidade realiza eventos, feiras e apresentações para integrar alunos e comunidade.
            </p>
        </div>
    </section>
@endsection