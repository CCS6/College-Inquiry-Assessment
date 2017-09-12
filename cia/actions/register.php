<?php
require_once '../classes/Database.php';
require_once '../classes/User.php';


$db = new Database();
   $firstName = strip_tags(trim($_POST['firstname']));
   $lastName = strip_tags(trim($_POST['lastname']));
   $username = strip_tags(trim($_POST['username']));
   $password = md5(strip_tags(trim($_POST['password'])));
   $type = User::$userType;
   /*echo '<pre>';
     print_r($_POST);
     echo '<br />'.$type;
   echo '</pre>';
   echo $firstName." - ".$lastName." - ".$username." - ".$password;
   die();*/

   //
      if ($db->getRow("SELECT username FROM user WHERE username = ?",[$username]) < 1){
            if ($db->insertRow("INSERT INTO user(type,firstname, lastname, username, password) VALUES(?, ?, ?, ?, ?)", [$type,$firstName, $lastName, $username, $password]) == TRUE){
               echo 'Success!';
            }
      }
      else {
         echo 'Error!';
     }

?>
