<?php
class AnswerKeys{

    function __construct(){
    }

    function getAnswerKeys($db){
        return $db->select()->from('collegeanskey')->fetch();
    }

    function getCollegeQuestionAnswerKeys($db){
      return $db->select('a.anskeyID anskeyID,c.collegeName collegeName,q.questionID questionID,q.questionText questionName,a.answer answer')
      ->from('collegeanskey a')->join('college c','c.collegeID = a.collegeID','left')->join('question q','q.questionID = a.questionID','left')
      ->order_by('anskeyID asc,collegeName asc')->fetch();
    }

    function addAnswerKey($db,$data){
        $db->select()->from("degree")->where('degreeCode',$data['degreeCode'])->execute();
        if (($db->affected_rows)<1) {
            $id = $db->insert("degree",$data);//returns the last id inserted
        }else{
            $id = 0;
        }
        return $id;
    }

    function editAnswerKey($db,$id,$values){
        $db->where('degreeID',$id)->update('degree',$values);

        return $id;
    }

    function deleteAnswerKey($db,$id){
        $db->delete("degree")->where('degreeID',$id)->execute();

        return $id;
    }

    function getAnswerKey($db,$id){
        return $db->select()->from('collegeanskey')->where('ansKeyID',$id)->fetch();
    }
}
