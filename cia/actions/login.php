<?php
require_once '../classes/Database.php';
require_once '../classes/User.php';


$db = new Database();
   $username = strip_tags(trim($_POST['username']));
   $password = md5(strip_tags(trim($_POST['password'])));
   $type = User::$userType;

   //Add user type=='admin' condition
      if ($db->getRow("SELECT username FROM user WHERE username = ?",[$username]) > 0){
           echo 'Success!';
      }
      else {
         echo 'Error!';
     }

?>
