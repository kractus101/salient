<?php 

use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception; 

require 'composer/vendor/autoload.php'; 

$mail = new PHPMailer(true); 

try { 	
    
    $mail->SMTPDebug = 1;									 
     $mail->IsSMTP();								 
   # $mail->isMail();	

	$mail->Host	 = 'smtp.gmail.com;';					 
	$mail->SMTPAuth = true;							 
	$mail->Username = 'username';				 
	$mail->Password = 'password';						 
	$mail->SMTPSecure = 'tls';							 
	$mail->Port	 = 587; 

	$mail->setFrom('sender@gfg.com', 'name');		 
	$mail->addAddress('receiver2@gfg.com', 'Name'); 
	
	$mail->isHTML(true);								 
	$mail->Subject = 'Subject'; 
	$mail->Body = 'Hey there <b>bitch</b> '; 
	$mail->AltBody = 'Body in plain text for non-HTML mail clients'; 
	$mail->send(); 
	echo "Mail has been sent successfully!"; 
} catch (Exception $e) { 
	echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}"; 
} 

?> 
