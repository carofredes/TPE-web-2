<?php
include_once 'libs/Smarty.class.php';

class view {
    protected $smarty;
    protected $admin;
    protected $userLogged;

    public function __construct($admin, $userLogged) {
        $this->smarty = new Smarty();
        $this->smarty->assign('tituloSitio', 'Not only cats');
        $this->smarty->assign('admin', $admin);
        $this->smarty->assign('userLogged', $userLogged);
    }
}
?>
