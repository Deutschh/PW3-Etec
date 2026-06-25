@extends('layout')

@section('title', 'Formulário')

@section('content')
    <section class="hero">
        <span class="tag">Contato</span>

        <h1>Formulário de interesse</h1>

        <p>
            Preencha o formulário abaixo para enviar uma mensagem sobre cursos,
            eventos ou informações da ETEC.
        </p>
    </section>

    <section class="card">
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
                placeholder="Digite seu nome"
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
                placeholder="Ex: Curso, evento ou matrícula"
            >

            <label for="mensagem">Mensagem</label>
            <textarea
                id="mensagem"
                name="mensagem"
                rows="6"
                placeholder="Digite sua mensagem"
            >{{ old('mensagem') }}</textarea>

            <button class="btn" type="submit">Enviar mensagem</button>
        </form>
    </section>
@endsection