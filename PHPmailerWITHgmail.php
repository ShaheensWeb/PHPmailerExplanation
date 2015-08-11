<?php
/*
Name: Sean Ghazazani
http://shaheensweb.me
August 10th, 2015
PHP Mailer example with GMAIL as sender

This is an example of an automated interview request, consider it a near naked template to start from
*/
include_once('class.phpmailer.php'); 
$mail = new PHPMailer();
$mail->Host = 'smtp.gmail.com';  // default gmail SMTP server
$mail->SMTPAuth = false;                               
$mail->Username = '@gmail.com'; // Here is your gmail
$mail->Password = '';           // Your gmail pass goes here
$mail->SMTPSecure = 'tls';                          
$mail->Port = 465;              // Default usable gmail port                       

/*The rest is self explanatory, plug this script in a MAMP (if you use mac environment), or Abyss/PHPstorm combination on windows and execute it and watch your log (baretails for windows) for the printed message */
$mail->From = 'recruitment@tekstar.com'; 
$mail->FromName = 'Mailer'; 
$mail->addAddress('shaheenghazazani@gmail.com', 'Shaheen Ghazazani');     
$mail->addReplyTo('tekstarrecruitment@gmail.com', 'Tekstar');
$mail->addCC('tekstarrecruitment@gmail.com');
$mail->isHTML(true);                                  

$mail->Subject = 'Interview Request';
$mail->Body    = '
<p> Hey Shaheen Id like to request an interview for you to meet with one of our business analysts for a possible internship.</p>
<br/>
<p> Are you available for an interview August 17th, 2015 (Monday) at 10:00am at Carleton University. </p>
';

if(!$mail->send()) {
    print 'Message could not be sent.';
    print 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    print 'Message has been sent';

}

?>