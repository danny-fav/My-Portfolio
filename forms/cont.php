<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = strip_tags($_POST['name']);
    $email = strip_tags($_POST['email']);
    $message = strip_tags($_POST['message']);

    $to = "favndan@gmail.com";  // <-- replace with your email
    $subject = "New Contact Form Message from $name";

    $body = "
    Name: $name
    Email: $email
    Message:
    $message
    ";

    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message.";
    }
}
?>