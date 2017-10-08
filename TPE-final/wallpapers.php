<?php

function wallpapers() {

$titulo = 'NotOnlyCats_v.3';
  $smarty = new Smarty();
  $smarty->assign('titulo', $titulo);
  $smarty->display('templates/wallpapers.tpl');

}

?>
