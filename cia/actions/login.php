<?php
require '../config.php';

$data = array(
    'username'=>strip_tags(trim($_POST['username'])),
    'password'=>md5(strip_tags(trim($_POST['password'])))
);

$db->select()->from('user')->where('username',$data['username'])->execute();

if (($db->affected_rows) > 0) {
    session_start();
    $result = $db->select()->from('user')->where('username', $data['username'])->fetch();
    $_SESSION['username'] = $result[0]['username'];
    $_SESSION['type'] = $result[0]['userType'];
    $_SESSION['firstname'] = $result[0]['firstName'];
    $_SESSION['lastname'] = $result[0]['lastName'];

    $response = array('notice'=>'Success!','type'=>$_SESSION['type']);
}
else {
    $response = array('notice'=>'Error!');
}

echo json_encode($response);

?>
