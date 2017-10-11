<?php
require_once '../../config.php';
include '../../classes/Users.php';
include '../../classes/Colleges.php';
include '../../classes/Questions.php';
include '../../classes/Degrees.php';
include '../../classes/AnswerKeys.php';

if(!isset($_SESSION)){
    header('Location:../../index.php');
}

$data = array(
    'id'=>strip_tags(trim($_POST['id'])),
    'table'=>strip_tags(trim($_POST['page']))
);


if(!empty($_POST)){
    if($data['table'] == 'users.php'){
        $user = new Users();

        $result = $user->deleteUser($db,$data['id'],$data['table']);

        if ($result > 0) {
            $response = array('notice' => 'Success!','msg'=> "Record successfully deleted.",'lastid'=>$result);
        } else {
            $response = array('notice'=>'Warning!','msg' => "Record does not exist.");
        }
    }
    else if($data['table'] == 'colleges.php'){
        $college = new Colleges();

        $result = $college->deleteCollege($db,$data['id'],$data['table']);

        if ($result > 0) {
            $response = array('notice' => 'Success!','msg'=> "Record successfully deleted.",'lastid'=>$result);
        } else {
            $response = array('notice'=>'Warning!','msg' => "Record does not exist.");
        }
    }
    else if($data['table'] == 'questions.php'){
        $question = new Questions();

        $result = $question->deleteQuestion($db,$data['id'],$data['table']);

        if ($result > 0) {
            $response = array('notice' => 'Success!','msg'=> "Record successfully deleted.",'lastid'=>$result);
        } else {
            $response = array('notice'=>'Warning!','msg' => "Record does not exist.");
        }
    }
    else if($data['table'] == 'collegedegrees.php'){
        $degree = new Degrees();

        $result = $degree->deleteDegree($db,$data['id']);

        if ($result > 0) {
            $response = array('notice' => 'Success!','msg'=> "Record successfully deleted.",'lastid'=>$result);
        } else {
            $response = array('notice'=>'Warning!','msg' => "Record does not exist.");
        }
    }
    else if($data['table'] == 'answerkeys.php'){
        $answerkey = new AnswerKeys();

        $result = $answerkey->deleteAnswerKey($db,$data['id']);

        if ($result > 0) {
            $response = array('notice' => 'Success!','msg'=> "Record successfully deleted.",'lastid'=>$result);
        } else {
            $response = array('notice'=>'Warning!','msg' => "Record does not exist.");
        }
    }
    echo json_encode($response);
}
?>
