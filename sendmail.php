<?php

ob_start();
error_reporting(0);
header('Content-Type: text/plain');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


// require 'vendor/autoload.php'; // if using Composer
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
        // SMTP config
        // $mail->isSMTP();
        // $mail->Host = 'smtp-relay.gmail.com';
        // $mail->SMTPAuth = true;
        // // $mail->Username = 'info@sagartech.co.in';
        // // $mail->Password = 'arzsumqvxpkalxlj'; // secure this
        // $mail->Username   = 'info.team.website@gmail.com'; // sender email
        // $mail->Password   = 'erwhdirhqftlvnbf';     // app password
        // $mail->SMTPSecure = 'tls';
        // $mail->Port = 587;

        // // Mail content
        // $mail->setFrom('info@sagartech.co.in', 'Sagar Tech');
        // // $mail->addAddress('info@sagartech.co.in');
        // $mail->addAddress('danishshaikh.st@gmail.com');
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'info.team.website@gmail.com';
        $mail->Password   = 'erwhdirhqftlvnbf';
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        $mail->setFrom('info.team.website@gmail.com', 'Sagar Tech');
        $mail->addAddress('danishshaikh.st@gmail.com');
        // $mail->addAddress('info@sagartech.co.in');
        $mail->isHTML(true);
        $mail->Subject = "Enquiry from $name";
        $mail->Body = '
            <div style="font-family: Arial, sans-serif; max-width: 600px; margin: auto; border: 1px solid #e0e0e0; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 12px rgba(0,0,0,0.05);">
            <div style="background-color: #0d6efd; color: white; padding: 20px 30px; text-align: center;">
                <h2 style="margin: 0; font-size: 24px;">New Enquiry Received</h2>
            </div>
            <div style="padding: 30px; background-color: #ffffff;">
                <table style="width: 100%; font-size: 16px;">
                <tr>
                    <td style="padding: 10px 0; font-weight: bold;">Client Name:</td>
                    <td style="padding: 10px 0;">' . htmlspecialchars($name) . '</td>
                </tr>
                <tr>
                    <td style="padding: 10px 0; font-weight: bold;">Email:</td>
                    <td style="padding: 10px 0;">' . htmlspecialchars($email) . '</td>
                </tr>
                <tr>
                    <td style="padding: 10px 0; font-weight: bold;">Phone:</td>
                    <td style="padding: 10px 0;">' . htmlspecialchars($phone) . '</td>
                </tr>
                <tr>
                    <td style="padding: 10px 0; font-weight: bold;">Message:</td>
                    <td style="padding: 10px 0;">' . nl2br(htmlspecialchars($message)) . '</td>
                </tr>
                </table>
            </div>
            <div style="background-color: #f8f9fa; padding: 15px 30px; text-align: center; font-size: 14px; color: #888;">
                © ' . date("Y") . ' Sagar Tech. All rights reserved.
            </div>
            </div>';


        // $mail->send();

        // Send data to WordPress API
        $postData = [
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'message' => $message
        ];

        $ch = curl_init('https://sagartech.co.in/blogs/wp-json/contact-form/v1/submit');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postData));

        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        if ($mail->send()) {
            echo "1";
        } else {
            echo "Mailer Error: " . $mail->ErrorInfo;
        }
    } catch (Exception $e) {
        echo "Exception Error: " . $mail->ErrorInfo;
    }

    ob_end_clean(); // clean up extra output


} else if (isset($_POST['quote_submit'])) {

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

        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'info.team.website@gmail.com';
        $mail->Password   = 'erwhdirhqftlvnbf';
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        $mail->setFrom('info.team.website@gmail.com', 'Sagar Tech');
        // $mail->addAddress('danishshaikh.st@gmail.com');


        // $mail->setFrom('info@sagartech.co.in', 'Sagar Tech');
        $mail->addAddress('info@sagartech.co.in');

        $mail->isHTML(true);
        $mail->Subject = "Quote from " . $name;
        $mail->Body = '
            <div style="font-family: Arial, sans-serif; max-width: 600px; margin: auto; border: 1px solid #e0e0e0; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 12px rgba(0,0,0,0.05);">
            <div style="background-color: #0d6efd; color: white; padding: 20px 30px; text-align: center;">
                <h2 style="margin: 0; font-size: 24px;">New Quote Request</h2>
            </div>
            <div style="padding: 30px; background-color: #ffffff;">
                <table style="width: 100%; font-size: 16px;">
                <tr>
                    <td style="padding: 10px 0; font-weight: bold;">Client Name:</td>
                    <td style="padding: 10px 0;">' . htmlspecialchars($name) . '</td>
                </tr>
                <tr>
                    <td style="padding: 10px 0; font-weight: bold;">Email:</td>
                    <td style="padding: 10px 0;">' . htmlspecialchars($email) . '</td>
                </tr>
                <tr>
                    <td style="padding: 10px 0; font-weight: bold;">Phone:</td>
                    <td style="padding: 10px 0;">' . htmlspecialchars($phone) . '</td>
                </tr>
                <tr>
                    <td style="padding: 10px 0; font-weight: bold;">Service:</td>
                    <td style="padding: 10px 0;">' . htmlspecialchars($service) . '</td>
                </tr>
                <tr>
                    <td style="padding: 10px 0; font-weight: bold;">Message:</td>
                    <td style="padding: 10px 0;">' . nl2br(htmlspecialchars($message)) . '</td>
                </tr>
                </table>
            </div>
            <div style="background-color: #f8f9fa; padding: 15px 30px; text-align: center; font-size: 14px; color: #888;">
                © ' . date("Y") . ' Sagar Tech. All rights reserved.
            </div>
            </div>';


        if ($mail->send()) {
            echo "1";
        } else {
            echo "Mailer Error: " . $mail->ErrorInfo;
        }
    } catch (Exception $e) {
        echo "Exception Error: " . $mail->ErrorInfo;
    }
}
