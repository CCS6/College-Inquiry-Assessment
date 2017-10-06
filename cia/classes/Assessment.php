<?php
class Assessment{

    function __construct(){
    }

    function processAssessment(){

    }

    function fetchAnswerKey($db){
        return $db->select('a.anskeyID anskeyID,c.collegeName collegeName,q.questionID questionID,q.questionText questionName,a.answer answer')
        ->from('collegeanskey a')->join('college c','c.collegeID = a.collegeID','left')->join('question q','q.questionID = a.questionID','left')
        ->order_by('questionID asc,collegeName asc')->fetch();
    }
}
