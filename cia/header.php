<?php
session_start();
require 'classes/Session.php';
$s = new Session();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>College Inquiry Assessment</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <link rel="stylesheet" type="text/css" href="css/font.css">
    <link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href='css/font-about.css' rel='stylesheet' type="text/css">
    <!--<link href="css/font-awesome.css" rel="stylesheet" type="text/css">-->
    <link href="css/about-styles.css" rel="stylesheet" type="text/css">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
  </head>
  <body>
    <div class="loader"></div>
    <div id="myDiv">
    <!--HEADER-->
    <div class="header">
      <div class="bg-color">
        <header id="main-header">
        <nav class="navbar navbar-default navbar-fixed-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.php">CIA</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
              <ul class="nav navbar-nav navbar-right">
                <li class=""><a href="assessment.php">Assessment</a></li>
                <li class=""><a href="colleges.php">Colleges</a></li>
                <li class=""><a href="about.php">About</a></li>
                <?php
                  if($s->isLoggedIn() == 1 && $s->logOut() == 1){
                    echo '<li class=""><a href="index.php?page=logout" title="Log-Out">Logout</a></li>';
                    echo '<li class=""><a href="userProfile.php" title="View Profile">['.$_SESSION['username'].']</a></li>';
                  }
                  else {
                    echo '<li class=""><a href="login.php">Login</a></li>';
                  }
                 ?>
              </ul>
            </div>
          </div>
        </nav>
        </header>
