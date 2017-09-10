<?php

function die_r($value){
    echo '<pre>';
    print_r($value);
    echo '</pre>';
}

require_once 'Database.php';

$db = new Database();

$getRow = $db->getRow("SELECT * FROM users WHERE username = ?", ["admin"]);
//$getRows = $db->getRows("SELECT * FROM users");
//$insertRow = $db->insertRow("INSERT INTO users(username, password, email) VALUE(?, ?, ?)", ["Arthur", "102030", "arthur@localhost"]);
//$updateRow = $db->updateRow("UPDATE users SET username = ?, password = ? WHERE id = ?", ["ArthurMann", "a123456", "7"]);
//$deleteRow = $db->deleteRow("DELETE FROM users WHERE id = ?", [8]);

die_r($getRow);
$db->Disconnect();
