<?php

require_once('pdo/database.php');
require_once('libs/Smarty.class.php');

function contacto(){
    $smarty = new Smarty();
    $smarty->display('templates/contacto.tpl');      
}
?>