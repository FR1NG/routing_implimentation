<?php

    namespace App\Classes;

    class Router {
        private $routes = [];

        protected function call($route)
        {
            if (isset($this->routes[$route]))
            {
                if(class_exists($this->routes[$route][0]))
                {
                    $obj = new $this->routes[$route][0]();
                    if (method_exists($obj, $this->routes[$route][1]))
                        call_user_func_array([$obj, $this->routes[$route][1]], []);
                }
            }
        }

        public function register(string $route, array $action)
        {
            if(! isset($this->routes[$route]))
                $this->routes[$route] = $action;
            return $this;
        }

        public function resolve($route)
        {
            $this->call($route);
            return $this;
        }

        public function test()
        {
            print_r($this->routes);
        }
    }