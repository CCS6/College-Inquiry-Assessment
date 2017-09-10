<?php
require_once 'Database.php';
$db = new Database();
if (isset($_POST['submit'])) {
   $username = strip_tags(trim($_POST['login-username']));
   $password = strip_tags(trim($_POST['login-password']));
   if(empty($username)&&empty($password)){
      echo '<script language="javascript" type="text/javascript">
                      alert("Multiple fields are required.");
                      window.location = "login.php";
             </script>';
   }
   elseif (empty($username)) {
      echo '<script language="javascript" type="text/javascript">
                      alert("User Name field is required.");
                      window.location = "login.php";
             </script>';
   } elseif (empty($password)){
      echo '<script language="javascript" type="text/javascript">
                      alert("Password field is required.");
                      window.location = "login.php";
             </script>';
   } else {
      if ($db->getRow("SELECT username FROM users WHERE username = ?",[$username]) > 0){
          echo 'Login success!';
      }
      else{
         echo "Username doesn't exist. Please sign-up first before signing in.";
      }
   }
}
?>
