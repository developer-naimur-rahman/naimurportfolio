<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "naimur582582@gmail.com"; // আপনার ইমেইল ঠিকানা
    $subject = $_POST["subject"];
    $name = $_POST["name"];
    $from = $_POST["email"];
    $message = $_POST["message"];

    $headers = "From: $from\r\n";
    $headers .= "Reply-To: $from\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    $mail_body = "Name: $name<br>";
    $mail_body .= "Email: $from<br>";
    $mail_body .= "Subject: $subject<br><br>";
    $mail_body .= "Message:<br>$message";

    mail($to, $subject, $mail_body, $headers);
    echo "Email sent successfully!"; // ইমেইল সফলভাবে প্রেরিত হয়েছে
}
?>
