<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <!-- <base href="http://localhost/ealcca/admin"> -->
    <base href=".$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).">
    <title>Admin Cute 24/7</title>

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link rel="icon" href="image/favi-icon.png">
    <link href="css/dashboard.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/styleadmin.css">

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="home">Cute 24/7</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="navbar-nav px-3 ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#profile" role="button" aria-expanded="false" aria-controls="profile">
                    Bienvenido administrador
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">
                        <span> Perfil</span>
                    </a>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#ModalCenter">
                        <span>Cerrar Sesion</span>
                    </a>
                </div>
            </li>
        </ul>
    </nav>

    <!--MODAL cerrar sesion-->
    <div class="modal face" id="ModalCenter" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalCenterTitle">Cerrar Sesion</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Deseas cerrar tu sesion?
                    <form action="logOut" method="get">
                        <div class="modal-footer">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Cerrar Sesion</button>
                                <button type="submit" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>