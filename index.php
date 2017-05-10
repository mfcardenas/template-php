<?php
    require_once('config/db_connect.php');

    if (isset($_GET['controller']) && isset($_GET['action'])) {
        $controller = $_GET['controller'];
        $action = $_GET['action'];
    } else {
        $controller = 'view';
        $action = 'home';
    }

    require_once('views/layout.php');
?>