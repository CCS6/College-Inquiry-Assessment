<?php
class ResultTables{

    function __construct(){
    }

    function getResultsTable($db){
        return $db->select("r.resultTableID as id,u.userID userID,concat(ucase(u.lastName),',&nbsp;&nbsp;',u.firstName) as uName,u.userName userName,
        concat(q.questionID,'. ',q.questionText) as question,r.answer as answer")
        ->from('resulttable r')
        ->join('user u' ,'u.userID = r.userID')
        ->join('question q','q.questionID = r.questionID')
        ->fetch();
    }

    function getTotalResultTables($db){
        $db->select()->from('resulttable')->execute();
        return $db->affected_rows;
    }

    function getAnswers($db,$id){
        $db->select('answer')->from('resulttable')->where('userID',$id)->execute();
        return $db->affected_rows;
    }

    function insertResults($db,$userID,$questionID,$answer){
        $values = array(
            'userID' => $userID,
            'questionID' => $questionID,
            'answer' => $answer
        );
        $db->insert('resulttable',$values);
    }

    function updateResults($db,$userID,$questionID,$answer){
        $where = array(
            'userID' => $userID,
            'questionID' => $questionID
        );
        $values = array(
            'answer' => $answer
        );
        $db->where($where)->update('resulttable',$values);
    }
}
