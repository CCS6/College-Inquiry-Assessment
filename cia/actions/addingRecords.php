<?php
    session_start();
    require_once '../config.php';
    include '../classes/Users.php';
    include '../classes/Colleges.php';
    include '../classes/ResultTables.php';
    include '../classes/Questions.php';
    $u = new Users();
    $c = new Colleges();
    $r = new ResultTables();
    $q = new Questions();
    $finalMax = json_decode($_POST['recCollege']);
    $tempResTable = json_decode($_POST['tempResultTable']);
    $collegeFetch = implode(',',$finalMax);
    if(isset($_SESSION['username'])){
        $str = $c->concatResults($db,$collegeFetch);
        if($r->getAnswers($db,$_SESSION['userID']) == 0){
            for($i = 1; $i <= $q->getTotalQuestions($db);$i++){
                $r->insertResults($db,$_SESSION['userID'],$i,$tempResTable[$i-1]);
            }
        }
        else{
            for($j = 1; $j <= $q->getTotalQuestions($db);$j++){
                // echo $j."<br>";
                $r->updateResults($db,$_SESSION['userID'],$j,$tempResTable[$j-1]);
            }
        }
        $u->UpdateResults($db,$_SESSION['userID'],$str[0]['recCollege']);

        $collegeStr = $c->getCollegeNames($db,$collegeFetch);
        echo json_encode($collegeStr);
    }
    else {
        $collegeStr = $c->getCollegeNames($db,$collegeFetch);
        echo json_encode($collegeStr);
    }
