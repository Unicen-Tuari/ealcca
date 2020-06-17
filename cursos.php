<?php
function cursos(){
    return '<!DOCTYPE html>
    <html>
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CUTE</title>
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
                        <li class="nav-item">
                            <a class="nav-link" href="cursos">CURSOS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contacto">CONTACTO</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    
        <article>
            <section>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6 p-0">
                            <div class="container-image">
                                <img src="image/curso1.jpg" alt="cursos">
                            </div>
                        </div>
                        <div class="col-lg-6 p-0">
                            <div class="container-data">
                                <h2>Auto maquillaje</h2>
                                <hr>
                                <p>
                                    Te ofrecemos una clase pensada para las aficionadas y amantes del maquillaje que quieran aprender correctamente a realizar sus propios looks e incorporar t&eacutecnicas profesionales sin ser expertas en el tema.
                                </p>
                                <ul>
                                    <li>Nivel inicial y avanzado</li>
                                    <li>D&iacutea y horario a coordinar con alumnas</li>
                                    <li>Duraci&oacuten 24hrs</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6 p-0">
                            <div class="container-data">
                                <h2>Extensi&oacuten de pesta&ntildeas</h2>
                                <hr>
                                <p>
                                    Aplicaci&oacuten paso a paso de las extensiones de pesta&ntildeas, preparaci&oacuten previa, selecci&oacuten adecuada de pesta&ntildeas y correcta combinaci&oacuten.
                                </p>
                                <ul>
                                    <li>Nivel inicial y avanzado</li>
                                    <li>D&iacutea y horario a coordinar con alumnas</li>
                                    <li>Duraci&oacuten 24hrs</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 p-0">
                            <div class="container-image">
                                <img src="image/curso2.jpg" alt="cursos">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </article>
    
        <footer>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box-end">
                            <ion-icon name="logo-facebook"></ion-icon>
                            <ion-icon name="logo-instagram"></ion-icon>
                            <ion-icon name="logo-twitter"></ion-icon>
                            <hr class="line">
                            <p>cute247@gmail.com</p>
                            <p>15-257412 / 15-258523</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    
        <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
    
    </body>
    
    </html>';

}

?>