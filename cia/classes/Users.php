<?php
include '../config.php';

class Users{

    function __construct(){
    }

    function setUsers($db){
        $this->$result = $db->select()->from('account')->fetch();
    }

    function getUsers($db){

        return $db->select()->from('account')->fetch();
    }

    function getTotalUsers($db){
        $db->select()->from('account')->execute();
        return $db->affected_rows;
    }
}
