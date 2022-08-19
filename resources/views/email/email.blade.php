<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Mensagem enviada pelo formulário de contato</title>
    </head>

    <body>
        <div class="card">
            <div class="card-header">
                Nova mensagem do formulário de contato
            </div>
            <div class="card-body">
                <h3 class="card-title">Mensagem de Contato do Site</h3>
                <p class="card-text"><b>Nome:</b> {{ $nome }}</p>
                <p class="card-text"><b>Telefone:</b> {{ $telefone }}</p>
                <p class="card-text"><b>Email:</b> {{ $email }}.</p>
                <p class="card-text"><b>Assunto:</b> {{ $assunto }}.</p>
                <p class="card-text"><b>Mensagem:</b> {{ $mensagem }}.</p>

            </div>
        </div>
    </body>
</html>