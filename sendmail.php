<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';


if (isset($_POST['contact_send'])) {
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['msg'];
    $name = $_POST['name'];

    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp-relay.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'info@sagartech.co.in';
        $mail->Password = 'arzsumqvxpkalxlj'; // Use the actual email account password
        $mail->SMTPSecure = 'tls'; // Enable TLS encryption, [ICODE]ssl[/ICODE] also accepted
        $mail->Port = 587; // TCP port to connect to
        // Sender info
        $mail->setFrom('info@sagartech.co.in', 'Sagar Tech');
        // $mail->addAddress('info@sagartech.co.in');
        $mail->addAddress('neverlossme275@gmail.com');

        // Content
        $mail->isHTML(true);
        $mail->Subject = "Enquiry from " . $name;

        $mail->Body = "Client Name: $name<br>Email: $email<br>Phone: $phone<br>Message: $message";

        $mail->send();

        // API CALL to WordPress after successful email
        $postData = [
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'message' => $message
        ];

        $ch = curl_init('https://sagartech.co.in/blogs/wp-json/contact-form/v1/submit');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json'
        ]);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postData));

        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        // Optional: log or handle the response
        if ($httpCode == 200 || $httpCode == 201) {
            echo '1'; // success
        } else {
            echo '0'; // or handle failure
        }
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
} else if (isset($_POST['quote_submit'])) {
    // $service = $_POST['service'];
    // $fname = $_POST['fname'];
    // $mobile = $_POST['mobile'];
    // $addwords = $_POST['addwords'];
    // $emails = $_POST['email1'];

    // Validation
    $errors = array();
    $required_fields = array('name', 'email', 'service', 'phone');

    foreach ($required_fields as $field) {
        if (empty($_POST[$field])) {
            $errors[] = "$field is required.";
        }
    }

    if (!empty($errors)) {
        // Output errors
        foreach ($errors as $error) {
            // echo $error . "<br>";
            echo 0;
        }
        exit; // Stop further execution
    }

    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $service = $_POST['service'];
    $message = $_POST['msg'];
    $name = $_POST['name'];

    $mail = new PHPMailer(true);

    try {
        // // Server settings
        // $mail->isSMTP();
        // $mail->Host = 'mail.sagartech.co.in';
        // $mail->SMTPAuth = true;
        // $mail->Username = '_mainaccount@sagartech.co.in';
        // $mail->Password = '!2I1w4Y5qP(nZz'; // Use the actual email account password
        // $mail->SMTPSecure = 'ssl';
        // $mail->Port = 465;

        // // Sender info
        // $mail->setFrom('info@sagartech.co.in', 'Sagar Tech');
        // $mail->addAddress('info@sagartech.co.in');

        // // Content
        // $mail->isHTML(true);
        // $mail->Subject = "Quote Requested for" . $service;

        // $mail->Body = "Client Name: $fname<br>Email: $emails<br>Phone: $mobile<br>Additional words: $addwords";

        // $mail->send();
        // echo '1';

        // Server settings
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
        // $mail->addAddress('patiladiti240@gmail.com');

        // Content
        $mail->isHTML(true);
        $mail->Subject = "Quote from " . $name;

        $mail->Body = "Client Name: $name<br>Email: $email<br>Phone: $phone<br>Service: $service<br>Message: $message";

        // $mail->send();
        // echo '1';
        if (!$mail->send()) {
            echo "0";
        } else {
            echo "1";
        }
    } catch (Exception $e) {
        echo '0';
    }
}
?>