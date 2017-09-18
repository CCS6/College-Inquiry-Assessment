<?php
    class Session{
        public function _construct(){
        }

        public function isLoggedIn(){
        $bool = 0;
        if(isset($_SESSION['username'])){
            $bool = 1;
        }
          else {
            $bool = 0;
          }
          return $bool;
        }
        public function logOut(){
            $bool = 1;
            if(isset($_SESSION['username']))
                $bool = 1;
            else {
                $bool = 0;
            }
            if(isset($_GET['page']) == 'logout' && $bool == 1){
                $bool = 0;
                session_unset();
            }
            else {
                $bool = 1;
            }
            return $bool;
        }
    }
?>
