<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'shakil15-1759@diu.edu.bd';

$email_subject = 'New Form Submission';
$mail_body = "User Name: $name.\n".
             "User Email: $visitor_email.\n". 
             "Subject: $subject.\n". 
             "User Message: $message.\n";

$to = 'khshakil.ahamed18@gmail.com';
$header = "Form: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";




mail($to, $email_subject, $mail_body, $header);

header("Location: contact.html");


?>