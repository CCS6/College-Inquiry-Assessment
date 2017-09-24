<?php
class Colleges{
    function __construct(){
    }

    function setColleges($db){
        $this->$result = $db->select()->from('college')->fetch();
    }

    function getColleges($db){
        return $db->select()->from('college')->fetch();
    }

    function getCollegeDetail($db,$collegeCode){
        return $db->select()->from('college')->where('collegeCode',$collegeCode)->fetch();
    }

    function getTotalColleges($db){
        $db->select()->from('college')->execute();
        return $db->affected_rows;
    }

    function get_words($sentence, $count = 20) {
      preg_match("/(?:\w+(?:\W+|$)){0,$count}/", $sentence, $matches);
      return $matches[0];
    }
}
