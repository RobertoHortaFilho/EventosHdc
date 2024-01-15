<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/main.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>
<body>
    <ul id="header">
        <li><h1>HDC</h1></li>
        <li><a href="/">Home</a></li>
        <li><a href="/event/create">Criar Evento</a></li>
        @auth
            <li><a href="/dashboard">Meus eventos</a></li>
            <li><form action="/logout" method="post">
                @csrf
                <a
                    href="/logout"
                    onclick="event.preventDefault(); this.closest('form').submit();"
                >Sair</a>
            </form></li>
        @endauth
        @guest
            <li><a href="/login">Login</a></li>
            <li><a href="/register">Registre-se</a></li>
        @endguest
    </ul>
    @if (session('msg'))
        <div class="event-msg-container">
            <p>{{ session('msg') }}</p>
        </div>
    @endif
    @yield('section')
    <div style='height: 90px'></div>
    <footer> HDC events &copy; 2024</footer>
</body>
</html>