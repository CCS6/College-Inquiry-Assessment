<?php
class Questions{

    function __construct(){
    }

    function getQuestions($db){
        return $db->select()->from('question')->fetch();
    }

    function getQuestionDetail($db,$collegeCode){
        //return $db->select()->from('college')->where('collegeCode',$collegeCode)->fetch();
    }

    function getCollegeQuestionAnswerKeys($db){
        return $db->select('a.anskeyID anskeyID,concat(c.collegeID,"-",c.collegeName) collegeName,q.questionID questionID,concat(q.questionID,"-",q.questionText) questionName,a.answer answer')->from('collegeanskey a')->join('college c','c.collegeID = a.collegeID','left')->join('question q','q.questionID = a.questionID','left')->order_by('anskeyID asc,collegeName asc')->fetch();
    }

    function getTotalQuestions($db){
        $db->select()->from('question')->execute();
        return $db->affected_rows;
    }

    function addQuestion($db,$data,$questionText){

        $db->select()->from('question')->where('questionText',$questionText)->execute();
        if (($db->affected_rows)<1) {
            $id = $db->insert('question',$data);//returns the last id inserted
        }else{
            $id = 0;
        }
        return $id;
    }

    function editQuestion($db,$id,$tablename){
        $t = explode('.',$tablename);//{'questions','php'}
        $tn = substr($t[0],0,strlen($t[0]) - 1);
        $db->update("$tn")->where('questionID',$id)->execute();

        return $id;
    }

    function deleteQuestion($db,$id,$tablename){
        $t = explode('.',$tablename);//{'users','php'}
        $tn = substr($t[0],0,strlen($t[0]) - 1);
        $db->delete("$tn")->where('questionID',$id)->execute();

        return $id;
    }

}
