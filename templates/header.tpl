<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="http://localhost/ealcca/">
    <title>CUTE</title>
    <link rel="icon" href="image/favi-icon.png">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Open+Sans:300i|Poiret+One|Raleway|Source+Sans+Pro:200&display=swap" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="logo">
                        <h1 id="name"><a href="home">Cute</a></h1>
                        <p id="name2">24/7</p>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top pt-0 pb-0" id="nav">
        <div class="container">
            <!-- <a class="navbar-brand" href="#">CUTE 24/7</a> -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="staff">STAFF</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="extensiones">EXTENSIONES DE PESTA&NtildeAS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="makeup">MAKE UP</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navlistCategories" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          CURSOS
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navlistCategories">
                            <a class="dropdown-item" href="allCourses">Todos</a> {foreach from=$categories item=$category}
                            <a class="dropdown-item" href="cursos/{$category['id_category']}"> {$category['name']} </a> {/foreach}
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contacto">CONTACTO</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>