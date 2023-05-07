<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->

        @vite([
            'resources/css/app.css', 
            'resources/js/app.js',
            'node_modules/bootstrap/dist/css/bootstrap.min.css',
            'node_modules/bootstrap/dist/js/bootstrap.bundle.js'   
        ])
    </head>
    <body class="container">
        <div class="bg-white">
            <header>
                <nav class="navbar navbar-expand-lg bg-primary">
                    <div class="container-fluid">
                        <a class="navbar-brand text-white" href="/">Sistema WEB</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link active text-white" aria-current="page" href="/">Cadastrar</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/consulta">Consultar</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </header>
            <main>
                <h2 class="text-center">Consultar - Contatos agendados</h2>
                <table class="table bg-primary">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Telefone</th>
                            <th>Origem</th>
                            <th>Contato</th>
                            <th>Observação</th>  
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($agendamentos as $agendamento)
                        <tr>
                            <td>{{$agendamento->Nome}}</td>
                            <td>{{$agendamento->Telefone}}</td>
                            <td>{{$agendamento->Origem}}</td>
                            <td>{{$agendamento->Data_contato}}</td>
                            <td>{{$agendamento->Observacao}}</td>
                        </tr>
                    @endforeach 
                    </tbody>
                </table>
            </main>
        </div>
    </body>
</html>