<?php     
class Mail
{
public $to_email;
public $subject;
public $message;
public $headers = 'From: noreply @ gmail . com';
public function __construct($to_email,$subject,$message)
{ 

mail($to_email,$subject,$message,$this->headers);
 } 

}
?>