<?php
/**
 * This example shows sending a message using PHP's mail() function.
 */

require '../../phpmailer/PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;

$mail->IsSMTP();
$mail->Host = "smtp.gmail.com";

// optional
// used only when SMTP requires authentication  
$mail->SMTPAuth = true;
$mail->Username = 'uv.kontinuum@gmail.com';
$mail->Password = 'kontinuum';


//Set who the message is to be sent from
$mail->setFrom('uv.kontinuum@gmail.com', 'Kontinuum Untervermietung');
//Set an alternative reply-to address
$mail->addReplyTo('uv.kontinuum@gmail.com', 'Kontinuum Untervermietung');
//Set who the message is to be sent to
$mail->addAddress('occaso42@gmail.com', 'John Doe');
//Set the subject line
$mail->Subject = 'Kontinnuum mail test';


ob_start(); 
include 'articles_mail.html'; 
$inhalt = ob_get_contents(); 
ob_end_clean(); 

 $mail->IsHTML(true); //Versand im HTML-Format festlegen
$mail->Body=nl2br($inhalt);



//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}




