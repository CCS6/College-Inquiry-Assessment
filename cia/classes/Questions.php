<?php
include '../config.php';

class Questions{

    function __construct(){
    }

    function setQuestions($db){
        $this->$result = $db->select()->from('question')->fetch();
    }

    function getQuestions($db){
        return $db->select()->from('question')->fetch();
    }

    function getTotalQuestions($db){
        $db->select()->from('question')->execute();
        return $db->affected_rows;
    }
}
