<?php

    namespace App\Classes;

    class Router {
        private $routes = [];
        private static $object;
        private function __construct() {}

        protected function call($route)
        {
            if (isset($this->routes[$route]))
            {
                if ($this->routes[$route][2] != $_SERVER["REQUEST_METHOD"])
                    throw new \Exception("Method ". $_SERVER["REQUEST_METHOD"] . " is not supported, suported Method : ". $this->routes[$route][2]);
                if(class_exists($this->routes[$route][0]))
                {
                    $obj = new $this->routes[$route][0]();
                    if (method_exists($obj, $this->routes[$route][1]))
                        call_user_func_array([$obj, $this->routes[$route][1]], []);
                    else
                        throw new \Exception("method not found !");
                }
                else
                    throw new \Exception("class not found !");
            }
            else
            {
                throw new \Exception("route not found");
            }
        }

        protected function setObject()
        {
        }
        
        public static function Get(string $route, array $action)
        {
            if(!isset(self::$object))
                self::$object = new Router();
            self::$object->register($route, $action , "GET");
            return self::$object;
        }

        public static function Post(string $route, array $action)
        {
            if(!isset(self::$object))
                self::$object = new Router();
            self::$object->register($route, $action , "POST");
            return self::$object;
        }

        public static function Patch(string $route, array $action)
        {
            if(!isset(self::$object))
                self::$object = new Router();
            self::$object->register($route, $action , "PATCH");
            return self::$object;
        }

        public static function Put(string $route, array $action)
        {
            if(!isset(self::$object))
                self::$object = new Router();
            self::$object->register($route, $action , "PUT");
            return self::$object;
        }

        public static function Delete(string $route, array $action)
        {
            if(!isset(self::$object))
                self::$object = new Router();
            self::$object->register($route, $action , 'DELETE');
            return self::$object;
        }

        public function register(string $route, array $action, string $method)
        {
            if(!isset(self::$object->routes[$route]))
            self::$object->routes[$route] = [...$action, $method];
            return self::$object;
        }

        public static function resolve($route)
        {
            try {
                self::$object->call($route);
                return self::$object;
            } catch (\Exception $e)
            {
                echo $e->getMessage();
            }
        }

        public function test()
        {
            print_r(self::$object->routes);
        }
    }