<?php
session_start();
if(!empty($_SESSION['username'])){
  echo 'Test.';
  session_unset();
}
?>
