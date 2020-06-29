<?php

require_once('pdo/database.php');
require_once('libs/Smarty.class.php');

function home(){
    $smarty = new Smarty();
    $smarty -> display('templates/index.tpl');
}


?>