<?php

function ringtones() {

  $titulo = 'NotOnlyCats_v.3';
  $smarty = new Smarty();
  $smarty->assign('titulo', $titulo);
  $smarty->display('templates/ringtones.tpl');
}
?>