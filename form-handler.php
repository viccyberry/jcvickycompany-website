<?php 
$first_name = $_POST['first-name'];
$last_name = $_POST['last-name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

$email_from = 'Jcvickycompany.com';

$email_body = "User First-Name: $first_name.\n".
              "User Last-Name: $last_name.\n".
              "User Email: $visitor_email.\n".
              "User Message: $message .\n";

$to = 'jccompanynigeria@yahoo.com';  

$headers = "From: $email_from \r\n";

$headers .= "Replt-To: $visitor_email \r\n";


mail ($to,$email_body,$headers);

header("Location: contact.html");
?>