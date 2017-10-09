<?php

class themesView extends view {
  function mostrarThemes($themes){
    $this->smarty->assign('themes', $themes);
    $this->smarty->display('templates/themes.tpl');
  }
}

?>
