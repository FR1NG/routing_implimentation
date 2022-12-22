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
    }