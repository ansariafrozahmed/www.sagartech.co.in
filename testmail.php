<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

$mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();
        $mail->Host = 'smtp-relay.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'info@sagartech.co.in';
        $mail->Password = 'arzsumqvxpkalxlj'; // Use the actual email account password
        $mail->SMTPSecure = 'tls'; // Enable TLS encryption, [ICODE]ssl[/ICODE] also accepted
        $mail->Port = 587; // TCP port to connect to
        // Sender info
        $mail->setFrom('info@sagartech.co.in', 'Sagar Tech');
        $mail->addAddress('info@sagartech.co.in');

        // Content
        $mail->isHTML(true);
        $mail->Subject = "Enquiry from Sohel";

        $mail->Body = "Test Mail";

        $mail->send();
        echo '1';
    } catch (Exception $e) {
      var_dump($e->getMessage());  
      echo '0';

    }