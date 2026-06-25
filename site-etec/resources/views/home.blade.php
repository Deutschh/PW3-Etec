@extends('layout')

@section('title', 'Home')

@section('content')
    <section class="hero">
        <div class="hero-content">
            <span class="tag">🏫 Site institucional</span>

            <h1>ETEC Zona Leste: formação técnica com identidade, tecnologia e futuro</h1>

            <p>
                Este projeto apresenta um site institucional desenvolvido em Laravel para representar
                a ETEC Zona Leste, destacando cursos, eventos e um formulário integrado ao banco de dados.
            </p>

            <div class="actions">
                <a class="btn" href="{{ route('cursos') }}">Conhecer cursos</a>
                <a class="btn btn-secondary" href="{{ route('formulario') }}">Enviar mensagem</a>
            </div>
        </div>
    </section>

    <section class="stats">
        <div class="stat">
            <strong>3</strong>
            <span>Cursos em destaque</span>
        </div>

        <div class="stat">
            <strong>Laravel</strong>
            <span>Framework utilizado</span>
        </div>

        <div class="stat">
            <strong>CSRF</strong>
            <span>Proteção no formulário</span>
        </div>

        <div class="stat">
            <strong>MySQL</strong>
            <span>Banco de dados</span>
        </div>
    </section>

    <section class="split">
        <div class="card">
            <h2>Sobre o projeto</h2>

            <p>
                O site foi criado para simular uma página institucional moderna da ETEC Zona Leste.
                A proposta é mostrar domínio de rotas, controller, views, migration, formulário e banco de dados.
            </p>

            <p>
                A interface foi pensada para fugir do visual genérico, usando uma identidade visual inspirada
                nas cores tradicionais da instituição, com blocos modernos e foco em organização.
            </p>
        </div>

        <div class="visual-panel">
            <div>
                <span class="tag">💻 Programação Web</span>
                <h2>Laravel + Blade + MySQL</h2>
                <p>
                    Estrutura simples, organizada e funcional para apresentação acadêmica.
                </p>
            </div>

            <p>Projeto desenvolvido para atividade prática.</p>
        </div>
    </section>

    <section class="grid">
        <div class="card">
            <div class="icon-box">🎓</div>
            <h3>Formação técnica</h3>
            <p>
                Apresentação de cursos técnicos com foco em áreas ligadas ao mercado de trabalho.
            </p>
        </div>

        <div class="card">
            <div class="icon-box">🧪</div>
            <h3>Projetos e eventos</h3>
            <p>
                Página dedicada a eventos acadêmicos, mostras técnicas e atividades escolares.
            </p>
        </div>

        <div class="card">
            <div class="icon-box">🗃️</div>
            <h3>Banco de dados</h3>
            <p>
                As mensagens enviadas pelo formulário são validadas e armazenadas no MySQL.
            </p>
        </div>
    </section>
@endsection