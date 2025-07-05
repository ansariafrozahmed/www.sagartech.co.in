<?php
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Load PHPMailer classes
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../../../phpmailer/src/Exception.php';
require '../../../phpmailer/src/PHPMailer.php';
require '../../../phpmailer/src/SMTP.php';

// Set JSON response header
header('Content-Type: application/json');

// Use $_POST directly
if (!empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['plan']) && !empty($_POST['name'])) {
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $plan  = $_POST['plan'];
    $name  = $_POST['name'];
    // $email = "aditi@gmail.com";
    // $phone = "9876543210";
    // $plan = "Basic";
    // $name = "Aditi";

    $mail = new PHPMailer(true);

    try {
        // SMTP config
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'info@sagartech.co.in';
        $mail->Password = 'zpwbequlfxlyomld'; // App password
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        // Mail content
        $mail->setFrom('info@sagartech.co.in', 'Sagar Tech');
        $mail->addAddress('info@sagartech.co.in');
        $mail->isHTML(true);
        $mail->Subject = "Enquiry from $name";
        $mail->Body = "
            <strong>Client Name:</strong> $name<br>
            <strong>Email:</strong> $email<br>
            <strong>Phone:</strong> $phone<br>
            <strong>Plan:</strong> $plan
        ";

        $mail->send();

        // Optional: Send to WordPress API
        $postData = [
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'plan' => $plan
        ];

        $ch = curl_init('https://sagartech.co.in/blogs/wp-json/contact-form/v1/submit');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postData));

        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        if ($httpCode === 200) {
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false, 'message' => 'Email sent, but failed to save in CRM.']);
        }
    } catch (Exception $e) {
        echo json_encode(['success' => false, 'message' => 'Mailer Error: ' . $mail->ErrorInfo]);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid form data.']);
}
