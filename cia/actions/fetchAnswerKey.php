<?php
    require_once '../config.php';
    include "../classes/AnswerKeys.php";
    include "../classes/Colleges.php";

    $data = array();
    $c = new Colleges();
    $a = new AnswerKeys();
    for($i = 0; $i < $c->getTotalColleges($db);$i++){
        $data[$i] = $a->getCollegeAnsKey($db,$i+1);
    }

    echo json_encode($data);
