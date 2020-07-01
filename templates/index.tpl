 {include file="headerlogin.tpl"}

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top pt-0 pb-0">
        <div class="container">
            <!-- <a class="navbar-brand" href="index.html">CUTE 24/7</a> -->
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
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navlistCategories" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          CATEGORIAS
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navlistCategories">
                            {foreach from=$categories item=$category}
                            <a class="dropdown-item" href="{$category['name']}"> {$category['name']} </a> {/foreach}
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 p-0">
                    <div class="jumbotron jumbotron-fluid d-flex flex-column justify-content-center align-items-center mt-4">
                        <div class="container">
                            <h1 class="display-4">CUTE</h1>
                            <p class="lead"><span id="name2">24/7</span></p>
                            <p class="lead">Estudio especializado en extensiones de pesta&ntildeas y make up.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <article>
        <section>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 p-0">
                        <div class="container-image">
                            <img src="image/cute1.jpg" alt="local">
                        </div>
                    </div>
                    <div class="col-md-6 p-0">
                        <div class="container-data">
                            <p>Bienvenida a Cute 24/7 somos un estudio especializado en extensiones de pesta&ntildeas y make up, pensando para que puedas recibir un servicio de excelencia a trav&eacutez de los mejores profesionales, capacitados en nuestros
                                estudios para estar siempre a la vanguardia. Con productos de primera calidad y bajo la supervici&oacuten y dedicaci&oacuten de nuestros profesionales, nuestra meta fundamental es que nuestras clientas puedan percibir que
                                su tratamiento y atenci&oacuten es personalizada, y que, desde Bel&eacuten, Claudia y todos sus colaboradores, se trabaja para que siempre te sientas la PROTAGONISTA.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="testimonial">
            <div class="container-fluid">
                <p class="h3 mb-2">"Dicen que la felicidad no se puede comprar, pero todos mis clientes salen con una sonrisa del salon, recuerda que la vida es demasiada corta como para no llevar las pesta&ntildeas perfectas..."</p>
                <p class="h4"> - Belen Garrido - </p>
            </div>
        </section>
        <section>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 p-0">
                        <div class="container-data">
                            <p>En esta oportunidad les presentamos y apoyamos en este nuevo emprendimiento a un estudio amigo, que abre las puertas de su estudio en el &aacuterea de tatuajes, lo novedoso de Only Girls es que es un estudio, de solo y solo
                                para mujeres. Para todas aquellas clientas que siempre tuvieron las ganas de tener un tatuaje, y que no lo hacen por temor y nerviosismo.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 p-0">
                        <div class="container-image">
                            <img src="image/publicidad2.png" alt="publicidad">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="testimonial">
            <div class="container-fluid">
                <p class="h3 mb-2">"Lo que realmente el maquillaje necesita para quedar perfecta, son las manos de un profesional y la felicidad de la persona"</p>
                <p class="h4"> - Claudia - </p>
            </div>
        </section>
        <section>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 p-0">
                        <div class="container-image">
                            <img src="image/publicidad3.png" alt="sorteo">
                        </div>
                    </div>
                    <div class="col-md-6 p-0">
                        <div class="container-data">
                            <a id="btn-participar" class="participar">
                                    PARTICIPAR
                                </a>
                            <div id="box">
                                <ion-icon id="medalla" name="ribbon-outline"></ion-icon>
                                <h1>Ganaste <span id="desc-ganado"></span>% off en <span id="servi-ganado"></span></h1>
                                <ion-icon id="btn-close" name="close-circle">sdfsdfg</ion-icon>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </article>

    {include file="footer.tpl"}