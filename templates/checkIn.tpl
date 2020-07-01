<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check in CUTE 24/7</title>

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body>
    <div class="container model-dialog text-center">
        <div class="row">
            <div class="col">
                <h1>Bienvenido!</h1>
            </div>
        </div>
        <div class="row">
            <div class="col"></div>
            <div class="col-sm-4 " id="recuadro-login">
                <div class="model-content">
                    <div class="col-12">
                        <img src="image/avatar.png" alt="avatar">
                    </div>
                    <form class="col-12" action="register" method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="email" name="email" />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="password" name="password" />
                        </div>
                        <fieldset class="form-group">
                            <div class="row">
                                <legend class="col-form-label col-sm-2 pt-0">Tipo</legend>
                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="is_admin" id="administrador" value="1">
                                        <label class="form-check-label" for="checked">Administrador</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="is_admin" id="invitado" value="0" checked>
                                        <label class="form-check-label" for="invitado">Invitado</label>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <button type="submit" class="btn btn-primary"> Registrarse</button>
                    </form>
                </div>
            </div>
            <div class="col"></div>
        </div>
    </div>
</body>

</html>