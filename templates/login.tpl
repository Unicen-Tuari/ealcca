<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login CUTE 24/7</title>

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body id="pageLogin">
    <div class="container model-dialog text-center">
        <div class="row">
            <div class="col mt-4">
                <h1>Hi!</h1>
            </div>
        </div>
        <div class="row">
            <div class="col"></div>
            <div class="col-sm-4" id="recuadro-login">
                <div class="model-content boxLogin">
                    <div class="col-12 imglogin">
                        <img src="image/avatar.png" alt="avatar">
                    </div>
                    <form class="col-12 m-0 form-login" action="goIn" method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="email" name="email" />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="password" name="password" />
                        </div>
                        <button type="submit" class="btn btn-primary mt-2 mb-2">Ingresar</button>
                    </form>
                    <div class="col-12">
                        <a href="checkIn" class="registrarte">Registrarte</a>
                    </div>
                </div>
            </div>
            <div class="col"></div>
        </div>
    </div>
</body>

</html>