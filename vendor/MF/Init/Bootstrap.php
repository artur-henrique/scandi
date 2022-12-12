<?php 

namespace MF\Init;

abstract class Bootstrap {
    
    private $routes;

    abstract protected function initRoutes();

    public function __construct() {
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
        header("Access-Control-Allow-Headers: Content-Type");
        $this->initRoutes();
        $this->run($this->getMethod());
    }

    public function getRoutes() {
        return $this->routes;
    }

    public function setRoutes(array $routes) {
        $this->routes = $routes;
    }

    protected function run($method) {
        foreach ($this->getRoutes() as $key => $route) {
            if ($method == $route['method']) {
                $class = "App\\Controllers\\".ucFirst($route['controller']);
                $controller = new $class;
                $method = $route['method'];
                $controller->$method();
            }
        }
    }

    protected function getMethod() {
        return strtolower($_SERVER["REQUEST_METHOD"]);
    }
}

?>