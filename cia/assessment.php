<?php
class Assessment{

    function __construct(){
    }

    // function getAnswerKeys($db){
    //     return $db->select()->from('collegeanskey')->fetch();
    // }
    //
    // function getCollegeQuestionAnswerKeys($db){
    //   return $db->select('a.anskeyID anskeyID,c.collegeName collegeName,q.questionID questionID,q.questionText questionName,a.answer answer')
    //   ->from('collegeanskey a')->join('college c','c.collegeID = a.collegeID','left')->join('question q','q.questionID = a.questionID','left')
    //   ->order_by('questionID asc,collegeName asc')->fetch();
    // }
    //
    // function addAnswerKey($db,$data){
    //     // $db->select()->from("collegeanskey")->where('collegeID',$data['collegeID'])->execute();
    //     // if (($db->affected_rows)<1) {
    //         $id = $db->insert("collegeanskey",$data);//returns the last id inserted
    //     // }else{
    //     //     $id = 0;
    //     // }
    //     return $id;
    // }
    //
    // function editAnswerKey($db,$id,$values){
    //     $db->where('ansKeyID',$id)->update('collegeanskey',$values);
    //
    //     return $id;
    // }
    //
    // function deleteAnswerKey($db,$id){
    //     $db->delete("collegeanskey")->where('ansKeyID',$id)->execute();
    //
    //     return $id;
    // }
    //
    // function getAnswerKey($db,$id){
    //     return $db->select()->from('collegeanskey')->where('ansKeyID',$id)->fetch();
    // }

    function processAssessment(){
    }
}
