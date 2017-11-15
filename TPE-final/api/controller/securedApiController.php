<?php
require_once 'api.php';

class securedApiController extends Api {
    private $isAdmin;
    private $isLogged;

    public function __construct() {
        parent::__construct();
        session_start();
        $this->isAdmin = false;
        $this->isLogged = false;
        if (isset($_SESSION['USER'])) {
            $this->isLogged = true;
            if ($_SESSION['PERMISSIONS'] == 1) {
                $this->isAdmin = true;
            }
        }
    }

    public function isAdmin() {
        return $this->isAdmin;
    }
    public function isLogged() {
        return $this->isLogged;
    }
}
?>