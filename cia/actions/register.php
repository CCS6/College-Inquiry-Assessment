<?php
require_once '../classes/Database.php';


$db = new Database();
   $firstName = strip_tags(trim($_POST['firstname']));
   $lastName = strip_tags(trim($_POST['lastname']));
   $username = strip_tags(trim($_POST['username']));
   $password = md5(strip_tags(trim($_POST['password'])));
   $type = 'user';
      if ($db->getRow("SELECT username FROM user WHERE username = ?",[$username]) < 1){
            if ($db->insertRow("INSERT INTO user(acctType,firstname, lastname, username, password) VALUES(?, ?, ?, ?, ?)", [$type,$firstName, $lastName, $username, $password]) == TRUE){
               echo 'Success!';
            }
      }
      else {
         echo 'Error!';
     }

?>
