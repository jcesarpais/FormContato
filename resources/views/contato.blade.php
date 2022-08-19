<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>Contact Form</title>
    </head>

    <body>
        <div class="container mt-3">
            <div class="row">
                <div class="col-md-12">

                    <form action="{{ route('enviar.email') }}" method="POST" id="FormContato">
                        @csrf
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Nome</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control-plaintext $errors->has('nome')? 'error' : ''" name="nome" placeholder="nome" id="nome">
                                @if ($errors->has('nome'))
                                    <div class="error">
                                        $errors->first('nome')
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Telefone</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control-plaintext $errors->has('telefone')? 'error' : ''" name="telefone" placeholder="telefone" id="telefone">
                                @if ($errors->has('telefone'))
                                    <div class="error">
                                        $errors->first('telefone')
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control-plaintext $errors->has('email')? 'error' : ''" name="email" placeholder="email" id="email">
                                @if ($errors->has('email'))
                                    <div class="error">
                                        $errors->first('email')
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Assunto</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control-plaintext $errors->has('assunto')? 'error' : ''" name="assunto" placeholder="assunto" id="assunto">
                                @if ($errors->has('assunto'))
                                    <div class="error">
                                        $errors->first('assunto')
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Mensagem</label>
                        <div class="col-sm-10">
                            <textarea class="$errors->has('assunto')? 'error' : ''" name="mensagem" cols="50" placeholder="mensagem" id="mensagem"></textarea>
                            @if ($errors->has('mensagem'))
                                <div class="error">
                                    $errors->first('mensagem')
                                </div>
                            @endif
                        </div>
                            <input class="btn btn-info col-md-10 " type="submit" name="Enviar">
                        </div>
                    </form>
                </div>
            </div>
        </div>


    </body>

</html>