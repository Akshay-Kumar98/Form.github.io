<?php

$name = $_GET['fname'];

$last = $_GET['lname'];

$email = $_GET['smail'];


$phone = $_GET['phone'];

$sub = $_GET['subject'];

$message = $_GET['query'];

$subject = " Test Query For Website";

$content = "From: $name $lname \n Email: $email \n phone: $phone \n subject: $sub \n Message: $message ";

$recipient = "theakshaykumar98@gmail.com";

$mailheader = "From: $email \r\n";


mail( $recipient , $subject , $content, $mailheader) or die("Error!");

header("Location: Thanks.html");












































?>