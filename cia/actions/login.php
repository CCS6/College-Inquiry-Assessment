<?php
require_once '../Database.php';
$db = new Database();
   $firstName = strip_tags(trim($_POST['firstname']));
   $lastName = strip_tags(trim($_POST['lastname']));
   $username = strip_tags(trim($_POST['username']));
   $password = md5(strip_tags(trim($_POST['password'])));

      if ($db->getRow("SELECT username FROM users WHERE username = ?",[$username]) < 1){
            if ($db->insertRow("INSERT INTO users(firstname, lastname, username, password) VALUES(?, ?, ?, ?)", [$firstName, $lastName, $username, $password]) == TRUE){
               echo 'Success!';
            }
      }
      else {
         echo 'Error!';
      }
?>
