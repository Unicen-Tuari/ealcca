<?php
/* Smarty version 3.1.30, created on 2016-09-30 07:52:01
  from "/opt/lampp/htdocs/ealcca/templates/home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57edfd813ed4d2_27104398',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '21f3a411655116c5b58e255ae7b567db053c4b58' => 
    array (
      0 => '/opt/lampp/htdocs/ealcca/templates/home.tpl',
      1 => 1475213353,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_57edfd813ed4d2_27104398 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

      <div> <!-- ############  CONTENEDOR-PRINCIPAL  ############ -->
        <header>
          <div class="row"> <!--Jumbotron y carousel-->
            <div class="col-md-2 col-lg-1">

            </div>
            <div class="col-md-8 col-lg-10">
              <div class="jumbotron">
                <div class="letrero">
                  <h1 >MaldIito RocK!!</h1>
                  <p>...</p>
                </div>
              </div>
            </div>
            <div class="col-md-2 col-lg-1">

            </div>
          </div> <!-- FIN Jumbotron-->
        </header>

        <article>
          <div class="row">
            <div class="col-md-2 col-lg-1">

            </div>
            <div class="col-md-8 col-lg-10">
              <div class="encabezado">
                <h3 class="titulo-encabezado page-header"> Novedades</h3>
              </div>
              <div id="carousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators"> <!--botones-->
                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>

                <div class="carousel-inner">  <!--imagenes slides-->
                  <div class="item active">
                    <center><img class="img-responsive" src="image/oferta1.jpg" class="tales" alt="..."></center>
                    <div class="carousel-caption">
                      (OPCIONAL) Título de la PRIMERA imagen
                    </div>
                  </div>
                  <div class="item">
                    <center><img class="img-responsive" src="image/oferta2.jpg" class="tales" alt="..."></center>
                    <div class="carousel-caption">
                      (OPCIONAL) Título de la SEGUNDA imagen
                    </div>
                  </div>
                  <div class="item">
                    <center><img class="img-responsive" src="image/oferta3.jpg" class="tales" alt="..."></center>
                    <div class="carousel-caption">
                      (OPCIONAL) Título de la TERCERA imagen
                    </div>
                  </div>
                  <div class="item">
                    <img class="img-responsive center-block" src="image/oferta4.jpg" class="tales" alt="...">
                    <div class="carousel-caption">
                      (OPCIONAL) Título de la CUARTO imagen
                    </div>
                  </div>
                </div>

                <a class="left carousel-control" href="#carousel" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
              </div>
            </div>
            <div class="col-md-2 col-lg-1">

            </div>
          </div>
          <div class="row"> <!--CONTENEDOR PRINCIPAL-->
            <div class="col-md-2 col-lg-1">

            </div>
            <div class="col-md-4 col-lg-5">
              <div class="encabezado">
                <h3 class="titulo-encabezado page-header">Solo en MR!</h3>
              </div>
              <div class="recuadro-texto">
                <p class="primera-linea">En <span class="maldito">MALDIiTO ROcK</span> encontraras la mayor seleccion de Merchand de bandas!
                  Te ofrecemos remeras, buzos, camperas, accesorios y mucho m&aacutes, de tus bandas
                  favoritas en los generos de Rock, Heavy, Punk, Clasico, Reggae, ETC.
                </p>
                <p>
                  Y si sos apacionado de los videojuegos de acci&oacute o aventura, no te preocupes,
                  en <span class="maldito">MALDIiTO ROcK</span> te ofrecemos el mejor stock de remeras y accesorios.
                </p>
                <p>
                  Tambien te ofrecemos remeras y articulos muy divertidos, sobre series o comics de
                  todos los tiempos!!
                </p>
              </div>
              <div class="encabezado">
                <h3 class="titulo-encabezado page-header">Recibi nuestras novedades</h3>
              </div>
              <div class="recuadro-texto">
                <form class="form-novedades" action="index.html" method="post">
                  <div class="form-group">
                    <label>Nombre</label>
                    <input type="texto" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Apellido</label>
                    <input type="texto" class="form-control">
                  </div>
                  <div class="form-group">
                    <label col-lg-2 control-label>Direccion de email</label>
                    <input type="email" class="form-control" placeholder="example@mail">
                  </div>
                  <button type="submit" class="btn btn-default">Enviar</button>
                </form>
              </div>

            </div>
            <div class="col-md-4 col-lg-5">
              <div class="encabezado">
                <h3 class="titulo-encabezado page-header">Proximos recitales</h3>
              </div>
              <div class="thumbnail">
                <img class="img-responsive" src="image/recital1.jpg" alt="La Renga">
                <div class="recital">
                  <a href="#"><h3>La Renga</h3></a>
                  <p>Sera en julio, como parte de una mini-gira que integran tambi&eacuten las provincias de
                  Jujuy y La Rioja. Sera otra vez en la plaza A&ntildeoranza.</p>
                </div>
              </div>
              <div class="thumbnail">
                <img class="img-responsive" src="image/recital2.jpg" alt="...">
                <div class="recital">
                  <a href="http://recitalesargentina.com.ar/recitales/las-pastillas-del-abuelo-en-el-luna-park-2016"><h3>Las Pastillas Del Abuelo</h3></a>
                  <p>Su sonido se caracteriza principalmente por la fusi&oacuten de estos estilos
                    musicales como el candombe, la chacarera, el contry y otros...</p>
                </div>
              </div>
              <div class="thumbnail">
                <img class="img-responsive" src="image/recital3.jpg" alt="...">
                <div class="recital">
                  <a href="http://recitalesargentina.com.ar/recitales/megadeth-en-el-luna-park-2016"><h3>MEGADETH</h3></a>
                  <p>Despues de 2 años de espera vuelven a la Argentina con el ingreso del ex angra,
                     kiko Loureiro y el bateriste de Lamb of God, Chris Adler, vuelven a pura inspiraci&oacuten,
                     motivados y felices...</p>
                </div>
              </div>
            </div>
            <div class="col-md-2 col-lg-1">

            </div>
          </div><!---->
        </article>

      </div>
  <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
