<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mensagem;

class SiteController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Controller principal do site da ETEC
    |--------------------------------------------------------------------------
    | Este controller controla as páginas principais do projeto:
    | Home, Cursos, Eventos, Formulário e Mensagens.
    */

    public function home()
    {
        return view('home');
    }

    public function cursos()
    {
        $cursos = [
            [
                'nome' => 'Desenvolvimento de Sistemas',
                'descricao' => 'Curso voltado para programação, banco de dados, criação de sites e desenvolvimento de aplicações.',
            ],
            [
                'nome' => 'Administração',
                'descricao' => 'Curso focado em gestão, organização empresarial, finanças e processos administrativos.',
            ],
            [
                'nome' => 'Logística',
                'descricao' => 'Curso relacionado ao controle de estoque, transporte, distribuição e cadeia de suprimentos.',
            ],
        ];

        return view('cursos', ['cursos' => $cursos]);
    }

    public function eventos()
    {
        $eventos = [
            [
                'titulo' => 'Feira Tecnológica',
                'data' => '24/06/2026',
                'descricao' => 'Apresentação de projetos desenvolvidos pelos alunos da ETEC.',
            ],
            [
                'titulo' => 'Semana da Programação',
                'data' => '10/08/2026',
                'descricao' => 'Palestras e oficinas sobre desenvolvimento web, banco de dados e tecnologia.',
            ],
            [
                'titulo' => 'Mostra de Cursos',
                'data' => '15/09/2026',
                'descricao' => 'Evento para apresentar os cursos técnicos disponíveis na unidade.',
            ],
        ];

        return view('eventos', ['eventos' => $eventos]);
    }

    public function formulario()
    {
        return view('formulario');
    }

    public function enviarFormulario(Request $request)
    {
        $dadosValidados = $request->validate([
            'nome' => 'required|min:3',
            'email' => 'required|email',
            'assunto' => 'required|min:3',
            'mensagem' => 'required|min:10',
        ], [
            'nome.required' => 'O campo nome é obrigatório.',
            'nome.min' => 'O nome precisa ter pelo menos 3 caracteres.',
            'email.required' => 'O campo e-mail é obrigatório.',
            'email.email' => 'Digite um e-mail válido.',
            'assunto.required' => 'O campo assunto é obrigatório.',
            'assunto.min' => 'O assunto precisa ter pelo menos 3 caracteres.',
            'mensagem.required' => 'O campo mensagem é obrigatório.',
            'mensagem.min' => 'A mensagem precisa ter pelo menos 10 caracteres.',
        ]);

        Mensagem::create($dadosValidados);

        return back()->with('sucesso', 'Mensagem enviada com sucesso!');
    }

    public function mensagens()
    {
        $mensagens = Mensagem::latest()->get();

        return view('mensagens', ['mensagens' => $mensagens]);
    }
}