<?php
    include '../config.php';
    include "../classes/AnswerKeys.php";
    include "../classes/Colleges.php";

    $ansKey = array();
    $c = new Colleges();
    $a = new AnswerKeys();
    $i;
    for($i = 0; $i < $c->getTotalColleges($db);$i++){
        $ansKey[$i] = $a->getCollegeAnsKey($db,$i+1);
    }
    echo '<pre>';
    print_r($ansKey);
    echo '</pre>';
