<?php

class imageDetailsView extends view {
  function mostrarDetalleImg($id){
    $this->smarty->assign('id', $id);
    $this->smarty->display('templates/imageDetails.tpl');
  }
}

?>
