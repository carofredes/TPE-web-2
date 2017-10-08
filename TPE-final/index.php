<?php 

include_once 'libs/Smarty.class.php';

function home()
{
  $titulo = 'NotOnlyCats_v.3';
  $smarty = new Smarty();
  $smarty->assign('titulo', $titulo);
  $smarty->display('templates/index.tpl');
}
	
?>

