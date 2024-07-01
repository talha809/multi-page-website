<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$email_from = 'info@Talhadev809.com';

$email_form = 'New Form Submission';

$email_body = "User Name: $name.\n".
              "User email: $visitor_email.\n".
              "User subject: subject.\n".
              "User message: message .\n";

$to = 'Talhaamin809@gmail.com';
    
$headers = "From: $email_from \r\n";    

$headers . ="Reply_To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("location: contact.html");
?>