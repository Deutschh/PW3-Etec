<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title') | ETEC Zona Leste</title>

    <style>
        :root {
            --vermelho: #C1121F;
            --vermelho-escuro: #780000;
            --vinho: #3A0A0A;
            --preto: #111111;
            --grafite: #1F2933;
            --cinza: #64748B;
            --cinza-claro: #F1F5F9;
            --branco: #FFFFFF;
            --linha: rgba(255, 255, 255, 0.14);
            --sombra: rgba(15, 23, 42, 0.16);
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            color: var(--grafite);
            background:
                radial-gradient(circle at top left, rgba(193, 18, 31, 0.10), transparent 32%),
                linear-gradient(180deg, #FFF7F7 0%, #F8FAFC 42%, #EEF2F7 100%);
            min-height: 100vh;
        }

        .top-bar {
            background: var(--preto);
            color: rgba(255, 255, 255, 0.78);
            padding: 8px 20px;
            font-size: 13px;
        }

        .top-bar-content {
            width: min(1180px, calc(100% - 32px));
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            gap: 16px;
            flex-wrap: wrap;
        }

        header {
            background:
                linear-gradient(135deg, rgba(120, 0, 0, 0.98), rgba(193, 18, 31, 0.96)),
                repeating-linear-gradient(45deg, rgba(255,255,255,0.05) 0 1px, transparent 1px 12px);
            color: white;
            padding: 22px 20px 76px;
            position: relative;
            overflow: hidden;
        }

        header::before {
            content: "";
            position: absolute;
            width: 420px;
            height: 420px;
            right: -170px;
            top: -180px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.10);
        }

        header::after {
            content: "";
            position: absolute;
            left: 0;
            right: 0;
            bottom: -1px;
            height: 56px;
            background: #FFF7F7;
            clip-path: polygon(0 55%, 12% 42%, 26% 62%, 42% 38%, 58% 60%, 74% 42%, 88% 58%, 100% 45%, 100% 100%, 0 100%);
        }

        .nav-container {
            width: min(1180px, calc(100% - 32px));
            margin: 0 auto;
            position: relative;
            z-index: 2;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 22px;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 14px;
            color: white;
            text-decoration: none;
        }

        .brand-mark {
            width: 58px;
            height: 58px;
            border-radius: 18px;
            background: white;
            color: var(--vermelho);
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 900;
            letter-spacing: -1px;
            box-shadow: 0 16px 34px rgba(0,0,0,0.18);
        }

        .brand strong {
            display: block;
            font-size: 24px;
            line-height: 1;
        }

        .brand small {
            display: block;
            margin-top: 5px;
            color: rgba(255, 255, 255, 0.80);
        }

        nav {
            display: flex;
            gap: 9px;
            flex-wrap: wrap;
            justify-content: flex-end;
        }

        nav a {
            color: white;
            text-decoration: none;
            padding: 10px 14px;
            border-radius: 999px;
            background: rgba(255, 255, 255, 0.11);
            border: 1px solid rgba(255, 255, 255, 0.13);
            font-weight: bold;
            font-size: 14px;
            transition: 0.2s;
        }

        nav a:hover {
            background: white;
            color: var(--vermelho-escuro);
            transform: translateY(-2px);
        }

        main {
            width: min(1180px, calc(100% - 32px));
            margin: -42px auto 0;
            position: relative;
            z-index: 5;
        }

        .hero {
            background:
                linear-gradient(135deg, rgba(255,255,255,0.98), rgba(255,245,245,0.96));
            border-radius: 30px;
            padding: 46px;
            box-shadow: 0 22px 60px var(--sombra);
            border: 1px solid rgba(193, 18, 31, 0.12);
            margin-bottom: 24px;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: "";
            position: absolute;
            width: 230px;
            height: 230px;
            right: -80px;
            top: -90px;
            border-radius: 50%;
            background: rgba(193, 18, 31, 0.10);
        }

        .hero::after {
            content: "";
            position: absolute;
            width: 180px;
            height: 180px;
            right: 120px;
            bottom: -110px;
            border-radius: 50%;
            background: rgba(17, 17, 17, 0.06);
        }

        .hero-content {
            position: relative;
            z-index: 2;
            max-width: 760px;
        }

        .tag {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 8px 13px;
            border-radius: 999px;
            background: #FEE2E2;
            color: var(--vermelho-escuro);
            font-weight: 800;
            font-size: 13px;
            margin-bottom: 16px;
        }

        h1 {
            font-size: clamp(34px, 5vw, 58px);
            line-height: 1;
            margin: 0 0 16px;
            color: var(--preto);
            letter-spacing: -1.5px;
        }

        h2 {
            color: var(--preto);
            margin-top: 0;
        }

        h3 {
            color: var(--vermelho-escuro);
            margin-top: 0;
        }

        p {
            color: var(--cinza);
            line-height: 1.7;
            font-size: 16px;
        }

        .hero p {
            font-size: 18px;
        }

        .actions {
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
            margin-top: 24px;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            background: linear-gradient(135deg, var(--vermelho), var(--vermelho-escuro));
            color: white;
            padding: 13px 18px;
            border-radius: 999px;
            text-decoration: none;
            border: none;
            cursor: pointer;
            font-weight: bold;
            box-shadow: 0 12px 26px rgba(193, 18, 31, 0.26);
            transition: 0.2s;
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 16px 32px rgba(193, 18, 31, 0.34);
        }

        .btn-secondary {
            background: white;
            color: var(--vermelho-escuro);
            border: 1px solid rgba(193, 18, 31, 0.22);
            box-shadow: none;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 18px;
            margin-bottom: 24px;
        }

        .grid-2 {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 18px;
            margin-bottom: 24px;
        }

        .card {
            background: rgba(255,255,255,0.96);
            border-radius: 24px;
            padding: 28px;
            box-shadow: 0 14px 34px rgba(15, 23, 42, 0.10);
            border: 1px solid rgba(148, 163, 184, 0.18);
            margin-bottom: 20px;
            position: relative;
            overflow: hidden;
        }

        .card::before {
            content: "";
            position: absolute;
            inset: 0;
            border-top: 4px solid rgba(193, 18, 31, 0.8);
            opacity: 0.85;
            pointer-events: none;
        }
        
        .card > * {
    position: relative;
    z-index: 1;
}

        .icon-box {
            width: 56px;
            height: 56px;
            border-radius: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #FFF1F2;
            color: var(--vermelho);
            font-size: 27px;
            margin-bottom: 16px;
        }

        .highlight {
            background:
                linear-gradient(135deg, var(--preto), var(--vinho));
            color: white;
            border: none;
        }

        .highlight h2,
        .highlight h3,
        .highlight p {
            color: white;
        }

        .highlight p {
            opacity: 0.82;
        }

        .stats {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 14px;
            margin-bottom: 24px;
        }

        .stat {
            background: white;
            border-radius: 22px;
            padding: 22px;
            box-shadow: 0 12px 28px rgba(15, 23, 42, 0.09);
            border: 1px solid rgba(193, 18, 31, 0.10);
        }

        .stat strong {
            display: block;
            color: var(--vermelho);
            font-size: 32px;
            line-height: 1;
            margin-bottom: 6px;
        }

        .stat span {
            color: var(--cinza);
            font-weight: bold;
            font-size: 13px;
        }

        .course-area,
        .event-type,
        .message-date {
            display: inline-block;
            background: #FEE2E2;
            color: var(--vermelho-escuro);
            padding: 7px 10px;
            border-radius: 999px;
            font-size: 12px;
            font-weight: bold;
            margin-bottom: 12px;
        }

        input, textarea {
            width: 100%;
            padding: 15px;
            border: 1px solid #CBD5E1;
            border-radius: 16px;
            margin-bottom: 16px;
            font-size: 15px;
            background: #F8FAFC;
            transition: 0.2s;
        }

        input:focus, textarea:focus {
            outline: none;
            background: white;
            border-color: var(--vermelho);
            box-shadow: 0 0 0 4px rgba(193, 18, 31, 0.12);
        }

        label {
            display: block;
            font-weight: 800;
            margin-bottom: 7px;
            color: var(--preto);
        }

        .sucesso {
            background: #DCFCE7;
            color: #166534;
            padding: 15px;
            border-radius: 16px;
            margin-bottom: 18px;
            font-weight: bold;
            border: 1px solid rgba(22, 101, 52, 0.16);
        }

        .erro {
            background: #FEE2E2;
            color: #991B1B;
            padding: 15px;
            border-radius: 16px;
            margin-bottom: 18px;
            border: 1px solid rgba(153, 27, 27, 0.16);
        }

        .split {
            display: grid;
            grid-template-columns: 1.1fr 0.9fr;
            gap: 18px;
            margin-bottom: 24px;
        }

        .visual-panel {
            background:
                linear-gradient(135deg, #111111, #780000);
            border-radius: 28px;
            padding: 28px;
            color: white;
            min-height: 260px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            box-shadow: 0 18px 44px rgba(15, 23, 42, 0.16);
            position: relative;
            overflow: hidden;
        }

        .visual-panel::after {
            content: "</>";
            position: absolute;
            right: 22px;
            bottom: -24px;
            font-size: 110px;
            font-weight: 900;
            opacity: 0.08;
        }

        .visual-panel h2,
        .visual-panel p {
            color: white;
        }

        .visual-panel p {
            opacity: 0.78;
        }

        footer {
            background: var(--preto);
            margin-top: 54px;
            color: white;
            padding: 28px 20px;
        }

        .footer-content {
            width: min(1180px, calc(100% - 32px));
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            gap: 16px;
            flex-wrap: wrap;
        }

        footer p {
            color: rgba(255,255,255,0.72);
            margin: 0;
        }

        @media (max-width: 900px) {
            .nav-container {
                flex-direction: column;
                align-items: flex-start;
            }

            nav {
                justify-content: flex-start;
            }

            .grid,
            .grid-2,
            .stats,
            .split {
                grid-template-columns: 1fr;
            }

            .hero {
                padding: 32px 24px;
            }
        }
    </style>
</head>
<body>

    <div class="top-bar">
        <div class="top-bar-content">
            <span>Projeto Laravel — Programação Web</span>
            <span>ETEC Zona Leste • Ensino técnico e tecnologia</span>
        </div>
    </div>

    <header>
        <div class="nav-container">
            <a class="brand" href="{{ route('home') }}">
                <span class="brand-mark">ETEC</span>

                <span>
                    <strong>ETEC Zona Leste</strong>
                    <small>Educação técnica conectada ao futuro</small>
                </span>
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
        <div class="footer-content">
            <p>ETEC Zona Leste — Projeto acadêmico em Laravel.</p>
            <p>Controller • Migration • Views • CSRF • MySQL</p>
        </div>
    </footer>

</body>
</html>