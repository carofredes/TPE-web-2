<?php

class themesView extends view {
  function mostrarThemes($themes,$categories){
    $this->smarty->assign('themes', $themes);
    $this->smarty->assign('categories', $categories);
    $this->smarty->display('templates/themes.tpl');
  }
}

?>
