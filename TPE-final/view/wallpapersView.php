<?php

class wallpapersView extends view {
    public function mostrarWallpapers($wallpapers, $categories) {
        $this->smarty->assign('wallpapers', $wallpapers);
        $this->smarty->assign('categories', $categories);
        $this->smarty->display('templates/wallpapers.tpl');
    }

    public function mostrarWallpapersPorCategoria($images, $categorie) {
        $this->smarty->assign('images', $images);
        $this->smarty->assign('categorie', $categorie);
        $this->smarty->display('templates/resultCategories.tpl');
    }

    public function mostrarDetalleImg($image, $relatedImgs) {
        $this->smarty->assign('image', $image);
        $this->smarty->assign('relatedImgs', $relatedImgs);
        $this->smarty->display('templates/imageDetails.tpl');
    }

    public function errorCrear($error, $image, $relatedImgs) {
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/imageDetails.tpl');
    }
}

?>
