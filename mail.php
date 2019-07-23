<?php     
$to_email = 'slg12sapana@gmail.com';
$subject = 'Testing PHP Mail';
$message = 'Your account has been hacked.
For detailed information call:9816615660';
$headers = 'From: noreply@gmail.com';
mail($to_email,$subject,$message,$headers);
?>