<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>Ответы на вопросы</title>
</head>
<body>
<div class="app p-5">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" aria-current="page" href="{{ route('main.index') }}">На сайт</a>
                    <a class="nav-link" href="{{ route('questions.index') }}">Все вопросы</a>
                    <a class="nav-link" href="{{ route('questions.create') }}">Создать вопрос</a>
                </div>
            </div>
        </div>
    </nav>
    @yield('content')
</div>
</body>
</html>
