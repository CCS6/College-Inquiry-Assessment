<?php
    class Session{

        //$_SESSION[key] = $value;
        public static function set($key,$value){
            $_SESSION[$key] = $value;
        }

        public static function get($key){
            if(isset($_SESSION[$key]))
                return $_SESSION[$key];
            else
                return false;
        }

        public static function display(){
            echo '<pre>';
            print_r($_SESSION);
            echo '</pre>';
        }
    }
?>
