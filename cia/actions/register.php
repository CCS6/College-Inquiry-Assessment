<?php
//check session
require_once '../config.php';


    $data = array(
        'acctType'=>'user',
        'firstName'=>strip_tags(trim($_POST['firstname'])),
        'lastName'=>strip_tags(trim($_POST['lastname'])),
        'username'=>strip_tags(trim($_POST['username'])),
        'password'=>md5(strip_tags(trim($_POST['password'])))
    );
    $db->select()->from('account')->where('username',$data['username'])->execute();
    if (($db->affected_rows)<1) {
        $id = $db->insert("account",$data);//returns the last id inserted
        $response = array('notice' => 'Success!','msg'=> "User[".$data['username']."] added.",'lastid'=>$id);
    } else {
        $response = array('notice'=>'Warning!','msg' => "The username[".$data['username']."] already exists.");
    }
    echo json_encode($response);
?>
