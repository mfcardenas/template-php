<?php
    function call($controller, $action) {
        require_once('controllers/' . $controller . 'Controller.php');

        switch ($controller) {
            case 'view':
                $controller = new ViewController();
                break;
            case 'posts':
                // we need the model to query the database later in the controller
                require_once('models/post.php');
                $controller = new PostsController();
                break;
        }

        $controller->{$action}();
    }

    // we're adding an entry for the new controller and its actions
    $controllers = array('view' => ['home', 'error'], 'posts' => ['index', 'show']);

    if (array_key_exists($controller, $controllers)) {
        if (in_array($action, $controllers[$controller])) {
            call($controller, $action);
        } else {
            call('view', 'error');
        }
    } else {
        call('view', 'error');
    }
?>