<?php
require_once '../classes/Database.php';
require_once '../classes/User.php';


$db = new Database();

   $username = strip_tags(trim($_POST['username']));
   $password = md5(strip_tags(trim($_POST['password'])));

   //Add user type=='admin' condition
   $result = $db->getRow("SELECT * FROM user WHERE username = ?",[$username]);
      if ($result > 0){
           session_start();
           $_SESSION['username'] = $username;
           $_SESSION['type'] = $result['type'];
           $response = array('msg'=>'Success!','type'=>$_SESSION['type']);
           if($result['type'] == 'admin')
               header('Location', '../admin/index.php');
           else {
              header('Location', '../index.php');
           }
      }
      else {
         $response = array('msg'=>'Error!');
     }
     echo json_encode($response);

?>
