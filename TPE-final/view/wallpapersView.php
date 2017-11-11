<?php

class wallpapersView extends view {
	function mostrarWallpapers($wallpapers,$categories){
		$this->smarty->assign('wallpapers', $wallpapers);
		$this->smarty->assign('categories', $categories);
		$this->smarty->display('templates/wallpapers.tpl');
	}

	function mostrarDetalleImg($images,$categorie){
		$this->smarty->assign('images', $images);
		$this->smarty->assign('categorie', $categorie);
		$this->smarty->display('templates/resultCategories.tpl');
	}
}

?>
