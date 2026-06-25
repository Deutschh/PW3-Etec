@extends('layout')

@section('title', 'Mensagens')

@section('content')
    <section class="hero">
        <div class="hero-content">
            <span class="tag">🗃️ Banco de dados</span>

            <h1>Mensagens recebidas</h1>

            <p>
                Esta página exibe os registros enviados pelo formulário e salvos na tabela
                de mensagens do banco de dados.
            </p>

            <div class="actions">
                <a class="btn" href="{{ route('formulario') }}">Enviar nova mensagem</a>
            </div>
        </div>
    </section>

    @if ($mensagens->isEmpty())
        <section class="card">
            <h2>Nenhuma mensagem encontrada</h2>

            <p>
                Ainda não existem mensagens cadastradas no banco. Envie uma mensagem pelo formulário.
            </p>

            <a class="btn" href="{{ route('formulario') }}">Ir para o formulário</a>
        </section>
    @else
        <section class="grid-2">
            @foreach ($mensagens as $mensagem)
                <article class="card">
                    <span class="message-date">
                        Enviado em {{ $mensagem->created_at->format('d/m/Y H:i') }}
                    </span>

                    <h2>{{ $mensagem->assunto }}</h2>

                    <p>
                        <strong>Nome:</strong> {{ $mensagem->nome }}
                    </p>

                    <p>
                        <strong>E-mail:</strong> {{ $mensagem->email }}
                    </p>

                    <p>
                        {{ $mensagem->mensagem }}
                    </p>
                </article>
            @endforeach
        </section>
    @endif
@endsection