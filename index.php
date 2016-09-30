<?php
 require('libs/Smarty.class.php'); //incluimos y evaluamos el archivo smarty
 $smarty = new Smarty; //creamos una instancia Smarty
 $page_var = 'page';
 $page_request = $_REQUEST[$page_var];
 $menu = array('home' => 'home.tpl','somos'=>'somos.tpl' );
 if (array_key_exists($page_request,$menu))
  $template = $menu[$page_request];
 else {
   $template = 'home.tpl';
 }
 $smarty->compile_id = $template;
 $smarty->caching = 0;
 $smarty->assign('menu',$menu);
 $smarty->assign('template',$template);
 $smarty->assign('page_var',$page_var);
 $smarty->assign("titulo","Maldiito Rock"); //damos valor a las variables a usar en el tpl
 $smarty->display('home.tpl');
?>
