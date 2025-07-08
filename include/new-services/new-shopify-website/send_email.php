<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';

header('Content-Type: text/plain');

// Collect POST data
$name    = isset($_POST['name']) ? strip_tags(trim($_POST['name'])) : '';
$email    = isset($_POST['email']) ? filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL) : '';
$phone    = isset($_POST['phone']) ? strip_tags(trim($_POST['phone'])) : '';
$plan  = isset($_POST['plan']) ? strip_tags(trim($_POST['plan'])) : '';
// echo $name;
// echo $email;
// echo $phone;

// Basic validation
if (empty($name) || empty($email) || empty($phone) || empty($plan)) {
    echo 'empty';
    exit;
}

// Send mail using PHPMailer
$mail = new PHPMailer(true);

try {
    // Server config
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'info.team.website@gmail.com'; // sender email
    $mail->Password   = 'erwhdirhqftlvnbf';     // app password
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;

    // Mail settings
    $mail->setFrom('info@sagartech.co.in', 'Sagartech Contact Form');
    $mail->addAddress('info@sagartech.co.in'); // recipient (your inbox)

    $mail->isHTML(true);
    $mail->Subject = "New Message from Contact Form: $name";
    $mail->Body = '
    <div style="font-family: Arial, sans-serif; background-color: #f9f9f9; padding: 20px; color: #333; border-radius: 8px; border: 1px solid #ddd; max-width: 600px; margin: auto;">
        <h2 style="color: #2c3e50; font-weight: 600; margin-bottom: 20px;">New Quote Request Details</h2>
        
        <p style="margin: 10px 0;"><strong style="color: #555;">Full Name:</strong> ' . htmlspecialchars($name) . '</p>
        <p style="margin: 10px 0;"><strong style="color: #555;">Email:</strong> ' . htmlspecialchars($email) . '</p>
        <p style="margin: 10px 0;"><strong style="color: #555;">Phone:</strong> ' . htmlspecialchars($phone) . '</p>
        <p style="margin: 10px 0;"><strong style="color: #555;">Selected Plan:</strong><br>' . nl2br(htmlspecialchars($plan)) . '</p>
        
        <hr style="margin: 30px 0; border: none; border-top: 1px solid #eee;">
        <p style="font-size: 13px; color: #888;">This message was generated from the website quote request form.</p>
    </div>';


    $mail->send();
    echo '1';
} catch (Exception $e) {
    echo '0';
}
