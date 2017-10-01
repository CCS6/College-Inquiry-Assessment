<?php
class ResultTables{

    function __construct(){
    }

    function getResultsTable($db){
        return $db->select("r.resultTableID as id,u.userID userID,concat(ucase(u.lastName),',&nbsp;&nbsp;',u.firstName) as uName,u.userName userName,
        concat(q.questionID,'. ',q.questionText) as question,r.answer as answer")
        ->from('user u')
        ->join('resulttable r' ,'r.userID = u.userID')
        ->join('question q','q.questionID = r.questionID')
        ->fetch();
    }

}
