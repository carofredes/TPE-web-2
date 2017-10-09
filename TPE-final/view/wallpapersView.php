<?php

class wallpapersView extends view {
  function mostrarWallpapers($wallpapers){
    $this->smarty->assign('wallpapers', $wallpapers);
    $this->smarty->display('templates/wallpapers.tpl');
  }
}

?>
