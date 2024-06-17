<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Add your email sending logic here
    // For example, using PHP's mail function
    $to = "mackmanishyadav@gmail.com";
    $headers = "From: $name <$email>" . "\r\n";
    $headers .= "Reply-To: $email" . "\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";
    $message_body = "Name: $name\n";
    $message_body .= "Email: $email\n";
    $message_body .= "Subject: $subject\n";
    $message_body .= "Message: $message\n";

    if (mail($to, $subject, $message_body, $headers)) {
        // Email sent successfully
        echo json_encode(array("status" => "success", "message" => "Email sent successfully!"));
    } else {
        // Error sending email
        echo json_encode(array("status" => "error", "message" => "Error sending email"));
    }
} else {
    // Not a POST request, handle accordingly
    echo json_encode(array("status" => "error", "message" => "Invalid request method"));
}
?>
