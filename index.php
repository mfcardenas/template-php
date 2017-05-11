<?php
    require_once('config/global.php');
    require_once('config/dbconnect.php');
    require_once('controllers/functions.php');
    require_once('controllers/baseController.php');

//    if (isset($_GET['controller']) && isset($_GET['action'])) {
//        $controller = $_GET['controller'];
//        $action = $_GET['action'];
//    } else {
//        $controller = 'view';
//        $action = 'home';
//    }

    if(isset($_GET["controller"])){
        $controllerObj = loadController($_GET["controller"]);
        execAction($controllerObj);
    }else{
        $controllerObj=loadController(CONTROLADOR_DEFECTO);
        execAction($controllerObj);
    }
    //require_once('views/layout.php');
?>