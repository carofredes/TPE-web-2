<?php

class themesView extends view {
  function mostrarThemes($themes,$categories){
    $this->smarty->assign('themes', $themes);
    $this->smarty->assign('categories', $categories);
    $this->smarty->display('templates/themes.tpl');
  }

   function mostrarDetalleImg($images,$categorie){
   	$this->smarty->assign('images', $images);
   	$this->smarty->assign('categorie', $categorie);
  	$this->smarty->display('templates/themes2.tpl');
  }
}


?>
