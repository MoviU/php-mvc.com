<?php
    class Router {
        private $routes;

        public function __construct() {
            $routesPath = ROOT.'/config/routes.php';
            $this->routes = include($routesPath);
        }

        /* Returns request string
        * @return string
        */
        private function getUri () {
            if (!empty($_SERVER['REQUEST_URI'])) {
                return trim($_SERVER['REQUEST_URI'], '/');
            }
        }
        /*
        * Run method
        */
        public function run() {

            // Вызываем метод getUri() для получения запроса
            $uri = $this->getUri();

            // Проверяем на наличие в путях сайта
            foreach ($this->routes as $uriPattern => $path) {
                if (preg_match("~$uriPattern~", $uri)) {
                    $internalRoute = preg_replace("~$uriPattern~", $path, $uri);
                    
                    // Получаем название контроллера
                    $segments = explode ('/', $internalRoute);
                    $controller_name = array_shift($segments).'Controller';
                    $controller_name = ucfirst($controller_name);

                    // Получаем название метода
                    $action_name = 'action'.ucfirst(array_shift($segments));

                    // Определяем параметры параметров
                    $params = $segments;

                    // Подключаем файл класса-контроллера
                    $controller_file = ROOT.'/controllers/'.$controller_name.'.php';
                    // Проверка на существование
                    if (file_exists($controller_file)) {
                        include_once ($controller_file);
                    }

                    // Создаем метод класса
                    $controllerObject = new $controller_name;
                    $result = call_user_func_array(array($controllerObject, $action_name), $params);
                    if ($result != null) {
                        break;
                    }
                }
            }
        }
    }
