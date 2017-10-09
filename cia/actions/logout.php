<?php
session_start();
if(!empty($_SESSION['username'])){
  session_unset();
}
?>
