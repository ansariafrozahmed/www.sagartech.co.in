<?php
/*
// Load PHPMailer Autoloader
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';
require 'phpmailer/src/Exception.php';

//Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
        $mail->Host = 'smtp-relay.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'info@sagartech.co.in';
        $mail->Password = 'arzsumqvxpkalxlj'; // Use the actual email account password
        $mail->SMTPSecure = 'tls'; // Enable TLS encryption, [ICODE]ssl[/ICODE] also accepted
        $mail->Port = 587; // TCP port to connect to
        // Sender info
        $mail->setFrom('info@sagartech.co.in', 'Sagar Tech');
        // $mail->addAddress('info@sagartech.co.in');

    $mail->addAddress('patiladiti240@gmail.com', 'Sagar Tech'); //Add a recipient

    //Content
    $mail->isHTML(true);                                        //Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = '<b>This is the HTML message body in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
*/
