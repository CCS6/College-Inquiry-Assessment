<?php
include '../config.php';

class Colleges{

    function __construct(){
    }

    function setDegrees($db){
        $this->$result = $db->select()->from('college')->fetch();
    }

    function getDegrees($db){

        return $db->select()->from('college')->fetch();
    }

    function getTotalDegrees($db){
        $db->select()->from('college')->execute();
        return $db->affected_rows;
    }
}
