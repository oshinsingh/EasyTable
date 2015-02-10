<?php

function Send_Mail($to,$subject,$body)
{

//echo "salsa";
require 'PHPMailer/class.smtp.php';
require 'PHPMailer/class.phpmailer.php';
	
$from       = "easytable123@gmail.com";

$mail       = new PHPMailer();
$mail->IsSMTP(true);            // use SMTP
$mail->IsHTML(true);
$mail->SMTPAuth   = true; 
$mail->Mailer = 'smtp';                 // enable SMTP authentication
$mail->SMTPSecure = 'ssl';
$mail->Host       = 'smtp.gmail.com'; // SMTP host
//$mail->SMTPDebug = 1;
$mail->Port       =  465;                    // set the SMTP port
$mail->Username   = 'easytable123@gmail.com';  // SMTP  username
$mail->Password   = 'designcentre';  // SMTP password
$mail->ClearReplyTos();
$mail->AddReplyTo($from,'Easy Table');
$mail->SetFrom($from, 'Easy Table');

$mail->Subject    = $subject;//$message[, $additional_headers[, $additional_parameters]]
$mail->MsgHTML($body);
$address = $to;
$mail->AddAddress($address, $to);
echo "sdf";
if(!$mail->Send()) {
		$error = 'Mail error: '.$mail->ErrorInfo;
		echo $error; 
		return false;
	} else {
		echo "Message sent!";
		return true;
	}

}

?>
