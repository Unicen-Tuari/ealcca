<?php
 require('libs/Smarty.class.php'); //incluimos y evaluamos el archivo smarty
 $smarty = new Smarty; //creamos una instancia Smarty
 $smarty->assign("titulo","Maldiito Rock"); //damos valor a las variables a usar en el tpl
 $smarty->display('home.tpl');
?>
