<?php
// Check for empty fields
if(empty($_POST['email'])||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "Вы не ввели email, или email не валиден";
	return false;
   }
	

$email_address = $_POST['email'];

	
// Create the email and send the message
$to = 'dimaivanov1@mail.ru'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Website Contact Form:  $email_address";
$email_body = $email_address;

$headers .= "Reply-To: $email_address";	
$message = $email_address.PHP_EOL;
file_put_contents("email.txt",$message, FILE_APPEND);
 
 
return true;			
?>