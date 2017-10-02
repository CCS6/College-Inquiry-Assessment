<?php
    require_once '../../config.php';
    include '../../classes/Colleges.php';
    include '../../classes/Questions.php';
    $data = array(
        'table'=>strip_tags(trim($_POST['page']))
    );
    if($data['table']=='collegedegrees.php'){
        $c = new Colleges();
        $result = $c->getColleges($db);
        $resultData = array();
        for($i = 0;$i < $c->getTotalColleges($db);$i++){
            $resultData[$i]['collegeID'] = $result[$i]['collegeID'];
            $resultData[$i]['collegeName'] = $result[$i]['collegeName'];
            $resultData[$i]['collegeCode'] = $result[$i]['collegeCode'];
        }
        echo json_encode($resultData);
    }else if($data['table']=='answerkeys.php'){
        $c = new Colleges();
        $q = new Questions();
        $resultCollege = $c->getColleges($db);
        $resultQuestion = $q->getQuestions($db);
        $resultColleges = array();
        $resultQuestions = array();

        for($i = 0;$i < $c->getTotalColleges($db);$i++){
            $resultColleges[$i]['collegeID'] = $resultCollege[$i]['collegeID'];
            $resultColleges[$i]['collegeName'] = $resultCollege[$i]['collegeName'];
            $resultColleges[$i]['collegeCode'] = $resultCollege[$i]['collegeCode'];
        }
        for($i = 0;$i < $q->getTotalQuestions($db);$i++){
            $resultQuestions[$i]['questionID'] = $resultQuestion[$i]['questionID'];
            $resultQuestions[$i]['questionText'] = $resultQuestion[$i]['questionText'];
        }
        $finalResult = array(
            $resultColleges,
            $resultQuestion
        );
        echo json_encode($finalResult);
    }
