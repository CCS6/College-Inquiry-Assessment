<?php
include '../config.php';
   $db->select()->from('college')->where('collegeID',1)->execute();
   session_start();
   if (($db->affected_rows) > 0) {
        $agri = $db->select()->from('college')->where('collegeID', 1)->fetch();
        $_SESSION['agricultureAboutInfo'] = $agri[0]['collegeAboutInfo'];
        $_SESSION['agricultureName'] = $agri[0]['collegeName'];
        $_SESSION['agricultureDean'] = $agri[0]['collegeDean'];
        $_SESSION['agriculturePhoneNumber'] = $agri[0]['collegePhoneNumber'];
        $_SESSION['agricultureEmail'] = $agri[0]['collegeEmail'];
    }else{
        $response = array('msg'=>'Error!');
    }
    $db->select()->from('college')->where('collegeID', 2)->execute();
    if (($db->affected_rows) > 0) {
        $arts = $db->select()->from('college')->where('collegeID', 2)->fetch();
        $_SESSION['artscienceAboutInfo'] = $arts[0]['collegeAboutInfo'];
        $_SESSION['artscienceName'] = $arts[0]['collegeName'];
        $_SESSION['artscienceDean'] = $arts[0]['collegeDean'];
        $_SESSION['artsciencePhoneNumber'] = $arts[0]['collegePhoneNumber'];
        $_SESSION['artscienceEmail'] = $arts[0]['collegeEmail'];
    }else {
        $response = array('msg'=>'Error!');
    }
    $db->select()->from('college')->where('collegeID', 3)->execute();
    if (($db->affected_rows) > 0) {
         $cba = $db->select()->from('college')->where('collegeID', 3)->fetch();
         $_SESSION['cbaAboutInfo'] = $cba[0]['collegeAboutInfo'];
         $_SESSION['cbaName'] = $cba[0]['collegeName'];
         $_SESSION['cbaDean'] = $cba[0]['collegeDean'];
         $_SESSION['cbaPhoneNumber'] = $cba[0]['collegePhoneNumber'];
         $_SESSION['cbaEmail'] = $cba[0]['collegeEmail'];
    }else {
         $response = array('msg'=>'Error!');
    }
    $db->select()->from('college')->where('collegeID', 4)->execute();
    if (($db->affected_rows) > 0) {
         $ccs = $db->select()->from('college')->where('collegeID', 4)->fetch();
         $_SESSION['ccsAboutInfo'] = $ccs[0]['collegeAboutInfo'];
         $_SESSION['ccsName'] = $ccs[0]['collegeName'];
         $_SESSION['ccsDean'] = $ccs[0]['collegeDean'];
         $_SESSION['ccsPhoneNumber'] = $ccs[0]['collegePhoneNumber'];
         $_SESSION['ccsEmail'] = $ccs[0]['collegeEmail'];
    }else {
         $response = array('msg'=>'Error!');
    }
    $db->select()->from('college')->where('collegeID', 5)->execute();
    if (($db->affected_rows) > 0) {
         $education = $db->select()->from('college')->where('collegeID', 5)->fetch();
         $_SESSION['educationAboutInfo'] = $education[0]['collegeAboutInfo'];
         $_SESSION['educationName'] = $education[0]['collegeName'];
         $_SESSION['educationDean'] = $education[0]['collegeDean'];
         $_SESSION['educationPhoneNumber'] = $education[0]['collegePhoneNumber'];
         $_SESSION['educationEmail'] = $education[0]['collegeEmail'];
    }else {
         $response = array('msg'=>'Error!');
    }
    $db->select()->from('college')->where('collegeID', 6)->execute();
    if (($db->affected_rows) > 0) {
         $engineering = $db->select()->from('college')->where('collegeID', 6)->fetch();
         $_SESSION['engineeringAboutInfo'] = $engineering[0]['collegeAboutInfo'];
         $_SESSION['engineeringName'] = $engineering[0]['collegeName'];
         $_SESSION['engineeringDean'] = $engineering[0]['collegeDean'];
         $_SESSION['engineeringPhoneNumber'] = $engineering[0]['collegePhoneNumber'];
         $_SESSION['engineeringEmail'] = $engineering[0]['collegeEmail'];
    }else {
         $response = array('msg'=>'Error!');
    }
    $db->select()->from('college')->where('collegeID', 7)->execute();
    if (($db->affected_rows) > 0) {
         $masscom = $db->select()->from('college')->where('collegeID', 7)->fetch();
         $_SESSION['masscomAboutInfo'] = $masscom[0]['collegeAboutInfo'];
         $_SESSION['masscomName'] = $masscom[0]['collegeName'];
         $_SESSION['masscomDean'] = $masscom[0]['collegeDean'];
         $_SESSION['masscomPhoneNumber'] = $masscom[0]['collegePhoneNumber'];
         $_SESSION['masscomEmail'] = $masscom[0]['collegeEmail'];
    }else {
         $response = array('msg'=>'Error!');
    }
    $db->select()->from('college')->where('collegeID', 8)->execute();
    if (($db->affected_rows) > 0) {
         $nursing = $db->select()->from('college')->where('collegeID', 8)->fetch();
         $_SESSION['nursingAboutInfo'] = $nursing[0]['collegeAboutInfo'];
         $_SESSION['nurisngName'] = $nursing[0]['collegeName'];
         $_SESSION['nursingDean'] = $nursing[0]['collegeDean'];
         $_SESSION['nursingPhoneNumber'] = $nursing[0]['collegePhoneNumber'];
         $_SESSION['nursingEmail'] = $nursing[0]['collegeEmail'];
    }else {
         $response = array('msg'=>'Error!');
    }
    $db->select()->from('college')->where('collegeID', 9)->execute();
    if (($db->affected_rows) > 0) {
         $copva = $db->select()->from('college')->where('collegeID', 9)->fetch();
         $_SESSION['copvaAboutInfo'] = $copva[0]['collegeAboutInfo'];
         $_SESSION['copvaName'] = $copva[0]['collegeName'];
         $_SESSION['copvaDean'] = $copva[0]['collegeDean'];
         $_SESSION['copvaPhoneNumber'] = $copva[0]['collegePhoneNumber'];
         $_SESSION['copvaEmail'] = $copva[0]['collegeEmail'];
    }else {
         $response = array('msg'=>'Error!');
    }
    $db->select()->from('college')->where('collegeID', 10)->execute();
    if (($db->affected_rows) > 0) {
         $divinity = $db->select()->from('college')->where('collegeID', 10)->fetch();
         $_SESSION['divinityAboutInfo'] = $divinity[0]['collegeAboutInfo'];
         $_SESSION['divinityName'] = $divinity[0]['collegeName'];
         $_SESSION['divinityDean'] = $divinity[0]['collegeDean'];
         $_SESSION['divinityPhoneNumber'] = $divinity[0]['collegePhoneNumber'];
         $_SESSION['divinityEmail'] = $divinity[0]['collegeEmail'];
    }else {
         $response = array('msg'=>'Error!');
    }
    $db->select()->from('college')->where('collegeID', 11)->execute();
    if (($db->affected_rows) > 0) {
         $laboratory = $db->select()->from('college')->where('collegeID', 11)->fetch();
         $_SESSION['laboratoryAboutInfo'] = $laboratory[0]['collegeAboutInfo'];
         $_SESSION['laboratoryName'] = $laboratory[0]['collegeName'];
         $_SESSION['laboratoryDean'] = $laboratory[0]['collegeDean'];
         $_SESSION['laboratoryPhoneNumber'] = $laboratory[0]['collegePhoneNumber'];
         $_SESSION['laboratoryEmail'] = $laboratory[0]['collegeEmail'];
    }else {
         $response = array('msg'=>'Error!');
    }
    $db->select()->from('college')->where('collegeID', 12)->execute();
    if (($db->affected_rows) > 0) {
         $rehabilitative = $db->select()->from('college')->where('collegeID', 12)->fetch();
         $_SESSION['rehabilitativeAboutInfo'] = $rehabilitative[0]['collegeAboutInfo'];
         $_SESSION['rehabilitativeName'] = $rehabilitative[0]['collegeName'];
         $_SESSION['rehabilitativeDean'] = $rehabilitative[0]['collegeDean'];
         $_SESSION['rehabilitativePhoneNumber'] = $rehabilitative[0]['collegePhoneNumber'];
         $_SESSION['rehabilitativeEmail'] = $rehabilitative[0]['collegeEmail'];
    }else {
         $response = array('msg'=>'Error!');
    }
    $db->select()->from('college')->where('collegeID', 13)->execute();
    if (($db->affected_rows) > 0) {
         $spag = $db->select()->from('college')->where('collegeID', 13)->fetch();
         $_SESSION['spagAboutInfo'] = $spag[0]['collegeAboutInfo'];
         $_SESSION['spagName'] = $spag[0]['collegeName'];
         $_SESSION['spagDean'] = $spag[0]['collegeDean'];
         $_SESSION['spagPhoneNumber'] = $spag[0]['collegePhoneNumber'];
         $_SESSION['spagEmail'] = $spag[0]['collegeEmail'];
    }else {
         $response = array('msg'=>'Error!');
    }
?>
