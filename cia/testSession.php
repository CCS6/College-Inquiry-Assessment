<?php
    require "session_start.php";
    session_start();
    Session::set('name','charles');
    echo Session::get('name');
    echo Session::display();
?>
