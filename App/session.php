<?php
    session_start();
    // print_r($_SESSION);

    
    
    class saluto {
        
        public function sayHello() {
            echo "hello from funstion";
        }
    }

    // call_user_func("sayHello");

    call_user_func_array([saluto::class, 'sayHello'], []);