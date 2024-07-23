<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'PHPMailer\PHPMailer.php';
require 'PHPMailer\SMTP.php';
require 'PHPMailer\Exception.php';

//Create an instance; passing `true` enables exceptions
if(isset($_POST["send"])){
    $mail = new PHPMailer(true);
    try {
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'vivek.successive@gmail.com';                     //SMTP username
    $mail->Password   = 'xtzbcymtbglfmaan';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    $mail->setFrom('vivek.successive@gmail.com', 'Mailer');
    $mail->addAddress($_POST["email"]);     //Add a recipient
    
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = ($_POST["subject"]);
    $mail->Body    = ($_POST["name"]) + "<br>" + ($_POST["message"]);

    $mail->send();

    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}
