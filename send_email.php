<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "Priya04shandilya@gmail.com"; // Replace with your email address
    $subject = $_POST['contactSubject'];
    $message = "Name: ".$_POST['contactName']."\n";
    $message .= "Email: ".$_POST['contactEmail']."\n";
    $message .= "Subject: ".$_POST['contactSubject']."\n";
    $message .= "Message:\n".$_POST['contactMessage'];

    $headers = "From: ".$_POST['contactEmail'];

    if (mail($to, $subject, $message, $headers)) {
        echo "success";
    } else {
        echo "error";
    }
} else {
    echo "error";
}
?>
