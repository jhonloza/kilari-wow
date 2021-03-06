<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/materialize.min.css">
    <link rel="stylesheet" href="/src/css/kilari.css">
    <title>Kilari-WoW - @yield('title')</title>
</head>
<body>
    <!--Header-->
    @section('sidebar')
    <script src="/src/js/vars.js"></script>
    <script src="/materialize.min.js"></script>
    <div class="header">
        <!--<nav class="transparent">-->
        <nav class="barra transparent">
            <div class="nav-wrapper">
                <a href="/" class="brand-logo center">
                    <img id="logowow" src="/src/img/logo.png" alt="">
                </a>
                <ul class="left hide-on-med-and-down">
                    <li><a href="#notice">
                            <h4>Noticias</h4>
                        </a></li>
                    <li><a href="/index.php/about">
                            <h4>Sobre Nosotros</h4>
                        </a></li>
                </ul>
                <ul class="right hide-on-med-and-down">
                    <li><a href="/index.php/howtoconnect">
                            <h4>Como Conectar</h4>
                        </a></li>
                    <li><a href="/index.php/login">
                            <h4>Cuenta</h4>
                        </a></li>
                </ul>
                <a href="#" data-target="menumain" class="sidenav-trigger right">
                    <i id="menubar" class="material-icons">menu</i>
                </a>
            </div>
        </nav>
    </div>
    <ul id="menumain" class="sidenav">
        <li><a href="#notice">
                <h4>Noticias</h4>
            </a></li>
        <li>
            <div class="divider"></div>
        </li>
        <li><a href="/index.php/about">
                <h4>Sobre Nosotros</h4>
            </a></li>
        <li>
            <div class="divider"></div>
        </li>
        <li><a href="/index.php/howtoconnect">
                <h4>Como Conectar</h4>
            </a></li>
        <li>
            <div class="divider"></div>
        </li>
        <li><a href="/index.php/login">
                <h4>Cuenta</h4>
            </a></li>
    </ul>
    @show
    <!--Content-->
    <div class="center">
        @yield('content')
    </div>
    <!--Footer-->
    @section('footer')
    <footer class="page-footer black">
        <div class="footer-copyright">
            <div class="container">
                ?? 2021 Kilari-WoW Project Copyright
                <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
        </div>
    </footer>
    @show
</body>
</html>
