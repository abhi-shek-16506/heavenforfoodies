<?php
mail($to_email_address,$subject,$message,[$headers],[$parameters]);
{
$to_email_address=$to_email;
$subject=$subject;
$message=$message;
$headers=$headers;
} 
?>
<?php     
$to_email ='abhishek16506@gmail.com';
$subject = 'Testing PHP Mail';
$message = 'This mail is sent using the PHP mail function';
$headers = 'From: abhishek16506@gmail.com';
mail($to_email,$subject,$message,$headers);
?>