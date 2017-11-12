<?php

class homeView extends view {
	function mostrarHome() {
		$this->smarty->display('templates/index.tpl');
	}

	function mostrarHomeContent() {
		$this->smarty->display('templates/home.tpl');
	}
}

?>