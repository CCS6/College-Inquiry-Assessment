<?php
class Colleges{

    function __construct(){
    }

    function getColleges($db){
        return $db->select()->from('college')->fetch();
    }

    function getCollegeDegrees($db){
        /*
        $db->select('*');
        $db->from('blogs');
        $db->join('comments', 'comments.id = blogs.id');

        SELECT d.degreeID degreeID,c.collegeName collegeName,concat(c.collegeID,"-",c.collegeCode) collegeCode,
        concat(d.degreeID,'-',d.degreeName) degreeName,d.degreeDesc,d.degreeJobs
        FROM college c
        LEFT JOIN degree d ON d.`collegeID`=c.`collegeID`
        ORDER BY collegeName,degreeName;
        */

        return $db->select('d.degreeID degreeID,c.collegeName collegeName,concat(c.collegeID,"-",c.collegeCode) collegeCode,
        concat(d.degreeID,"-",d.degreeName) degreeName,d.degreeDesc,d.degreeJobs')->from('college c')->join('degree d','d.collegeID=c.collegeID')->order_by('collegeName asc, degreeName asc')->fetch();
    }

    function getCollegeDetail($db,$collegeCode){
        return $db->select()->from('college')->where('collegeCode',$collegeCode)->fetch();
    }

    function getTotalColleges($db){
        $db->select()->from('college')->execute();
        return $db->affected_rows;
    }

    function addCollege($db,$data,$collegeCode){
        $db->select()->from("college")->where('collegeCode',$collegeCode)->execute();
        if (($db->affected_rows)<1) {
            $id = $db->insert("college",$data);//returns the last id inserted
        }else{
            $id = 0;
        }
        return $id;
    }

    function editCollege($db,$id,$tablename){
        $t = explode('.',$tablename);//{'colleges','php'}
        $tn = substr($t[0],0,strlen($t[0]) - 1);
        $db->delete("$tn")->where('collegeID',$id)->execute();

        return $id;
    }

    function deleteCollege($db,$id,$tablename){
        $t = explode('.',$tablename);//{'users','php'}
        $tn = substr($t[0],0,strlen($t[0]) - 1);
        $db->delete("$tn")->where('collegeID',$id)->execute();

        return $id;
    }
}
