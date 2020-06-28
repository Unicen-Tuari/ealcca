
<?php

require_once('pdo/database.php');

   
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <base href="http://localhost/ealcca/admin">
    <title>Admin Cute 24/7</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Favicons -->
    <link rel="icon" href="../image/favi-icon.png">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
    
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">Cute 24/7</a>
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
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary">Cerrar Sesion</button>
                </div>
            </div>
        </div>
    </div>

    <!--MODAL agregar course-->
    <div class="modal face" id="Modaladdcourse" tabindex="-1" role="dialog" aria-labelledby="ModaladdcourseTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModaladdcourseTitle">NEW COURSE</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="insertCategory" method="get">
                        <div class="form-group">
                            <label for="course">Category</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name category">
                        </div>                
                        <div class="modal-footer">
                            <div class="form-group">                                
                                <button type="submit" class="btn btn-primary">Add</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button> 
                            </div>                                    
                        </div>
                    </form>
                </div>               
            </div>
        </div>
    </div>
 
    <div class="container-fluid">
        <div class="row">

            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="sidebar-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">
                                <span data-feather="file"></span> Course
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="tag"></span> Category
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
                                
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">CATEGORIES</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group mr-2">
                            <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#Modaladdcourse">New course</button>
                        </div>
                    </div>                
                </div>

                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>#</th>
                                <th>Category</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $categories = getCategory();
                                foreach ($categories as $category)
                                {
                            ?>
                            <tr>
                                <td><? echo $category['id_category'] ?></td>
                                <td><? echo $category['name'] ?></td>
                                <td>
                                    <a href="#"><span data-feather="edit"></span></a>
                                    <a href="deleteCategory/<? echo $category['id_category'] ?>"><span data-feather="trash"></span></a>
                                </td>
                            </tr>                                
                            <?php
                                }
                            ?>                             
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/dashboard.js"></script>
</body>

</html>

<?php
function insertCategory(){
    addCategory($_GET["name"]);
    // header("location: admin");
}

function deleteCategory($params){
    removeCategory($params[0]);
    // header("location: ../admin");
}



?>

