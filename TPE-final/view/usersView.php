<?php
class usersView extends View {
    public function mostrarLogin($error = '') {
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/login.tpl');
    }

    public function mostrarUsuarios($users) {
        $this->smarty->assign('users', $users);
        $this->smarty->display('templates/userPanel.tpl');
    }
}

?>
