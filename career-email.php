<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "s.danish0827@gmail.com";
    $subject = "Job Application: " . $_POST['jobTitle'];
    $message = "A new job application has been submitted for the position of " . $_POST['jobTitle'] . ".";
    
    $headers = "From: s.danish0827@gmail.com\r\n";
    
    if (isset($_FILES['resume']) && $_FILES['resume']['error'] == 0) {
        $file_tmp = $_FILES['resume']['tmp_name'];
        $file_name = $_FILES['resume']['name'];
        $file_type = $_FILES['resume']['type'];
        $file_content = chunk_split(base64_encode(file_get_contents($file_tmp)));
        
        $boundary = md5(time());
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: multipart/mixed; boundary=\"$boundary\"\r\n";
        
        $body = "--$boundary\r\n";
        $body .= "Content-Type: text/plain; charset=UTF-8\r\n\r\n";
        $body .= $message . "\r\n\r\n";
        
        $body .= "--$boundary\r\n";
        $body .= "Content-Type: $file_type; name=\"$file_name\"\r\n";
        $body .= "Content-Disposition: attachment; filename=\"$file_name\"\r\n";
        $body .= "Content-Transfer-Encoding: base64\r\n\r\n";
        $body .= $file_content . "\r\n\r\n";
        $body .= "--$boundary--";
        
        mail($to, $subject, $body, $headers);
        echo "Email sent successfully!";
    } else {
        echo "Failed to send email. Please try again.";
    }
}
?>
