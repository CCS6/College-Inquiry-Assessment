<?php
require_once '../classes/Database.php';


$db = new Database();

$college = $_GET[''];
   //Add user type=='admin' condition
   $result = $db->getRow("SELECT * FROM colleges WHERE collegeNo= ?",[$username]);

   $_GET['collegeDesc'] = $result['collegeDesc'];
?>
