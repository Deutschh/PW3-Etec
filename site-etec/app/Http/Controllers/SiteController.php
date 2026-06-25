<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mensagem;

class SiteController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Controller principal do site da ETEC Zona Leste
    |--------------------------------------------------------------------------
    | Este controller organiza as páginas principais do sistema:
    | Home, Cursos, Eventos, Formulário e Mensagens.
    */

    public function home()
    {
        return view('home');
    }

    public function cursos()
    {
        /*
        | Array com cursos apresentados no site.
        | Os dados são enviados para a View cursos.blade.php.
        */

        $cursos = [
            [
                'nome' => 'Desenvolvimento de Sistemas',
                'area' => 'Tecnologia',
                'descricao' => 'Formação voltada à criação de sites, sistemas, aplicativos, banco de dados e lógica de programação.',
                'icone' => '💻',
            ],
            [
                'nome' => 'Administração',
                'area' => 'Gestão',
                'descricao' => 'Curso focado em processos administrativos, organização empresarial, finanças, comunicação e gestão.',
                'icone' => '📊',
            ],
            [
                'nome' => 'Logística',
                'area' => 'Operações',
                'descricao' => 'Formação relacionada a transporte, estoque, distribuição, planejamento e cadeia de suprimentos.',
                'icone' => '🚚',
            ],
        ];

        return view('cursos', ['cursos' => $cursos]);
    }

    public function eventos()
    {
        /*
        | Eventos fictícios criados para simular uma agenda escolar.
        | Essa estrutura permite exibir dados dinâmicos na View.
        */

        $eventos = [
            [
                'titulo' => 'Mostra Técnica da ETEC Zona Leste',
                'data' => '24/06/2026',
                'tipo' => 'Projetos',
                'descricao' => 'Apresentação de trabalhos desenvolvidos pelos alunos dos cursos técnicos.',
            ],
            [
                'titulo' => 'Semana da Tecnologia',
                'data' => '10/08/2026',
                'tipo' => 'Palestras',
                'descricao' => 'Encontro com oficinas, palestras e atividades sobre programação, inovação e mercado de trabalho.',
            ],
            [
                'titulo' => 'Feira de Profissões',
                'data' => '15/09/2026',
                'tipo' => 'Orientação',
                'descricao' => 'Evento para apresentar cursos técnicos, áreas de atuação e possibilidades profissionais.',
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
        /*
        | Validação do formulário.
        | Antes de salvar no banco, o Laravel verifica se os dados enviados
        | atendem às regras definidas abaixo.
        */

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

        // Salva os dados validados na tabela mensagens.
        Mensagem::create($dadosValidados);

        return back()->with('sucesso', 'Mensagem enviada com sucesso para a ETEC Zona Leste!');
    }

    public function mensagens()
    {
        /*
        | Busca as mensagens cadastradas no banco de dados.
        | latest() ordena os registros do mais recente para o mais antigo.
        */

        $mensagens = Mensagem::latest()->get();

        return view('mensagens', ['mensagens' => $mensagens]);
    }
}