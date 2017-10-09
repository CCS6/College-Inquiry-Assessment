<?php
require_once '../../config.php';
include '../../classes/Colleges.php';
include '../../classes/Users.php';

$c = new Colleges();
$result = $c->getColleges($db);
$data = array();
foreach($result as $values){
    $data['colleges'][] = $values['collegeCode'];
}
//print_r($data);

$u=new Users();
//$result = $u->getUsersResultCollege();


echo json_encode($data,JSON_PRETTY_PRINT);



?>
