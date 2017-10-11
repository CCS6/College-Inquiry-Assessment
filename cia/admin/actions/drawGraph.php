<?php
require_once '../../config.php';
include '../../classes/Colleges.php';
include '../../classes/Users.php';

if(!isset($_SESSION)){
    header('Location:../../index.php');
}
$u=new Users();
$result = $u->getUsers($db);
//print_r($result);
$data = array('colleges'=>array());

foreach($result as $values){
    $arr = array();
    $arr = explode(',',$values['resultCollege']);
    if(!empty($arr)){
        foreach($arr as $val){
            $data['colleges'][] = $val;
        }
    }else{
        $data['colleges'][] = $values['resultCollege'];
    }

}
$newarr = array_count_values( $data['colleges']);

echo json_encode($newarr,JSON_FORCE_OBJECT);
?>
