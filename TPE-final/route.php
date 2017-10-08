<?php
    define('ACTION', 0);
    define('VALOR1', 1);

    include_once 'config/configApp.php';
    include_once 'index.php';
    include_once 'ringtones.php';
    include_once 'themes.php';
    include_once 'wallpapers.php';

    function parseURL($url) {
        $urlExploded = explode('/', $url);
        $arrayReturn[configApp::$ACTION] = $urlExploded[ACTION];
        $arrayReturn[configApp::$PARAMS] = isset($urlExploded[VALOR1]) ? array_slice($urlExploded,1) : null;
        return $arrayReturn;
    }

    if(isset($_GET['action'])){
        $urlData = parseURL($_GET['action']);
        $action = $urlData[configApp::$ACTION];
        if(array_key_exists($action, configApp::$ACTIONS)){
            $params = $urlData[configApp::$PARAMS];
            $metodo = configApp::$ACTIONS[$action];
            if(isset($params) &&  $params != null){
                echo $metodo($params);
            }
            else{
                echo $metodo();
            }
        }
    }
?>