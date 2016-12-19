<?php
// check if fields passed are empty
/*if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['phone']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }*/
	echo " success ";
/*$name = $_POST['name'];
$email_address = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];*/


$headers  = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";
	
// create email body and send it	
$to = "bmoe311@gmail.com"; 
$email_subject = "Website Contact Form:  ";
$email_body = "Hello! You have received a new message from your website contact form.";
$headers = 'From: bmoe@immcoinc.com'; 
$headers .= 'Reply-To: ';	


mail($to,$email_subject,$email_body,$headers);
//return true;	



		
?>