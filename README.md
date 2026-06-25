# Site ETEC - Projeto Laravel

Este projeto foi desenvolvido como atividade da disciplina de Programação Web, utilizando o framework Laravel com PHP, banco de dados MySQL e views Blade.

## Tema do projeto

O tema escolhido foi um site institucional da ETEC, contendo páginas informativas sobre a escola, cursos, eventos e um formulário de contato/interesse.

## Funcionalidades

* Página inicial do site;
* Página de cursos;
* Página de eventos;
* Formulário com proteção CSRF;
* Salvamento das mensagens no banco de dados;
* Página para visualizar mensagens enviadas;
* Controller para organizar a lógica do sistema;
* Migration para criação da tabela no banco;
* Views criadas com Blade;
* Rota fallback para páginas inexistentes;
* Comentários explicativos no código.

## Tecnologias utilizadas

* PHP
* Laravel
* MySQL
* XAMPP
* phpMyAdmin
* Blade
* HTML
* CSS

## Estrutura principal do projeto

```text
app/
├── Http/
│   └── Controllers/
│       └── SiteController.php
└── Models/
    └── Mensagem.php

database/
└── migrations/
    └── create_mensagens_table.php

resources/
└── views/
    ├── layout.blade.php
    ├── home.blade.php
    ├── cursos.blade.php
    ├── eventos.blade.php
    ├── formulario.blade.php
    ├── mensagens.blade.php
    └── errors/
        └── 404.blade.php

routes/
└── web.php
```

## Rotas do projeto

| Rota          | Função                            |
| ------------- | --------------------------------- |
| `/`           | Página inicial                    |
| `/cursos`     | Página de cursos                  |
| `/eventos`    | Página de eventos                 |
| `/formulario` | Formulário de contato             |
| `/mensagens`  | Lista mensagens salvas no banco   |
| Rota fallback | Página 404 para URLs inexistentes |

## Banco de dados

O banco utilizado no projeto se chama:

```text
site_etec
```

A tabela principal criada pela migration é:

```text
mensagens
```

Campos da tabela:

* id
* nome
* email
* assunto
* mensagem
* created_at
* updated_at

## Como executar o projeto

1. Clonar o repositório:

```bash
git clone LINK_DO_REPOSITORIO
```

2. Entrar na pasta do projeto:

```bash
cd site-etec
```

3. Instalar as dependências do PHP:

```bash
composer install
```

4. Copiar o arquivo de ambiente:

```bash
copy .env.example .env
```

5. Gerar a chave do Laravel:

```bash
php artisan key:generate
```

6. Configurar o banco de dados no arquivo `.env`:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=site_etec
DB_USERNAME=root
DB_PASSWORD=
```

7. Rodar as migrations:

```bash
php artisan migrate
```

8. Iniciar o servidor:

```bash
php artisan serve
```

9. Acessar no navegador:

```text
http://127.0.0.1:8000
```

## CSRF Protection

O formulário do projeto utiliza a diretiva `@csrf`, recurso do Laravel que gera um token de segurança para proteger o envio de dados contra requisições falsas.

Exemplo utilizado no formulário:

```php
<form method="POST" action="{{ route('formulario.enviar') }}">
    @csrf
</form>
```

## Observação

Este projeto foi criado para fins educacionais, com o objetivo de demonstrar o uso de rotas, controllers, migrations, views, formulário com CSRF e integração com banco de dados em Laravel.
