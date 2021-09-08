<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    @extends('layouts.main')
    <title>Kilari-WoW - Login</title>
</head>
<body>
    @section('content')
    <script src="/materialize.min.js"></script>
    <div class="row formulariologin">
        <div class="col s12 m12 l12 xl12">
            <div class="col m3 l3 xl3"></div>
            <div class="col m6 l6 xl6">
                <h3>Ingresa a tu cuenta</h3>
                <form action="login" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col m2 l2 xl2">&nbsp</div>
                        <div class="col m1 l1 xl1">
                            <br>
                            <i class="material-icons" style="font-size: 40px">person</i>
                        </div>
                        <div class="input-field col m7 l7 xl7">
                            <input name="username" id="username" type="text" class="validate">
                            <label for="username">Usuario</label>
                        </div>
                        <div class="col m2 l2 xl2">&nbsp</div>
                    </div>
                    <div class="row">
                        <div class="col m2 l2 xl2">&nbsp</div>
                        <div class="col m1 l1 xl1">
                            <br>
                            <i class="material-icons" style="font-size: 40px">lock</i>
                        </div>
                        <div class="input-field col m7 l7 xl7">
                            <input name="password" id="password" type="password" class="validate">
                            <label for="password">Contraseña</label>
                        </div>
                        <div class="col m2 l2 xl2">&nbsp</div>
                    </div>
                    <div class="row">
                        <div class="col s3 m4 l4 xl4"></div>
                        <div class="col s6 m4 l4 xl4">
                            <input type="submit" value="Ingresar">
                        </div>
                        <div class="col s3 m4 l4 xl4"></div>
                    </div>
                    <div class="row">--- o ---</div>
                    <div class="row">No tienes cuenta? registrate <a href="/register">aqui</a></div>

                </form>
            </div>
            <div class="col m3 l3 xl3"></div>
        </div>
    </div>
    <br>&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;
    @endsection
</body>
</html>
