<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!--Fonte do Google -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
        <!-- CSS bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <!--CSS da aplicação --> 
        <link rel="stylesheet" href="/css/styles.css">
        <script src="/js/script.js"></script>

    </head>
    <body>

        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse" id="navbar">
                    <a href="/" class="navbar-brand">
                        <img src="/img/asterisk-round-svgrepo-com.svg" alt="logo">
                    </a>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="/" class="nav-link">Eventos</a>
                        </li>

                        <li class="nav-item">
                            <a href="/eventos/criar" class="nav-link">Criar eventos</a>
                        </li>

                        <li class="nav-item">
                            <a href="/" class="nav-link">Entrar</a>
                        </li>

                        <li class="nav-item">
                            <a href="/" class="nav-link">Cadastrar</a>
                        </li>



                    </ul>
                </div>
            </nav>
        </header>

        @yield('content')

    <footer>
        <p>LRM Eventos &copy; 2025</p>
    </footer>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>
</html>
