<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/materialize.min.css">
    @extends('layouts.main')
    <title>Kilari-WoW - Registro</title>

</head>
<body>
    @section('content')
    <script src="/materialize.min.js"></script>
    <br><br>
    <div class="row">
        <div class="col s12 m12 l12 xl12">
            <div class="col m2 l2 xl2"></div>
            <div class="col m8 l8 xl8">
                <h3>Registrate</h3>
                <form action="resultregister" method="POST">
                    @csrf
                    <div class="row">
                        <div class="input-field col s12 m12 l12 xl12">
                            <input name="username" id="username" type="text" class="validate">
                            <label for="username">Nombre de usuario</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12 m6 l6 xl6">
                            <input name="password" id="password" type="password" class="validate">
                            <label for="password">Contraseña</label>
                        </div>
                        <div class="input-field col s12 m6 l6 xl6">
                            <input name="vpassword" id="vpassword" type="password" class="validate">
                            <label for="vpassword">Verificar contraseña</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12 m12 l12 xl12">
                            <input name="email" id="email" type="email" class="validate">
                            <label for="email">Correo electronico</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12 m2 l2 xl2"></div>
                        <div class="col s12 m3 l3 xl3">
                            <input type="submit" value="Registrar">
                        </div>
                        <div class="col s12 m2 l2 xl2"><br></div>
                        <div class="col s12 m3 l3 xl3">
                            <input type="button" value="Cancelar">
                        </div>
                        <div class="col s12 m2 l2 xl2"></div>
                    </div>
                </form>
                <div class="row"> --- o --- </div>
                <div class="row"> Ya tienes cuenta? Ingresa <a href="/kilariwow/login">aqui</a> </div>
            </div>
            <div class="col m2 l2 xl2"></div>
        </div>
    </div>

    </div>
    @endsection
</body>
