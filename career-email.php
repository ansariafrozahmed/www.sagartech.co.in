<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $job_position = $_POST["job_position"];
    $message = $_POST["message"];

    // File Upload Handling
    if (isset($_FILES["resume"]) && $_FILES["resume"]["error"] == 0) {
        $resume_name = $_FILES["resume"]["name"];
    } else {
        $resume_name = "No file uploaded";
    }

    $mail = new PHPMailer(true);

    try {
        // SMTP Configuration
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // Gmail SMTP server
        $mail->SMTPAuth = true;
        $mail->Username = 'info@sagartech.co.in';
        $mail->Password = 'arzsumqvxpkalxlj';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        // Email Headers
        $mail->setFrom('info@sagartech.co.in', 'Sagar Tech');
        $mail->addAddress('info@sagartech.co.in');

        // Email Content
        $mail->isHTML(false);
        $mail->Subject = "New Job Application - $job_position";
        $mail->Body = "Name: $name\nEmail: $email\nApplied for: $job_position\nMessage: $message\nResume File Name: $resume_name\n";

        $mail->send();
        echo "Application sent successfully!";
    } catch (Exception $e) {
        echo "Failed to send application. Error: {$mail->ErrorInfo}";
    }
}
