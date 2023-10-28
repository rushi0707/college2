<?php

$name=$_POST['Name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$text=$_POST['text'];

$email_from= 'rushi.nit0707@gmail.com';
$email_subject='New submission';
$email_body= "user name: $name . \n".
             "user email: $email . \n".
             "subject: $subject . \n".
             "user message: $text .\n ";
             /*we use . for concatination of string in php*/

$to= 'rushinit07@gmail.com';

$headers="From: $email_from \r\n";
$headers .="Reply to: $email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");
?>