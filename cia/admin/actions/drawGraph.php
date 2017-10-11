<?php
require_once '../../config.php';
include '../../classes/Colleges.php';
include '../../classes/Users.php';

if(!$s->isLoggedIn()){
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
            //if(!in_array($val,$data['colleges']))
            $data['colleges'][] = $val;
        }
    }else{
        //if(!in_array($values['resultCollege'],$data['colleges']))
        $data['colleges'][] = $values['resultCollege'];
    }

}
$newarr = array_count_values( $data['colleges']);

echo json_encode($newarr,JSON_FORCE_OBJECT);
?>
