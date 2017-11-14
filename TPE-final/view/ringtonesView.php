<?php

class ringtonesView extends view {
    public function mostrarRingtones($ringtones) {
        $this->smarty->assign('ringtones', $ringtones);
        $this->smarty->display('templates/ringtones.tpl');
    }
}

?>
