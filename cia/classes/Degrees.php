<?php
class Degrees{

    function __construct(){
    }

    function addDegree($db,$data){
        $db->select()->from("degree")->where('degreeCode',$data['degreeCode'])->execute();
        if (($db->affected_rows)<1) {
            $id = $db->insert("degree",$data);//returns the last id inserted
        }else{
            $id = 0;
        }
        return $id;
    }

    function editDegree($db,$id,$values){
        $db->where('degreeID',$id)->update('degree',$values);

        return $id;
    }

    function deleteDegree($db,$id){
        $db->delete("degree")->where('degreeID',$id)->execute();

        return $id;
    }

    function getDegrees($db,$result){
        return $db->select()->from('degree')->where('collegeID',$result[0]['collegeID'])->fetch();
    }

    function getTotalDegrees($db){
        $db->select()->from('degree')->execute();
        return $db->affected_rows;
    }

    function getCollegeDegrees($db){
        return $db->select('d.degreeID degreeID,c.collegeName collegeName,c.collegeCode collegeCode,
        d.degreeCode degreeCode,d.degreeDesc,d.degreeJobs')->from('college c')->join('degree d','d.collegeID=c.collegeID')->order_by('collegeName asc, degreeCode asc')->fetch();
    }

    function getDegreeDetail($db,$id){
        return $db->select()->from('degree')->where('degreeID',$id)->fetch();
    }
}
