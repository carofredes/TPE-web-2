<?php

class homeView extends view {
	function mostrarHome($admin) {
		$this->smarty->assign('admin', $admin);
		$this->smarty->display('templates/index.tpl');
	}
}

?>