@extends('layout')

@section('title', 'Mensagens')

@section('content')
    <section class="hero">
        <span class="tag">Banco de dados</span>

        <h1>Mensagens recebidas</h1>

        <p>
            Esta página exibe as mensagens salvas no banco de dados através do formulário.
        </p>
    </section>

    @if ($mensagens->isEmpty())
        <section class="card">
            <h2>Nenhuma mensagem encontrada</h2>

            <p>
                Ainda não existem mensagens cadastradas no banco.
            </p>
        </section>
    @else
        <section class="grid-2">
            @foreach ($mensagens as $mensagem)
                <article class="card">
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

                    <p>
                        <small>
                            Enviado em {{ $mensagem->created_at->format('d/m/Y H:i') }}
                        </small>
                    </p>
                </article>
            @endforeach
        </section>
    @endif
@endsection