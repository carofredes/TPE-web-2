<?php

class wallpapersView extends view {
  function mostrarWallpapers($wallpapers,$categories){
    $this->smarty->assign('wallpapers', $wallpapers);
    $this->smarty->assign('categories', $categories);
    $this->smarty->display('templates/wallpapers.tpl');
  }
}

?>
