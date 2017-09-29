<?php
class Users{

    function __construct(){
    }

    function addUser($db,$data,$username){

        $db->select()->from('user')->where('username',$username)->execute();
        if (($db->affected_rows)<1) {
            $id = $db->insert("user",$data);//returns the last id inserted
        }else{
            $id = 0;
        }
        return $id;
    }

    function editUser($db,$id,$tablename,$values){//$db,$data['id'],$data['table'],$data['values']
        $t = explode('.',$tablename);//{'users','php'}

        $tn = substr($t[0],0,strlen($t[0]) - 1);

        //update and store password from userID passed
        $db->where('userID',$id)->update($tn,$values);
       // echo $db->where('userID',$id)->update($tn,$values)->last_query();
        return $id;
    }

    function deleteUser($db,$id,$tablename){
        $t = explode('.',$tablename);//{'users','php'}
        $tn = substr($t[0],0,strlen($t[0]) - 1);
        $db->delete("$tn")->where('userID',$id)->execute();

        return $id;
    }

    function getUsers($db){

        return $db->select()->from('user')->fetch();
    }

    function getUser($db,$username){
        $where = array(
            //'userID'=>$id
            'username'=>$username
        );//'username'=>$username

        //echo $db->select()->from('user')->where($where)->last_query();
        return $db->select()->from('user')->where($where)->fetch();

    }

    function getTotalUsers($db){
        $db->select()->from('user')->execute();
        return $db->affected_rows;
    }
}
