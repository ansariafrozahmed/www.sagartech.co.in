<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"]); // Trim spaces for better formatting
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $job_position = $_POST["job_position"];
    $message = $_POST["message"];

    if ($_FILES["resume"]["error"] !== UPLOAD_ERR_OK) {
        die("File Upload Error: " . $_FILES["resume"]["error"]);
    }

    $target_dir = "uploads/";

    // Get original file extension
    $file_extension = pathinfo($_FILES["resume"]["name"], PATHINFO_EXTENSION);

    // Create a unique filename using the applicant's name and timestamp
    $safe_name = preg_replace("/[^a-zA-Z0-9]/", "_", $name); // Remove special characters
    $new_filename = $safe_name . "_" . time() . "." . $file_extension;
    $target_file = $target_dir . $new_filename;

    $file_uploaded = false;

    if (move_uploaded_file($_FILES["resume"]["tmp_name"], $target_file)) {
        $file_uploaded = true;
    }

    // Send Email
    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'info@sagartech.co.in';
        $mail->Password = 'arzsumqvxpkalxlj'; // Use an app password for Gmail
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->setFrom('info@sagartech.co.in', 'Sagar Tech');
        $mail->addAddress('info@sagartech.co.in');

        // Attach the uploaded file if available

        if ($file_uploaded) {
            echo "File saved at: " . $target_file;
        } else {
            echo "File upload failed!";
        }
        if (file_exists($target_file)) {
            $mail->addAttachment($target_file, $new_filename);
        } else {
            echo "File not found: " . $target_file;
        }

        $mail->isHTML(false);
        $mail->Subject = "New Job Application - $job_position";
        $mail->Body = "Name: $name\nEmail: $email\nPhone: $phone\nJob Position: $job_position\nMessage: $message\nAttached Resume: $new_filename";

        if ($mail->send()) {
            $status = "success";
            $message = "✅ Application sent successfully!";
        } else {
            $status = "error";
            $message = "❌ Failed to send application.";
        }
    } catch (Exception $e) {
        $status = "error";
        $message = "❌ Failed to send application. Error: {$mail->ErrorInfo}";
    }

    // Redirect to career page with status and message
    header("Location: career?status=$status&message=" . urlencode($message));
    exit();
}
