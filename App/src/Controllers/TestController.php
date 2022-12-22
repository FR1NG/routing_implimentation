<?php
    namespace App\Controllers;

    class TestController {
        public function __construct()
        {
            // echo "hello from the test class";
        }

        public function index()
        {
            echo " <ul> <li><a href='/create'>index</a> </li>  <li><a href='/create'>create</a> </li> </ul> <br>";
            echo "hello from the index";
        }

        public function create()
        {
            echo " <ul> <li><a href='index'>index</a> </li>  <li><a href='create'>create</a> </li> </ul> <br>";
            echo "hello from create";
        }

        public function store()
        {
            // echo " <ul> <li><a href='index'>index</a> </li>  <li><a href='create'>create</a> </li> </ul> <br>";
            // echo "hello from store";
            header("Content-type: application/json; charset=utf-8");

            echo  json_encode(["hello" => "world"]);
        }

        public function delete() {
            echo "hello from delte method";
        }
    }