<?php
require_once 'api.php';

class securedApiController extends Api {
    private $isAdmin;

    public function __construct() {
        parent::__construct();
        session_start();
        $this->isAdmin = false;
        if (isset($_SESSION['USER'])) {
            if ($_SESSION['PERMISSIONS'] == 1) {
                $this->isAdmin = true;
            }
        }
    }

    public function isAdmin() {
        return $this->isAdmin;
    }
}