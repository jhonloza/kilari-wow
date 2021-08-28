<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/materialize.min.css">
    <title>Kilari-wow Register
    </title>
</head>
<body>
    <script src="/materialize.min.js"></script>
    <div class="row">
        <div class="col s4"></div>
        <div class="col s4 center">
            <h1>Registrate</h1>
            <br>
            <form action="resultregister" method="POST">
                @csrf
                <div class="col">
                    <div class="row">
                        <div class="input-field col s12">
                            <input name="username" id="username" type="text" class="validate">
                            <label for="username">Nombre de usuario</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <input name="password" id="password" type="password" class="validate">
                            <label for="password">Contraseña</label>
                        </div>
                        <div class="input-field col s6">
                            <input name="vpassword" id="vpassword" type="password" class="validate">
                            <label for="vpassword">Verificar contraseña</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input name="email" id="email" type="email" class="validate">
                            <label for="email">Correo electronico</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s2"></div>
                        <div class="col s3">
                            <input type="submit" value="Registrar">
                        </div>
                        <div class="col s2"></div>
                        <div class="col s3">
                            <input type="button" value="Cancelar">
                        </div>
                        <div class="col s2"></div>
                    </div>
                </div>

            </form>
        </div>
        <div class="col s4"></div>
    </div>

</body>
</html>
