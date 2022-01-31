<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
        <!--Fonte do Google-->
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
        <!-- CSS Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- CSS Aplicação -->
        <link rel="stylesheet" href="/css/style.css">
        <script src="/js/script.js"></script>
    </head>
    <body>
        {{--Essa tag yield garante que todo o nosso conteudo dinamicamente--}}
        <header>
        <div class="col-md-12">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="collapse navbar-collapse" id="navbar">
            @auth
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="/alerts/show" class="nav-link">Alertas</a>
                    </li>
                <!--Colocar um if para verifiar qual o type do user e habilitar os botões-->
                    
                    <li class="nav-item">
                        <a href="/alerts/create" class="nav-link">Cadastrar</a>
                    </li>
                    
                    <li class="nav-item">
                        <a href="/dashboard" class="nav-link">Meus Alertas</a>
                    </li>
                    <li class="nav-item">
                        <form action="/logout" method="POST">
                            @csrf
                            <a href='/logout' 
                            class="nav-link" onclick="event.preventDefault();
                            this.closest('form').submit();">
                            Sair</a>
                        </form>
                    </li>
                    @endauth
                </ul>
            </div>
        </nav>
        </header>
        <main>
            <div class="container-fluid">
                <div class="row">
                    @if(session('msg'))
                    <p class="msg">{{session('msg')}}</p>
                    @endif
                    @yield('content')
                </div>
            </div>
        </main>
        </div>
    </body>
</html>
