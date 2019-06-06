<?php
class Dispatcher
{
    
    public function dispatch()
    {
	    include_once ROOT ."app/FrontController.php";
        include_once ROOT ."app/core/Controller.php";
        
        $url = $_SERVER["REQUEST_URI"];
        $action = null;
        $controller = null;
        $params = null;
        
        FrontController::parse($url, $controller, $action, $params);
        $controller = $this->loadController($controller, $action, $params);
        
        if (isset($controller) && isset($action) && method_exists($controller, $action) && isset($params)) {
            $controller->$action($params);
        } elseif (isset($controller) && isset($action) && method_exists($controller, $action)) {
            $controller->$action();
        } else {
            $controller = new Controller();
            $controller->_404();
        }
    }

    public function loadController(&$controller, &$action, &$params)
    {
        $file = null;
        
        if (isset($controller)) {
            $name = $controller . "Controller";
            $file = ROOT . 'app/controllers/' . $name . '.php'; 

            if (!file_exists($file)) {
                require_once (ROOT . 'app/core/Controller.php');
                $controller = new Controller();
                $action = '_404';
                $params = [];
                return $controller;
            }
            
            require_once $file;
            $controller = new $name();
            return $controller;
        } else {
            require_once (ROOT . 'app/core/Controller.php');
            $controller = new Controller();
            $action = '_404';
            $params = [];
            return $controller;
        }
        
    }
}
