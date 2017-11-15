<?php
include_once 'model/usersModel.php';
include_once 'view/usersView.php';

class UsersController extends Controller {

    public function __construct() {
        parent::__construct();
        $this->view  = new usersView($this->admin, $this->userLoggedin);
        $this->model = new usersModel();
    }

    public function index() {
        $this->view->mostrarLogin();
    }

    public function verify() {
        $userName = $_POST['nickName'];
        $password = $_POST['password'];

        if (!empty($userName) && !empty($password)) {
            $user = $this->model->getUser($userName);
            password_verify($password, $user[0]['password']);

            if ((!empty($user)) && password_verify($password, $user[0]['password'])) {
                $this->startSession($user);
            } else {
                $this->view->mostrarLogin('Usuario o Password incorrectos');
            }
        } else {
            header('Location: ' . LOGIN);
        }
    }

    public function add() {
        $userName = $_POST['nickName'];
        $password = $_POST['password'];

        $hashpassword = password_hash($password, PASSWORD_DEFAULT);
        if (!empty($userName) && !empty($hashpassword)) {
            $user       = $this->model->createUser($userName, $hashpassword);
            $userLogged = $this->model->getUser($userName);
            $this->startSession($userLogged);
        } else {
            $this->view->mostrarLogin('Completa todos los datos');
        }
    }

    private function startSession($user) {
        session_start();
        $_SESSION['USER']          = $user[0]['nickName'];
        $_SESSION['PERMISSIONS']   = $user[0]['permissions'];
        $_SESSION['LAST_ACTIVITY'] = time();
        header('Location: ' . HOME);
    }

    public function destroy() {
        session_start();
        session_destroy();
        header('Location: ' . HOME);
    }

    public function showUsersPanel() {
        $users = $this->model->getUsersList();
        $this->view->mostrarUsuarios($users);
    }

    public function delete($params) {
        if ($this->admin) {
            if (isset($params[0]) && !empty($params[0])) {
                $id_user = $params[0];
                $this->model->borrarUser($id_user);
            }
            header('Location: ' . HOME);
        } else {
            header('Location: ' . LOGIN);
        }
    }

    public function changePermission($params) {
        if ($this->admin) {
            if (isset($params[0]) && !empty($params[0])) {
                $id_user = $params[0];
                $user = $this->model->getUserById($id_user);
                if ($user[0]['permissions'] == 0) {
                    $this->model->cambiarPermisoAdmin($id_user,1);
                }
                else {
                    $this->model->cambiarPermisoAdmin($id_user,0);
                }                
            }
            header('Location: ' . HOME);
        } else {
            header('Location: ' . LOGIN);
        }
    }
}
