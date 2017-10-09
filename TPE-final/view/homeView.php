<?php

class homeView extends view {
	function mostrarHome() {
	    $this->smarty->display('templates/index.tpl');
	}
}

?>