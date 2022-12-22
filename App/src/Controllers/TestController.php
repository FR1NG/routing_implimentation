<?php
    namespace App\Controllers;

    use App\Classes\View;

    class TestController {
        public function __construct()
        {
            // echo "hello from the test class";
            // echo " <ul> <li><a href='/index'>index</a> </li>  <li><a href='/create'>create</a> </li> </ul> <br>";
            // echo "<form  method='post' action='/store'><input name='ideas' type='text' placeholder='write your thougths here !' /><button type='submit'> submit </button></form>";
        }

        public function index()
        {
            View::Render("test/index");
        }

        public function create()
        {
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
    