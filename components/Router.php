<?php

namespace liw\components;

//use liw\core\controllers\PostController;

class Router
{
    private $routes;

    public function __construct()
    {
        $routesPath = 'config/routes.php';
        $this->routes = include($routesPath);
        //var_dump($this->routes);
    }

    private function debug($obj)
    {
        echo "<pre>";
        print_r($obj);
        echo "</pre>";
    }

    private function getURI()
    {
        if (!empty($_SERVER['REQUEST_URI'])){
            return trim($_SERVER['REQUEST_URI'], '/');
        }else{
            die("Строка поиска пуста");
        }
    }

    public function run()
    {
        $uri = $this->getURI();

        foreach ($this->routes as $uriPattern => $path){
            if (preg_match("~$uriPattern~", $uri)){

                //меняем path на адрес uri
                $internalRoute = preg_replace("~$uriPattern~", $path, $uri);
                $segments = explode('/', $internalRoute);

                //Какой Controller и action нужно вызвать
                $controllerName = ucfirst(array_shift($segments)) . 'Controller';
                $actionName = 'action' . ucfirst(array_shift($segments));

                $parameters = $segments;

                $controllerFile = 'core/controllers/' . $controllerName . '.php';
                if (file_exists($controllerFile)){
                    include_once ($controllerFile);
                }else{
                    die("no exist");
                }

                $controllerObject = new $controllerName;
                $result = call_user_func_array(array($controllerObject, $actionName), $parameters);

                if ($result != null) {
                    break;
                }
            }
        }
    }

}