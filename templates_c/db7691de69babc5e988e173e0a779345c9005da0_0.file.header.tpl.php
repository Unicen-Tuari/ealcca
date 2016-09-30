<?php
/* Smarty version 3.1.30, created on 2016-09-30 07:38:59
  from "/opt/lampp/htdocs/ealcca/templates/header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57edfa739f6389_51283519',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db7691de69babc5e988e173e0a779345c9005da0' => 
    array (
      0 => '/opt/lampp/htdocs/ealcca/templates/header.tpl',
      1 => 1475213938,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57edfa739f6389_51283519 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Maldito Rock! </title>
    <meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1">
    <meta charset="utf-8">
    <link href="css/miestilo.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat:700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">        <!-- ############  NAVBAR  ############ -->
        <div class="col-xs-12 col-md-10 col-md-offset-1">
          <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation"><!--CONSEJO agregar role navegation a los menos para mejorear la accesibilidad de los sitios y  -->
            <div class="container-fluid">
              <div class="navbar-header"> <!--agrupamos el menu para que se visualize en moviles-->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                  Maldiito Rock
                </a>
              </div>
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"><!--Agrupa los enlaces-->
                <ul class="nav navbar-nav navbar-right">
                  <li id="inicio" class="active"><a href="#">HOME<span class="sr-only">(current)</span></a></li>
                  <li id="somos"><a href="template/somos.tpl">Quienes somos</a></li>
                  <li class="dropdown">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                            aria-expanded="false">Catalogos<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li id="nacional"><a href="#">Rock Nacional</a></li>
                      <li id="inter"><a href="#">Rock Internacional</a></li>
                      <li id="reggae"><a href="#">Reggae</a></li>
                      <li id="comics"><a href="#">Comics</a></li>
                      <li id="calaveras"><a href="#">Calaveras</a></li>
                      <li id="camisas"><a href="#">Camisas</a></li>
                      <li id="accesorios"><a href="#">Accesorios</a></li>
                      <li id="busos"><a href="#">Busos</a></li>
                      <li id="mma"><a href="#">MMA</a></li>
                      <li id="instrumentos"><a href="#">Instrumentos</a></li>
                    </ul>
                  </li>
                  <li id="noticias"><a href="#">Noticias</a></li>
                  <li id="contacto"><a href="#">Contacto</a></li>
                </ul>
              </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
          </nav>
        </div>
      </div> <!--FIN NAVBAR-->
<?php }
}
