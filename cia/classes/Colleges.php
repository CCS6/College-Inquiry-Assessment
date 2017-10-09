<?php
class Colleges{

    function __construct(){
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

    function addCollege($db,$data,$collegeCode){
        $data['collegeAboutInfo'] = nl2br($data['collegeAboutInfo']);
        $db->select()->from("college")->where('collegeCode',$collegeCode)->execute();
        if (($db->affected_rows)<1) {
            $id = $db->insert("college",$data);//returns the last id inserted
        }else{
            $id = 0;
        }
        return $id;
    }

    function editCollege($db,$id,$tablename,$values){
        $t = explode('.',$tablename);//{'colleges','php'}
        $tn = substr($t[0],0,strlen($t[0]) - 1);
        $db->where('collegeID',$id)->update($tn,$values);

        return $id;
    }

    function deleteCollege($db,$id,$tablename){
        $t = explode('.',$tablename);//{'users','php'}
        $tn = substr($t[0],0,strlen($t[0]) - 1);
        $db->delete("$tn")->where('collegeID',$id)->execute();

        return $id;
    }

    function get_words($sentence, $count = 20) {
      preg_match("/(?:\w+(?:\W+|$)){0,$count}/", $sentence, $matches);
      return $matches[0];
    }

    function concatResults($db,$collegeFetch){
        $sql = "SELECT(GROUP_CONCAT(concat(collegeCode,' - ',collegeName) SEPARATOR ', ')) AS recCollege
         FROM college
         WHERE collegeID IN ($collegeFetch)";
        // return $db->select($sql)->from('college')->where_in('collegeID',$collegeFetch)->fetch();
        return $db->query($sql)->fetch();
    }

    function getCollegeNames($db,$collegeFetch){
        $sql = "SELECT GROUP_CONCAT(collegeName SEPARATOR ', ') AS recCollege
        FROM college
        WHERE collegeID IN ($collegeFetch)";
        return $db->query($sql)->fetch();
    }
}
