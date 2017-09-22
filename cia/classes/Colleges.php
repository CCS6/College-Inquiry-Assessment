<?php
include '../config.php';

class Colleges{

    function __construct(){
    }

    function setColleges($db){
        $this->$result = $db->select()->from('college')->fetch();
    }

    function getColleges($db){

        return $db->select()->from('college')->fetch();
    }

    function getTotalColleges($db){
        $db->select()->from('college')->execute();
        return $db->affected_rows;
    }
}
