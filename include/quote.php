<?php
// // Load PHPMailer Autoloader
// require 'phpmailer/src/PHPMailer.php';
// require 'phpmailer/src/SMTP.php';
// require 'phpmailer/src/Exception.php';

// // Import PHPMailer classes into the global namespace
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;
// use PHPMailer\PHPMailer\Exception;

// // Create an instance; passing `true` enables exceptions
// $mail = new PHPMailer(true);

// // Variables to store form data
// $name = $email = $service = $additionalWords = "";

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // Collect form data
//     $name = $_POST["name"];
//     $email = $_POST["email"];
//     $service = $_POST["service"];
//     $additionalWords = $_POST["message"];

//     try {
//         // Server settings
//         $mail->isSMTP();
//         $mail->Host       = 'smtp.gmail.com';
//         $mail->SMTPAuth   = true;
//         $mail->Username   = 'ansariafroz720@gmail.com';
//         $mail->Password   = 'deemzwxkjinwnbxn';
//         $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
//         $mail->Port       = 465;

//         // Recipients
//         $mail->setFrom('ansariafroz720@gmail.com', 'SagarTech Website');
//         $mail->addAddress('ansariafroz720@gmail.com', 'SagarTech Admin');

//         // Content
//         $mail->isHTML(true);
//         $mail->Subject = 'New Form Submission';
//         $mail->Body    = "<b>Name:</b> $name<br><b>Email:</b> $email<br><b>Service:</b> $service<br><b>Additional Words:</b> $additionalWords";
//         $mail->AltBody = 'Name: ' . $name . '\nEmail: ' . $email . '\nService: ' . $service . '\nAdditional Words: ' . $additionalWords;

//         // Send email
//         $mail->send();
//         // echo 'Message has been sent';
//     } catch (Exception $e) {
//         // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
//     }
// }
?>

<style>
  .title {
    display: flex;
    align-items: center;
    justify-content: start;
    gap: 10px;
    margin-bottom: 5px;
    padding: 2px 10px;
  }

  .title:hover {
    border-radius: 15px;
    background-color: rgb(243, 243, 243);
  }

  .title img {
    width: 10px;
  }

  .modal-window {
    position: fixed;
    background-color: rgba(0, 0, 0, 0.50);
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 999;
    visibility: hidden;
    opacity: 0;
    pointer-events: none;
    transition: all 0.3s;
  }

  .modal-window:target {
    visibility: visible;
    opacity: 1;
    pointer-events: auto;
  }

  .modal-window>div {
    width: 350px;
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
  }

  .modal-close:hover {
    color: black;
  }

  /* Demo Styles */

  a {
    color: inherit;
    text-decoration: none;
  }

  .containerrrr {}

  .modal-window>div {
    border-radius: 1rem;
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
    padding: 1em 1.5em;
    border-radius: 0.5rem;
    text-decoration: none;
  }

  .btn i {
    padding-right: 0.3em;
  }

  .form-divvv {
    padding: 20px 0px;
  }

  .formmmm {
    display: flex;
    flex-direction: column;
    gap: 10px;
  }

  .formmmm input,
  select {
    border-radius: 10px;
    border: 1px solid gray;
  }

  .formmmm textarea {
    height: 90px;
    border-radius: 10px;
    border: 1px solid gray;
  }

  .button-62 {
    background: linear-gradient(to bottom right, #FF0808, #fc6262);
    border: 0;
    border-radius: 12px;

    color: #FFFFFF;
    cursor: pointer;
    display: inline-block;
    font-family: -apple-system, system-ui, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
    font-size: 16px;
    font-weight: 500;
    line-height: 2.5;
    outline: transparent;
    padding: 5px 30px;
    text-align: center;
    text-decoration: none;
    transition: box-shadow .2s ease-in-out;
    user-select: none;
    -webkit-user-select: none;
    touch-action: manipulation;
    white-space: nowrap;
  }

  .button-62:not([disabled]):focus {
    box-shadow: 0 0 .25rem rgba(0, 0, 0, 0.5), -.125rem -.125rem 1rem rgba(239, 71, 101, 0.5), .125rem .125rem 1rem rgba(255, 154, 90, 0.5);
  }

  .button-62:not([disabled]):hover {
    box-shadow: 0 0 .25rem rgba(0, 0, 0, 0.5), -.125rem -.125rem 1rem rgba(239, 71, 101, 0.5), .125rem .125rem 1rem rgba(255, 154, 90, 0.5);
    color: white;
  }

  .quote-button {
    background-color: #ff0808;
    padding: 8px 15px;
    border-radius: 5px;
    border: none;
    color: #fff;
    font-size: 14px;
    font-weight: 500;
    box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2),
      0 6px 20px 0 rgba(0, 0, 0, 0.19);
  }
</style>


<button class="quote-button">
  <a href="#open-modal" style="color: white">Get Quote</a>
</button>

<div class="containerrrr">
  <div id="open-modal" class="modal-window">
    <div>
      <a href="#" title="Close" class="modal-close">Close</a>
      <div class="form-divvv">
        <form class="formmmm" method="post">
          <input type="text" name="name" id="name" placeholder="Enter your name..">
          <input type="email" name="email" id="email" placeholder="Enter your email..">
          <input type="number" name="contact" id="contact" placeholder="Enter your number..">
          <select name="service" id="service">
            <option value="Web Development">Web Development</option>
            <option value="App Development">App Development</option>
            <option value="Digital Marketing">Digital Marketing</option>
            <option value="Social Engine Optimization">Social Engine Optimization</option>
            <option value="Bulk SMS">Bulk SMS</option>
            <option value="ISO Consulting">ISO Consulting</option>
          </select>
          <textarea name="message" placeholder="Enter Your Message" id=""></textarea>
          <button class="button-62" type="submit">
            SEND
          </button>
        </form>
      </div>
    </div>
  </div>
</div>