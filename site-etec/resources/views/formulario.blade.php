@extends('layout')

@section('title', 'Formulário')

@section('content')
    <section class="hero">
        <div class="hero-content">
            <span class="tag">✉️ Contato</span>

            <h1>Fale com a ETEC Zona Leste</h1>

            <p>
                Preencha o formulário para registrar uma mensagem sobre cursos, eventos,
                dúvidas ou interesse no projeto. Os dados serão validados e salvos no banco.
            </p>
        </div>
    </section>

    <section class="split">
        <div class="card">
            @if (session('sucesso'))
                <div class="sucesso">
                    {{ session('sucesso') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="erro">
                    <strong>Verifique os campos abaixo:</strong>

                    <ul>
                        @foreach ($errors->all() as $erro)
                            <li>{{ $erro }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('formulario.enviar') }}">
                @csrf

                <label for="nome">Nome</label>
                <input
                    type="text"
                    id="nome"
                    name="nome"
                    value="{{ old('nome') }}"
                    placeholder="Digite seu nome completo"
                >

                <label for="email">E-mail</label>
                <input
                    type="email"
                    id="email"
                    name="email"
                    value="{{ old('email') }}"
                    placeholder="Digite seu e-mail"
                >

                <label for="assunto">Assunto</label>
                <input
                    type="text"
                    id="assunto"
                    name="assunto"
                    value="{{ old('assunto') }}"
                    placeholder="Ex: Cursos, eventos, matrícula..."
                >

                <label for="mensagem">Mensagem</label>
                <textarea
                    id="mensagem"
                    name="mensagem"
                    rows="6"
                    placeholder="Digite sua mensagem para a ETEC Zona Leste"
                >{{ old('mensagem') }}</textarea>

                <button class="btn" type="submit">Enviar mensagem</button>
            </form>
        </div>

        <div class="visual-panel">
            <div>
                <span class="tag">🔐 CSRF ativo</span>
                <h2>Formulário protegido</h2>
                <p>
                    Este formulário utiliza a diretiva @csrf do Laravel para proteger o envio dos dados.
                </p>
            </div>

            <p>
                Após o envio, a mensagem é validada pelo Controller e armazenada no banco de dados.
            </p>
        </div>
    </section>
@endsection