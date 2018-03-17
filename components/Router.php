<?php

class Router {

    private $routes;

    public function __construct() {
        $routePath = ROOT . '/config/routes.php';
        $this->routes = include($routePath);
    }

    private function getUri() {  //returns str uri 
        if (!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }

    public function run() {

        //Получить строку запроса 
        $uri = $this->getUri();



        //Проверить наличие такого запроса в routes.php
        foreach ($this->routes as $uriPattern => $path) {

            //Сравниваем строку запроса и данные в роутах 
            if (preg_match("~$uriPattern~", $uri)) {
                //Получаем внутрений путь из строки запроса 
                $internalRoute = preg_replace("~$uriPattern~", $path, $uri);
              
                //Если есть совпадения определить какой контроллер и екшн обрабатывает
                //запрос
                $segments = explode('/', $internalRoute); //разбиваем строку по слешу на масив 
         
                $controllerName = array_shift($segments) . 'Controller';
                $controllerName = ucfirst($controllerName);
                $actionName = 'action' . ucfirst(array_shift($segments));
            
                $parameters = $segments;

// Подключить файл класа Controller
                $controllerFile = ROOT . '/controllers/' . $controllerName . '.php';

                if (file_exists($controllerFile)) {
                    include_once $controllerFile;
                }
                $controllerObject = new $controllerName; //Создать обьект и вызват метод(т.е. экшон
             
                $result = call_user_func_array(array($controllerObject, $actionName), $parameters);
                var_dump($result);
                if ($result != null) {
                    break;
                }
            }
        }
    }

}
