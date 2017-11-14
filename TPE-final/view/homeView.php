<?php

class homeView extends view {
    public function mostrarHome() {
        $this->smarty->display('templates/index.tpl');
    }

    public function mostrarHomeContent() {
        $this->smarty->display('templates/home.tpl');
    }
}

?>