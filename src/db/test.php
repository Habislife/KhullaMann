<?php 
include 'connection.php';
include 'mail.php';
$email="devkotahancy@gmail.com";
$subject="Forget Password";
$from = 'noreply@gmail.com';
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
// Create email headers
$row="1";
$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
$message = "<html><body bgcolor='#48B5B1'>";
$message.="<p>Hi,</p>";
$message.="<p>Reset your password</p>";
$message.="<p>To change your KhullaMann password, click the link below.</p>";
$message.="<p><a href='http://localhost/khullamann/resetpassword.php?value_key=".$row."'>Reset my password</a></p>";
$message.="<p>This link will expire in 24 hours, so be sure to use it right away.</p>";
$message.="<p> Thank you for using KhullaMann!</p>";
$message.="<p> The KhullaMann Team</p>";
$message .= '</body></html>';
$mail= new Mail($email,$subject,$message,$headers);