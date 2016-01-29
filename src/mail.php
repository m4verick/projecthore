<?php

//Load PHPMailer dependencies
require_once '../lib/PHPMailerAutoload.php';
require_once '../lib/class.phpmailer.php';
require_once '../lib/class.smtp.php';

/* CONFIGURATION */
$crendentials = array(
    'email'     => 'frederik.sabandar@gmail.com',    //Your GMail adress
    'password'  => 'fr3d3r1ks4b4nd@r'               //Your GMail password
    );

/* SPECIFIC TO GMAIL SMTP */
$smtp = array(

'host' => 'smtp.gmail.com',
'port' => 587,
'username' => $crendentials['email'],
'password' => $crendentials['password'],
'secure' => 'tls' //SSL or TLS

);

/* TO, SUBJECT, CONTENT */
$to         = 'raymond.sabandar@gameloft.com'; //The 'To' field
$subject    = 'This is a test email sent with PHPMailer';
$content    = 'This is the HTML message body <b>in bold!</b>';



$mailer = new PHPMailer();

//SMTP Configuration
$mailer->isSMTP();
$mailer->SMTPAuth   = true; //We need to authenticate
$mailer->Host       = $smtp['host'];
$mailer->Port       = $smtp['port'];
$mailer->Username   = $smtp['username'];
$mailer->Password   = $smtp['password'];
$mailer->SMTPSecure = $smtp['secure']; 

//Now, send mail :
//From - To :
$mailer->From       = $crendentials['email'];
$mailer->FromName   = 'Your Name'; //Optional
$mailer->addAddress($to);  // Add a recipient

//Subject - Body :
$mailer->Subject        = $subject;
$mailer->Body           = $content;
$mailer->isHTML(true); //Mail body contains HTML tags

//Check if mail is sent :
if(!$mailer->send()) {
    echo 'Error sending mail : ' . $mailer->ErrorInfo;
} else {
    echo 'Message sent !';
}

?>