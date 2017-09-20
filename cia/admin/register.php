<?php
//check session
require_once '../config.php';

    /*
    $firstName = strip_tags(trim($_POST['firstname']));
    $lastName = strip_tags(trim($_POST['lastname']));
    $username = strip_tags(trim($_POST['username']));
    $password = md5(strip_tags(trim($_POST['password'])));
    $type = 'user';
    */

    $data = array(
        'acctType'=>'user',
        'firstName'=>strip_tags(trim($_POST['firstname'])),
        'lastName'=>strip_tags(trim($_POST['lastname'])),
        'username'=>strip_tags(trim($_POST['username'])),
        'password'=>md5(strip_tags(trim($_POST['password'])))
    );

    print_r($data);

    //you can use this as param to where or
    //pass an array
    //$where = array('username'=>$data['username']);
    //$where = "'username',$username";

    //$sql = "SELECT * FROM user WHERE username='$username'";
    //$db->query($sql)->execute() ;

    $db->select()->from('user')->where('username',$data['username'])->execute();
    echo $db->last_query();//prints last query string

    // Gets the total number of rows selected $db->affected_rows
    echo "\nAffected Rows : " . $db->affected_rows."\n";


    // Again, you can skip the select() method if you are selecting all fields (*)
    //$db->from('table')->where($where)->execute();

    if (($db->affected_rows)<1) {

        //* @param string name of the table
        //* @param array the data for inserting into the table

        $id = $db->insert("user",$data);//returns the last id inserted
        $response = array('notice' => 'Success!','msg'=> "User[".$data['username']."] added.",'lastid'=>$id);
    } else {
        $response = array('notice'=>'Warning!','msg' => "The username[".$data['username']."] already exists.");
    }

    echo json_encode($response);


?>
