<?php

class wallpapersView extends view {
	function mostrarWallpapers($wallpapers,$categories){
		$this->smarty->assign('wallpapers', $wallpapers);
		$this->smarty->assign('categories', $categories);
		$this->smarty->display('templates/wallpapers.tpl');
	}

	function mostrarWallpapersPorCategoria($images,$categorie){
		$this->smarty->assign('images', $images);
		$this->smarty->assign('categorie', $categorie);
		$this->smarty->display('templates/resultCategories.tpl');
	}

	function mostrarDetalleImg($image,$relatedImgs){
		$this->smarty->assign('image', $image);
		$this->smarty->assign('relatedImgs', $relatedImgs);
		$this->smarty->display('templates/imageDetails.tpl');
	}

	function errorCrear($error,$image,$relatedImgs){
	    $this->smarty->assign('error', $error);
	    $this->smarty->display('templates/imageDetails.tpl');
	}
}

?>
