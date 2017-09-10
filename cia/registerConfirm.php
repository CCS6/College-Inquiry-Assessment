<?php
require_once 'Database.php';
$db = new Database();
if (isset($_POST['submit'])) {
   $firstName = strip_tags(trim($_POST['form-firstname']));
   $lastName = strip_tags(trim($_POST['form-lastname']));
   $username = strip_tags(trim($_POST['form-username']));
   $password = strip_tags(trim($_POST['form-password']));
   $confpass = strip_tags(trim($_POST['form-confpass']));

   if(empty($firstName)&&empty($lastName)&&empty($username)&&empty($password)&&empty($confpass)){
      echo '<script language="javascript" type="text/javascript">
                      alert("Multiple fields are required.");
                      window.location = "login.php";
             </script>';
   }
   elseif (empty($firstName)) {
      echo '<script language="javascript" type="text/javascript">
                      alert("First Name field is required.");
                      window.location = "login.php";
             </script>';
   } elseif (empty($lastName)){
      echo '<script language="javascript" type="text/javascript">
                      alert("Last Name field is required.");
                      window.location = "login.php";
             </script>';
   } elseif (empty($username)){
      echo '<script language="javascript" type="text/javascript">
                      alert("User name field is required.");
                      window.location = "login.php";
             </script>';
   } elseif (empty($password)){
      echo '<script language="javascript" type="text/javascript">
                      alert("Password field is required.");
                      window.location = "login.php";
             </script>';
   } elseif (empty($confpass)){
      echo '<script language="javascript" type="text/javascript">
                      alert("Confirm password field is required.");
                      window.location = "login.php";
             </script>';
   } else {
      if ($db->getRow("SELECT username FROM users WHERE username = ?",[$username]) < 1){
         if(strcmp($password, $confpass) == 0){
            if ($db->insertRow("INSERT INTO users(firstname, lastname, username, password) VALUES(?, ?, ?, ?)", [$firstName, $lastName, $username, $password]) == TRUE){
               echo '<script language="javascript" type="text/javascript">
                               alert("Your registration is a success!!");
                               window.location = "login.php";
                       </script>';
            } else {
               echo '<script language="javascript" type="text/javascript">
                              alert("Error!!");
                              window.location = "login.php";
                      </script>';
                /*echo json_encode({1:"Error"});*/
             }
            }
            else{
               echo '<script language="javascript" type="text/javascript">
                               alert("The passwords are not identical. Please try again.");
                               window.location = "login.php";
                       </script>';
            }
         }
         else{
            echo '<script language="javascript" type="text/javascript">
                            alert("Username already exists. Please try again.");
                            window.location = "login.php";
                    </script>';
         }
      }
   }
?>
