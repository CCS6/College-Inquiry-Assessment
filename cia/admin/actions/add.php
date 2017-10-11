<?php
require_once '../../config.php';
include '../../classes/Users.php';
include '../../classes/Colleges.php';
include '../../classes/Questions.php';
include '../../classes/Degrees.php';
include '../../classes/AnswerKeys.php';

    $data = array(
        'table'=>strip_tags(trim($_POST['page'])),
        'values'=>$_POST['values']
    );


    if(!empty($_POST)){
        if($data['table'] == 'users.php'){

            $user = new Users();
            $totalUsers = $user->getTotalUsers($db);
            $data['id'] = $totalUsers;
            $userData = array(
                'userType'=>strip_tags(trim($data['values'][0])),
                'firstName'=>strip_tags(trim($data['values'][1])),
                'lastName'=>strip_tags(trim($data['values'][2])),
                'username'=>strip_tags(trim($data['values'][3])),
                'password'=>md5(strip_tags(trim($data['values'][4])))
            );

            $result = $user->addUser($db,$userData,$userData['username']);

            if ($result>0) {
                $response = array('notice' => 'Success!','msg'=> "User[".$data['values'][3]."] added.",'lastid'=>$result);
            } else {
                $response = array('notice'=>'Warning!','msg' => "The username[ ".$data['values'][3]." ] already exists.");
            }
            echo json_encode($response);
        }
        else if($data['table'] == 'colleges.php'){
            $college = new Colleges();
            $totalColleges = $college->getTotalColleges($db);
            $data['id'] = $totalColleges;
            $collegeData = array(
                'collegeCode'=>strip_tags(trim($data['values'][0])),
                'collegeName'=>strip_tags(trim($data['values'][1])),
                'collegeAboutInfo'=>strip_tags(trim($data['values'][2])),
                'collegeDean'=>strip_tags(trim($data['values'][3])),
                'collegeEmail'=>strip_tags(trim($data['values'][4])),
                'collegePhoneNumber'=>strip_tags(trim($data['values'][5])),
            );
                $result = $college->addCollege($db,$collegeData,$collegeData['collegeCode']);

            if ($result>0) {
                $response = array('notice' => 'Success!','msg'=> "College[".$data['values'][3]."] added.",'lastid'=>$result);
            } else {
                $response = array('notice'=>'Warning!','msg' => "The college[ ".$data['values'][3]." ] already exists.");
            }
            echo json_encode($response);
        }
        else if($data['table'] == 'questions.php'){
            $question = new Questions();
            $totalQuestions = $question->getTotalQuestions($db);
            $data['id'] = $totalQuestions;

            $questionData = array(
                'questionText'=>strip_tags(trim($data['values'][0])),
            );

            $result = $question->addQuestion($db,$questionData,$data['id']);
            if ($result>0) {
                $response = array('notice' => 'Success!','msg'=> "Question[".$data['values'][0]."] added.",'lastid'=>$result);
            } else {
                $response = array('notice'=>'Warning!','msg' => "The question[ ".$data['values'][0]." ] already exists.");
            }
            echo json_encode($response);
        }
        else if($data['table'] == 'collegedegrees.php'){
            $degree = new Degrees();
            $collegeID = explode('-',$data['values'][0]);
            $degreeData = array(
                'collegeID' => $collegeID[0],
                'degreeCode'=>strip_tags(trim($data['values'][2])),
                'degreeDesc'=>strip_tags(trim($data['values'][3])),
                'degreeJobs'=>nl2br(strip_tags(trim($data['values'][4]))),
            );

            $result = $degree->addDegree($db,$degreeData);
            if ($result>0) {
                $response = array('notice' => 'Success!','msg'=> "Degree[".$data['values'][2]."] added.",'lastid'=>$result);
            } else {
                $response = array('notice'=>'Warning!','msg' => "The degree[ ".$data['values'][2]." ] already exists.");
            }
            echo json_encode($response);
        }
        else if($data['table'] == 'answerkeys.php'){
            $answerkey = new AnswerKeys();
            $collegeID = explode('-',$data['values'][0]);
            $questionID = explode('-',$data['values'][1]);
             print_r($data);

            $degreeData = array(
                'collegeID' => $collegeID[0],
                'questionID'=> $questionID[0],
                'answer'=>strip_tags(trim($data['values'][2]))
            );

            $result = $answerkey->addAnswerKey($db,$degreeData);
            if ($result>0) {
                $response = array('notice' => 'Success!','msg'=> "Degree[".$data['values'][2]."] added.",'lastid'=>$result);
            } else {
                $response = array('notice'=>'Warning!','msg' => "The degree[ ".$data['values'][2]." ] already exists.");
            }
            echo json_encode($response);
        }
    }
?>
