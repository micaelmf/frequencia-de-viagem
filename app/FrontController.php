<?php

class FrontController
{

    public static function parse($url, &$controller, &$action, &$params)
    {
        $url = trim($url);
        $url = preg_replace('/\?|\=/', '/', $url);
        $explode_url = explode('/', $url, 6);
        $slice_url = array_slice($explode_url, 2);

        if ($explode_url[1] == "") {
            $controller = "home";
            $action = "index";
            $params = [];
        } elseif ($explode_url[1] == "viagens" && !isset($explode_url[2])) {
            $controller = "viagens";
            $action = "viagens";
        } elseif ($explode_url[1] == "viagens" && isset($explode_url[2])) {
            $controller = "viagens";
            $action = $slice_url[0];
            $params = array_slice(explode('/', $url, 4), 3);
        }
        
    }
}
