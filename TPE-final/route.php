<?php
    define('ACTION', 0);
    define('PARAMS', 1);

    include_once 'config/configApp.php';
    include_once 'model/model.php';
    include_once 'view/view.php';
    include_once 'controller/homeController.php';
    include_once 'controller/wallpapersController.php';
    include_once 'controller/ringtonesController.php';
    include_once 'controller/themesController.php';
    include_once 'controller/imageDetailsController.php';

    function parseURL($url) {
        $urlExploded = explode('/', $url);
        $arrayReturn[configApp::$ACTION] = $urlExploded[ACTION];
        $arrayReturn[configApp::$PARAMS] = isset($urlExploded[PARAMS]) ? array_slice($urlExploded,1) : null;
        return $arrayReturn;
    }

    if(isset($_GET['action'])){
        $urlData = parseURL($_GET['action']);
        $action = $urlData[configApp::$ACTION];
        if(array_key_exists($action, configApp::$ACTIONS)){
            $params = $urlData[configApp::$PARAMS];
            $actionWithController = explode('#', configApp::$ACTIONS[$action]);
            $controller =  new $actionWithController[0]();
            $metodo = $actionWithController[1];
            if(isset($params) &&  $params != null){
                echo $controller->$metodo($params);
            }
            else{
                echo $controller->$metodo();
            }
        }
    }
?>