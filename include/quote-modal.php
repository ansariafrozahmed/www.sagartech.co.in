<?php
// Load PHPMailer Autoloader
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';
require 'phpmailer/src/Exception.php';

// Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

// Variables to store form data
$name = $email = $service = $additionalWords = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Collect form data
  $name = $_POST["name"];
  $email = $_POST["email"];
  $service = $_POST["service"];
  $additionalWords = $_POST["additional-word"];

  try {
    // Server settings
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'ansariafroz720@gmail.com';
    $mail->Password   = 'deemzwxkjinwnbxn';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;

    // Recipients
    $mail->setFrom('ansariafroz720@gmail.com', 'Abc');
    $mail->addAddress('ansariafroz720@gmail.com', 'Aditi Patil');

    // Content
    $mail->isHTML(true);
    $mail->Subject = 'New Form Submission';
    $mail->Body    = "<b>Name:</b> $name<br><b>Email:</b> $email<br><b>Service:</b> $service<br><b>Additional Words:</b> $additionalWords";
    $mail->AltBody = 'Name: ' . $name . '\nEmail: ' . $email . '\nService: ' . $service . '\nAdditional Words: ' . $additionalWords;

    // Send email
    $mail->send();
    // echo 'Message has been sent';
  } catch (Exception $e) {
    // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>
  .modal-window {
    position: fixed;
    background-color: rgba(0, 0, 0, 0.25);
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 999;
    visibility: hidden;
    opacity: 0;
    pointer-events: none;
    transition: all 0.3s;

    &:target {
      visibility: visible;
      opacity: 1;
      pointer-events: auto;
    }

    &>div {
      width: 400px;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      padding: 2em;
      background: white;
    }

    header {
      font-weight: bold;
    }

    h1 {
      font-size: 150%;
      margin: 0 0 15px;
    }
  }

  .modal-close {
    color: #aaa;
    line-height: 50px;
    font-size: 80%;
    position: absolute;
    right: 0;
    text-align: center;
    top: 0;
    width: 70px;
    text-decoration: none;

    &:hover {
      color: black;
    }
  }

  /* Demo Styles */

  a {
    color: inherit;
    text-decoration: none;
  }


  .modal-window {
    &>div {
      border-radius: 1rem;
    }
  }

  .modal-window div:not(:last-of-type) {
    margin-bottom: 15px;
  }

  .logo {
    max-width: 150px;
    display: block;
  }

  small {
    color: lightgray;
  }

  .btn {
    background-color: white;
    padding: 10px 20px;
    border: 1px solid gray;
    border-radius: 0.5rem;
    text-decoration: none;
    color: black;
  }
</style>

<body>

  <a class="btn" href="#open-modal">GET QUOTE</a>

  <div id="open-modal" class="modal-window">
    <div>
      <a href="#" title="Close" class="modal-close">Close</a>
      <div>
        <div></div>
        <div>
          <form method="post">
            <div>
              <label for="name">Full Name</label>
              <input type="text" name="name">
            </div>
            <div>
              <label for="email">Email</label>
              <input type="email" name="email">
            </div>
            <div>
              <label for="service">Requested Service</label>
              <select name="service" id="service">
                <option value="website development">Website Development</option>
                <option value="digital marketing">Digital Marketing</option>
                <option value="bulzzk sms">Bulk SMS</option>
                <option value="graphic design">Graphic Design</option>
                <option value="app development">App Development</option>
                <option value="iso consulting">ISO Consulting</option>
              </select>
            </div>
            <div>
              <label for="additional">Additional Words</label>
              <textarea name="additional-word" id="additional"></textarea>
            </div>
            <button type="submit" style="background-color: red; cursor: pointer; padding: 10px 20px; border-radius: 10px; outline: none; color: white; border: none;">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>

</body>

</html>