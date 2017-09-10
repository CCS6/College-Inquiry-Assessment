<?php
require_once 'Database.php';
$db = new Database();
if (isset($_POST['submit'])) {
   $fullname = $_POST['fullname'];
   $phone = $_POST['phone'];
   $email = $_POST['email'];
   $subject = $_POST['subject'];
   $message = $_POST['message'];

   if (empty($fullname)) {
       echo 'Fullname field is required!';
   } elseif (empty($phone)){
       echo 'Phone number field is required!';
   } elseif (empty($email)){
       echo 'Email address field is required!';
   } elseif (empty($subject)){
       echo 'Subject field is required!';
   } elseif (empty($message)){
       echo 'Message field is required!';
   } else {
       if ($db->insertRow("INSERT INTO contacts(fullname, phone, email, subject, message) VALUES(?, ?, ?, ?, ?)", [$fullname, $phone, $email, $subject, $message]) == TRUE){
           echo 'Your Email Submited!';
       } else {
           echo 'Error!';
       }
   }
}
$result = $db->getRows("SELECT * FROM contacts");
if (!empty($result)) {
   echo '<pre>';
   print_r($result);
   echo '</pre>';
}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Contact Form</title>
</head>

<body>

<form action="" method="post">
   <label>Your name</label>
   <input type="text" name="fullname"><br>
   <label>Phone Number</label>
   <input type="text" name="phone"><br>
   <label>Email Address</label>
   <input type="text" name="email"><br>
   <label>Subject</label>
   <input type="text" name="subject"><br><br>
   <label>Message</label><br>
   <textarea name="message"></textarea><br>
   <input type="submit" name="submit">
</form>

</body>
</html>
