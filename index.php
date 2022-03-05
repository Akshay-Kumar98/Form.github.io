<?php

$name = $_POST['fname'];

$last = $_POST['lname'];

$email = $_POST['smail'];


$phone = $_POST['phone'];

$sub = $_POST['subject'];

$message = $_POST['query'];

$subject = " Test Query For Website";

$content = "From: $name $lname \n Email: $email \n phone: $phone \n subject: $sub \n Message: $message ";

$recipient = "theakshaykumar98@gmail.com";

$mailheader = "From: $email \r\n";


mail( $recipient , $subject , $content, $mailheader) or die("Error!");

header("Location: Thanks.html");












































?>
