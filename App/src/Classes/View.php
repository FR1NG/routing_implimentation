<?php

    namespace App\Classes;

    class View {
        public function __construct(protected string $path, protected array $params = [])
        {
            
        }

        public static function Render($path) {
            $absolute_path = VIEWS_PATH . $path . ".php"; 
            echo $absolute_path. "<br>";
            if(file_exists($absolute_path))
                require($absolute_path, );
            else 
                throw new \Exception("file not found !");
            return new static($path);
        }
    }