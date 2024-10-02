<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $to = 'ctc@chapman.edu'; // The email address where the messages will be sent
    $email_subject = "New Message from: $name";
    $email_body = "You have received a new message from your contact form.\n\n".
                  "Name: $name\n".
                  "Email: $email\n".
                  "Subject: $subject\n".
                  "Message:\n$message";

    $headers = "From: $email";

    // Send email
    if(mail($to, $email_subject, $email_body, $headers)) {
        echo 'Message sent successfully!';
    } else {
        echo 'Error sending message!';
    }
} else {
    echo 'Invalid request method!';
}
?>
