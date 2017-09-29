<?php
//check session
require_once '../config.php';
include '../classes/Users.php';

    $data = array(
        'acctType'=>'user',
        'firstName'=>strip_tags(trim($_POST['firstname'])),
        'lastName'=>strip_tags(trim($_POST['lastname'])),
        'username'=>strip_tags(trim($_POST['username'])),
        'password'=>md5(strip_tags(trim($_POST['password'])))
    );
    $user = new Users();
    $result = $user->addUser($db,$data,$_POST['username']);

    if ($result>0) {
        $response = array('notice' => 'Success!','msg'=> "User[".$data['username']."] added.",'lastid'=>$result);
    } else {
        $response = array('notice'=>'Warning!','msg' => "The username[".$data['username']."] already exists.");
    }
    echo json_encode($response);
?>
