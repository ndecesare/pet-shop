<?php

$fName = $_POST['firstName'];
$lName = $_POST['lastName'];
$email = $_POST['email'];
$message = $_POST['message'];
 
$to = 'nick.a.decesare@gmail.com';
$subject = 'A New Message from ' . $fName . ' ' . $lName;
$message = $message . " (To reply to this message, email " . $fName . " at " . $email . ".)";
$headers = 'From: ' . $to . "\r\n";

$mailRegex = '/^(\w+[\-\.])*\w+@(\w+\.)+[A-Za-z]+$/';
$nameRegex = '/^(.)/';
 
if (preg_match($mailRegex, $email) && preg_match($nameRegex, $fName) && preg_match($nameRegex, $lName)) {
mail($to, $subject, $message, $headers);
echo "Your email was sent!";

}

?>