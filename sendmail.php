<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';


if (isset($_POST['msg_submit'])) {
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['msg'];
    $name = $_POST['name'];

    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'mail.sagartech.co.in';
        $mail->SMTPAuth = true;
        $mail->Username = '_mainaccount@sagartech.co.in';
        $mail->Password = '!2I1w4Y5qP(nZz'; // Use the actual email account password
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        // Sender info
        $mail->setFrom('info@sagartech.co.in', 'Sagar Tech');
        $mail->addAddress('info@sagartech.co.in');

        // Content
        $mail->isHTML(true);
        $mail->Subject = "Enquiry from " . $name;

        $mail->Body = "Client Name: $name<br>Email: $email<br>Phone: $phone<br>Message: $message";

        $mail->send();
        echo '1';
    } catch (Exception $e) {
        echo '0';
    }
    /*  $mail = new PHPMailer();
    $mail->Host = 'mail.sagartech.co.in';
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->Username = 'sender@sagartech.co.in';
    $mail->Password = 'KN3MPPFair=0';
    $mail->SMTPSecure = 'tls'; //TLS
    $mail->Port = 587; //587

    $mail->setFrom($_POST['email'],$_POST['name']);
    $mail->addAddress('info@sagartech.co.in','Sagartech');
    $mail->addReplyTo($_POST['email'],$_POST['name']);
    $mail->Subject = "Enquiry from ".$name;
    $mail->isHTML(true);
    $mail->Body ='<h1>Name:'.$_POST['name'].'<br>Email:'.$_POST['email'].'<br>Phone:'.$_POST['phone'].'<br>Msg:'.$_POST['msg'].'</h1>';
 
    if (!$mail->send()){
       echo "0";
      }
    else
      {
         echo "1";
      }*/
} 
else if (isset($_POST['quote_submit'])) {
    $service = $_POST['service'];
    $fname = $_POST['fname'];
    $mobile = $_POST['mobile'];
    $addwords = $_POST['addwords'];
    $emails = $_POST['email1'];

    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'mail.sagartech.co.in';
        $mail->SMTPAuth = true;
        $mail->Username = '_mainaccount@sagartech.co.in';
        $mail->Password = '!2I1w4Y5qP(nZz'; // Use the actual email account password
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        // Sender info
        $mail->setFrom('info@sagartech.co.in', 'Sagar Tech');
        $mail->addAddress('info@sagartech.co.in');

        // Content
        $mail->isHTML(true);
        $mail->Subject = "Quote Requested for" . $service;

        $mail->Body = "Client Name: $fname<br>Email: $emails<br>Phone: $mobile<br>Additional words: $addwords";

        $mail->send();
        echo '1';
    } catch (Exception $e) {
        echo '0';
    }
}
?>