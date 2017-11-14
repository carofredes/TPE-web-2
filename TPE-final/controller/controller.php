<?php
define('HOME', 'http://' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');
define('LOGIN', 'http://' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/login');
define('LOGOUT', 'http://' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/logout');

class Controller {
    protected $view;
    protected $model;
    protected $admin;
    protected $userLoggedin;

    public function __construct() {
        session_start();
        $this->admin        = false;
        $this->userLoggedin = '';

        if (isset($_SESSION['USER'])) {
            if ($_SESSION['PERMISSIONS'] == 1) {
                $this->admin = true;
            }

            $this->userLoggedin = $_SESSION['USER'];
        }
    }
}

?>
