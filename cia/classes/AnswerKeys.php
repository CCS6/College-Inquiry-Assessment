<?php
class AnswerKeys{

    function __construct(){
    }

    function getAnswerKeys($db){
        return $db->select()->from('collegeanskey')->fetch();
    }

    function getTotalAnswerKeys($db){
        $db->select()->from('collegeanskey')->execute();
        return $db->affected_rows;
    }

    function getCollegeQuestionAnswerKeys($db){
      return $db->select('a.anskeyID anskeyID,c.collegeName collegeName,q.questionID questionID,q.questionText questionName,a.answer answer')
      ->from('collegeanskey a')->join('college c','c.collegeID = a.collegeID','left')->join('question q','q.questionID = a.questionID','left')
      ->order_by('questionID asc,collegeName asc')->fetch();
    }

    function addAnswerKey($db,$data){
            $id = $db->insert("collegeanskey",$data);//returns the last id inserted
        return $id;
    }

    function editAnswerKey($db,$id,$values){
        $db->where('ansKeyID',$id)->update('collegeanskey',$values);

        return $id;
    }

    function deleteAnswerKey($db,$id){
        $db->delete("collegeanskey")->where('ansKeyID',$id)->execute();

        return $id;
    }

    function getAnswerKey($db,$id){
        return $db->select()->from('collegeanskey')->where('ansKeyID',$id)->fetch();
    }

    function getCollegeAnsKey($db,$id){
        return $db->select('answer')->from('collegeanskey')->where('collegeID',$id)->order_by('questionID asc,collegeID asc')->fetch();
    }
}
