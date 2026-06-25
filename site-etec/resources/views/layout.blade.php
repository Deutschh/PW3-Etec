<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title') | Site ETEC</title>

    <style>
        :root {
            --vermelho: #B91C1C;
            --vermelho-escuro: #7F1D1D;
            --cinza-claro: #F4F4F5;
            --cinza: #52525B;
            --preto: #18181B;
            --branco: #FFFFFF;
            --sombra: rgba(0, 0, 0, 0.12);
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(180deg, #FFFFFF 0%, #F4F4F5 100%);
            color: var(--preto);
        }

        header {
            background: linear-gradient(135deg, var(--vermelho), var(--vermelho-escuro));
            color: white;
            padding: 24px 20px;
        }

        .nav-container {
            max-width: 1100px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .brand {
            text-decoration: none;
            color: white;
        }

        .brand strong {
            display: block;
            font-size: 24px;
        }

        .brand small {
            opacity: 0.85;
        }

        nav {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }

        nav a {
            color: white;
            text-decoration: none;
            padding: 10px 14px;
            border-radius: 999px;
            background: rgba(255, 255, 255, 0.12);
            font-weight: bold;
            font-size: 14px;
        }

        nav a:hover {
            background: rgba(255, 255, 255, 0.24);
        }

        main {
            width: min(1100px, calc(100% - 32px));
            margin: 32px auto;
        }

        .hero {
            background: white;
            border-radius: 24px;
            padding: 42px;
            box-shadow: 0 18px 40px var(--sombra);
            margin-bottom: 24px;
            border-left: 8px solid var(--vermelho);
        }

        .hero h1 {
            font-size: clamp(32px, 5vw, 52px);
            margin: 0 0 14px;
            color: var(--vermelho-escuro);
        }

        .hero p {
            font-size: 18px;
            max-width: 760px;
        }

        .tag {
            display: inline-block;
            background: #FEE2E2;
            color: var(--vermelho-escuro);
            padding: 8px 12px;
            border-radius: 999px;
            font-weight: bold;
            font-size: 13px;
            margin-bottom: 16px;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 18px;
        }

        .grid-2 {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 18px;
        }

        .card {
            background: white;
            padding: 26px;
            border-radius: 20px;
            box-shadow: 0 10px 28px rgba(0, 0, 0, 0.08);
            margin-bottom: 20px;
        }

        .card h2, .card h3 {
            color: var(--vermelho-escuro);
            margin-top: 0;
        }

        p {
            color: var(--cinza);
            line-height: 1.7;
        }

        .btn {
            display: inline-block;
            background: var(--vermelho);
            color: white;
            padding: 12px 18px;
            border-radius: 999px;
            text-decoration: none;
            border: none;
            cursor: pointer;
            font-weight: bold;
            margin-top: 8px;
        }

        .btn:hover {
            background: var(--vermelho-escuro);
        }

        input, textarea {
            width: 100%;
            padding: 14px;
            border: 1px solid #D4D4D8;
            border-radius: 14px;
            margin-bottom: 16px;
            font-size: 15px;
        }

        input:focus, textarea:focus {
            outline: none;
            border-color: var(--vermelho);
            box-shadow: 0 0 0 4px rgba(185, 28, 28, 0.12);
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 6px;
            color: var(--preto);
        }

        .sucesso {
            background: #DCFCE7;
            color: #166534;
            padding: 14px;
            border-radius: 14px;
            margin-bottom: 18px;
            font-weight: bold;
        }

        .erro {
            background: #FEE2E2;
            color: #991B1B;
            padding: 14px;
            border-radius: 14px;
            margin-bottom: 18px;
        }

        footer {
            background: var(--preto);
            color: white;
            text-align: center;
            padding: 24px;
            margin-top: 50px;
        }

        footer p {
            color: rgba(255, 255, 255, 0.75);
            margin: 0;
        }

        @media (max-width: 850px) {
            .grid, .grid-2 {
                grid-template-columns: 1fr;
            }

            .hero {
                padding: 28px;
            }
        }
    </style>
</head>
<body>

    <header>
        <div class="nav-container">
            <a class="brand" href="{{ route('home') }}">
                <strong>ETEC</strong>
                <small>Educação, tecnologia e futuro</small>
            </a>

            <nav>
                <a href="{{ route('home') }}">Home</a>
                <a href="{{ route('cursos') }}">Cursos</a>
                <a href="{{ route('eventos') }}">Eventos</a>
                <a href="{{ route('formulario') }}">Formulário</a>
                <a href="{{ route('mensagens') }}">Mensagens</a>
            </nav>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>Projeto Laravel desenvolvido para atividade de PW.</p>
    </footer>

</body>
</html>