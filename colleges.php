<?php
require '../config.php';
  //comment para stage
   //Add user type=='admin' condition
   $college1->select()->from('colleges')->where('collegeNo',1)->execute();
   if (($college1->affected_rows) > 0) {
        session_start();
        $agri = $college1->select()->from('colleges')->where('collegeNo', 1)->fetch();
        $_SESSION['agricultureAboutInfo'] = $agri[0]['collegeAboutInfo'];
        $_SESSION['agricultureName'] = $agri[0]['collegeName'];
        $_SESSION['agricultureDean'] = $agri[0]['collegeDean'];
        $_SESSION['agriculturePhoneNumber'] = $agri[0]['collegePhoneNumber'];
        $_SESSION['agricultureEmail'] = $agri[0]['collegeEmail'];
    }else{
        $response = array('msg'=>'Error!');
    }
    $college2->select()->from('colleges')->where('collegeNo', 2)->execute();
    if (($college2->affected_rows) > 0) {
        $arts = $college2->select()->from('colleges')->where('collegeNo', 2)->fetch();
        $_SESSION['artscienceAboutInfo'] = $arts[0]['collegeAboutInfo'];
        $_SESSION['artscienceName'] = $arts[0]['collegeName'];
        $_SESSION['artscienceDean'] = $arts[0]['collegeDean'];
        $_SESSION['artsciencePhoneNumber'] = $arts[0]['collegePhoneNumber'];
        $_SESSION['artscienceEmail'] = $arts[0]['collegeEmail'];
    }else {
        $response = array('msg'=>'Error!');
    }
    $college3->select()->from('colleges')->where('collegeNo', 3)->execute();
    if (($college3->affected_rows) > 0) {
         $cba = $college3->select()->from('colleges')->where('collegeNo', 3)->fetch();
         $_SESSION['cbaAboutInfo'] = $cba[0]['collegeAboutInfo'];
         $_SESSION['cbaName'] = $cba[0]['collegeName'];
         $_SESSION['cbaDean'] = $cba[0]['collegeDean'];
         $_SESSION['cbaPhoneNumber'] = $cba[0]['collegePhoneNumber'];
         $_SESSION['cbaEmail'] = $cba[0]['collegeEmail'];
    }else {
         $response = array('msg'=>'Error!');
    }
    $college4->select()->from('colleges')->where('collegeNo', 4)->execute();
    if (($college4->affected_rows) > 0) {
         $ccs = $college4->select()->from('colleges')->where('collegeNo', 4)->fetch();
         $_SESSION['ccsAboutInfo'] = $ccs[0]['collegeAboutInfo'];
         $_SESSION['ccsName'] = $ccs[0]['collegeName'];
         $_SESSION['ccsDean'] = $ccs[0]['collegeDean'];
         $_SESSION['ccsPhoneNumber'] = $ccs[0]['collegePhoneNumber'];
         $_SESSION['ccsEmail'] = $ccs[0]['collegeEmail'];
    }else {
         $response = array('msg'=>'Error!');
    }
    $college5->select()->from('colleges')->where('collegeNo', 5)->execute();
    if (($college5->affected_rows) > 0) {
         $education = $college5->select()->from('colleges')->where('collegeNo', 5)->fetch();
         $_SESSION['educationAboutInfo'] = $education[0]['collegeAboutInfo'];
         $_SESSION['educationName'] = $education[0]['collegeName'];
         $_SESSION['educationDean'] = $education[0]['collegeDean'];
         $_SESSION['educationPhoneNumber'] = $education[0]['collegePhoneNumber'];
         $_SESSION['educationEmail'] = $education[0]['collegeEmail'];
    }else {
         $response = array('msg'=>'Error!');
    }
    $college6->select()->from('colleges')->where('collegeNo', 6)->execute();
    if (($college6->affected_rows) > 0) {
         $engineering = $college6->select()->from('colleges')->where('collegeNo', 6)->fetch();
         $_SESSION['engineeringAboutInfo'] = $engineering[0]['collegeAboutInfo'];
         $_SESSION['engineeringName'] = $engineering[0]['collegeName'];
         $_SESSION['engineeringDean'] = $engineering[0]['collegeDean'];
         $_SESSION['engineeringPhoneNumber'] = $engineering[0]['collegePhoneNumber'];
         $_SESSION['engineeringEmail'] = $engineering[0]['collegeEmail'];
    }else {
         $response = array('msg'=>'Error!');
    }
    $college7->select()->from('colleges')->where('collegeNo', 7)->execute();
    if (($college7->affected_rows) > 0) {
         $masscom = $college7->select()->from('colleges')->where('collegeNo', 7)->fetch();
         $_SESSION['masscomAboutInfo'] = $masscom[0]['collegeAboutInfo'];
         $_SESSION['masscomName'] = $masscom[0]['collegeName'];
         $_SESSION['masscomDean'] = $masscom[0]['collegeDean'];
         $_SESSION['masscomPhoneNumber'] = $masscom[0]['collegePhoneNumber'];
         $_SESSION['masscomEmail'] = $masscom[0]['collegeEmail'];
    }else {
         $response = array('msg'=>'Error!');
    }
    $college8->select()->from('colleges')->where('collegeNo', 8)->execute();
    if (($college8->affected_rows) > 0) {
         $nursing = $college8->select()->from('colleges')->where('collegeNo', 8)->fetch();
         $_SESSION['nursingAboutInfo'] = $nursing[0]['collegeAboutInfo'];
         $_SESSION['nurisngName'] = $nursing[0]['collegeName'];
         $_SESSION['nursingDean'] = $nursing[0]['collegeDean'];
         $_SESSION['nursingPhoneNumber'] = $nursing[0]['collegePhoneNumber'];
         $_SESSION['nursingEmail'] = $nursing[0]['collegeEmail'];
    }else {
         $response = array('msg'=>'Error!');
    }
    $college9->select()->from('colleges')->where('collegeNo', 9)->execute();
    if (($college9->affected_rows) > 0) {
         $copva = $college9->select()->from('colleges')->where('collegeNo', 9)->fetch();
         $_SESSION['copvaAboutInfo'] = $copva[0]['collegeAboutInfo'];
         $_SESSION['copvaName'] = $copva[0]['collegeName'];
         $_SESSION['copvaDean'] = $copva[0]['collegeDean'];
         $_SESSION['copvaPhoneNumber'] = $copva[0]['collegePhoneNumber'];
         $_SESSION['copvaEmail'] = $copva[0]['collegeEmail'];
    }else {
         $response = array('msg'=>'Error!');
    }
    $college10->select()->from('colleges')->where('collegeNo', 10)->execute();
    if (($college10->affected_rows) > 0) {
         $divinity = $college10->select()->from('colleges')->where('collegeNo', 10)->fetch();
         $_SESSION['divinityAboutInfo'] = $divinity[0]['collegeAboutInfo'];
         $_SESSION['divinityName'] = $divinity[0]['collegeName'];
         $_SESSION['divinityDean'] = $divinity[0]['collegeDean'];
         $_SESSION['divinityPhoneNumber'] = $divinity[0]['collegePhoneNumber'];
         $_SESSION['divinityEmail'] = $divinity[0]['collegeEmail'];
    }else {
         $response = array('msg'=>'Error!');
    }
    $college11->select()->from('colleges')->where('collegeNo', 11)->execute();
    if (($college11->affected_rows) > 0) {
         $laboratory = $college11->select()->from('colleges')->where('collegeNo', 11)->fetch();
         $_SESSION['laboratoryAboutInfo'] = $laboratory[0]['collegeAboutInfo'];
         $_SESSION['laboratoryName'] = $laboratory[0]['collegeName'];
         $_SESSION['laboratoryDean'] = $laboratory[0]['collegeDean'];
         $_SESSION['laboratoryPhoneNumber'] = $laboratory[0]['collegePhoneNumber'];
         $_SESSION['laboratoryEmail'] = $laboratory[0]['collegeEmail'];
    }else {
         $response = array('msg'=>'Error!');
    }
    $college12->select()->from('colleges')->where('collegeNo', 12)->execute();
    if (($college12->affected_rows) > 0) {
         $rehabilitative = $college12->select()->from('colleges')->where('collegeNo', 12)->fetch();
         $_SESSION['rehabilitativeAboutInfo'] = $rehabilitative[0]['collegeAboutInfo'];
         $_SESSION['rehabilitativeName'] = $rehabilitative[0]['collegeName'];
         $_SESSION['rehabilitativeDean'] = $rehabilitative[0]['collegeDean'];
         $_SESSION['rehabilitativePhoneNumber'] = $rehabilitative[0]['collegePhoneNumber'];
         $_SESSION['rehabilitativeEmail'] = $rehabilitative[0]['collegeEmail'];
    }else {
         $response = array('msg'=>'Error!');
    }
    $college13->select()->from('colleges')->where('collegeNo', 13)->execute();
    if (($college13->affected_rows) > 0) {
         $spag = $college13->select()->from('colleges')->where('collegeNo', 13)->fetch();
         $_SESSION['spagAboutInfo'] = $spag[0]['collegeAboutInfo'];
         $_SESSION['spagName'] = $spag[0]['collegeName'];
         $_SESSION['spagDean'] = $spag[0]['collegeDean'];
         $_SESSION['spagPhoneNumber'] = $spag[0]['collegePhoneNumber'];
         $_SESSION['spagEmail'] = $spag[0]['collegeEmail'];
    }else {
         $response = array('msg'=>'Error!');
    }
?>
