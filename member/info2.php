<?php



// Your email address

$email = "you@example.com";



// The subject

$subject = "Enter your subject here";



// The message

$message = "Enter your message here";



mail($email, $subject, $message, "From: $email");



echo "The email has been sent.";



?>
