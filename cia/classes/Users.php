<?php
include '../config.php';

class Users{

    function __construct(){
    }

    function setUsers($db){
        $this->$result = $db->select()->from('user')->fetch();
    }

    function getUsers($db){

        return $db->select()->from('user')->fetch();
    }

    function getTotalUsers($db){
        $db->select()->from('user')->execute();
        return $db->affected_rows;
    }
}
