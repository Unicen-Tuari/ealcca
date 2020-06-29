<?php

require_once('pdo/database.php');
require_once('libs/Smarty.class.php');

function cursos(){
    $smarty = new Smarty();
    $smarty->display('templates/cursos.tpl');
}
?>