<?php
require_once '../../config.php';
include '../../classes/Users.php';
include '../../classes/Colleges.php';
include '../../classes/Questions.php';
include '../../classes/Degrees.php';
include '../../classes/AnswerKeys.php';

$data = array(
    'id'=>strip_tags(trim($_POST['ID'])),
    'table'=>strip_tags(trim($_POST['page'])),
    'values'=>$_POST['values']
);
if(!empty($_POST)){

    if($data['table'] == 'users.php') {
        $o = new Users();

        $columns = ['userType', 'firstName', 'lastName', 'username', 'password','resultCollege'];
         $result = $o->getUserbyUsername($db,$data['values'][3]);//$data['id']

        $unameexists = false;
        $selfrecord = false;
        $unameupdated = false;
        $upwupdated = false;

        $newdata = array();

        if(count($result)>0){
            $unameexists = true;
            $selfrecord = true;
            if($result[0]['userID'] == $data['id']){
                $selfrecord = true;
            }else{
                $selfrecord = false;
            }

            if($selfrecord){

                //echo 'Updated self!';
                //store result into newdata array
                for ($i = 0; $i < count($data['values']) - 1; $i++) {
                    $newdata[$columns[$i]] = $data['values'][$i];
                }

                //print_r($newdata);
                //check if username doesn't exists
                if ($result[0]['username'] != $data['values'][3]) {
                    $newdata['username'] = $data['values'][3];
                    $unameupdated = true;
                }
                if ($result[0]['password'] != $data['values'][4]) {
                    $newdata['password'] = md5($data['values'][4]);
                    $upwupdated = true;
                }

                $result = $o->editUser($db, $data['id'], $data['table'], $newdata);

                $response = array('notice' => 'Success!','msg' => 'Record successfully updated.','lastid'=>$result);
            }else{

                //echo 'User exists and not self!';
                $response = array('notice' => 'Warning!','msg' => "Username [".$data['values'][3]."] already exists.");

            }
          }else{
            for ($i = 0; $i < count($data['values']) - 1; $i++) {
                $newdata[$columns[$i]] = $data['values'][$i];

                if($i==4){
                    $newdata[$columns[$i]] = md5($data['values'][$i]);
                }
            }

            $result = $o->editUser($db, $data['id'], $data['table'], $newdata);
            $response = array('notice' => 'Success!','msg' => 'Record successfully updated.','lastid'=>$result);
        }

    }else if($data['table'] == 'colleges.php'){
        $o = new Colleges();
        $columns = ['collegeCode', 'collegeName', 'collegeAboutInfo', 'collegeDean', 'collegeEmail', 'collegePhoneNumber'];

        //$result = $o->getCollegeDetail($db,$data['values'][0]);
        $newData = array();
        for ($i = 0; $i < count($data['values']) - 1; $i++) {
            if($i == 2){
                $newdata[$columns[$i]] = nl2br($data['values'][$i]);
            }
            else
                $newdata[$columns[$i]] = $data['values'][$i];
        }

        $result = $o->editCollege($db, $data['id'], $data['table'], $newdata);

        $response = array('notice' => 'Success!','msg' => 'Record successfully updated.','lastid'=>$result);

    }else if($data['table'] == 'questions.php'){
        $o = new Questions();
        $columns = ['questionText'];

        //$result = $o->getQuestionDetail($db,$data['id']);
        $newData = array();

        for ($i = 0; $i < count($data['values']) - 1; $i++) {
            $newdata[$columns[$i]] = $data['values'][$i];
        }

        $result = $o->editQuestion($db, $data['id'], $data['table'], $newdata);

        $response = array('notice' => 'Success!','msg' => 'Record successfully updated.','lastid'=>$result);
    }else if($data['table'] == 'collegedegrees.php'){
        $o = new Degrees();
        $columns = ['degreeCode','degreeDesc','degreeJobs'];

        //$result = $o->getDegreeDetail($db,$data['id']);
        $newData = array();
        for ($i = 0; $i < count($data['values']) - 1; $i++) {
            if($i < 2)
                continue;
            else if($i == 4)
                $newData[$columns[2]] = nl2br($data['values'][4]);
            else
                $newData[$columns[$i-2]] = $data['values'][$i];
        }
        $result = $o->editDegree($db, $data['id'], $newData);

        $response = array('notice' => 'Success!','msg' => 'Record successfully updated.','lastid'=>$result);
    }else if($data['table'] == 'answerkeys.php'){
        $o = new AnswerKeys();
        $columns = ['collegeID','questionID','answer'];

        //$result = $o->getAnswerKey($db,$data['id']);
        $newData = array();
        for ($i = 0; $i < count($data['values']) - 1; $i++) {
            $newData[$columns[$i]] = $data['values'][$i];
        }

        $result = $o->editAnswerKey($db, $data['id'], $newData);

        $response = array('notice' => 'Success!','msg' => 'Record successfully updated.','lastid'=>$result);
    }
    echo json_encode($response);
}
?>
