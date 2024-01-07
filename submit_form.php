<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // Validate and sanitize data (add more validation as needed)

    // Send email
    $to = 'mina.selimm@outlook.com';  
    $subject = 'Contact Form Submission';
    $headers = "From: $email\r\n";
    $messageBody = "Name: $name\nEmail: $email\nPhone: $phone\nMessage: $message";

    if (mail($to, $subject, $messageBody, $headers)) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false]);
    }
} else {
    // Redirect or handle the situation when the form is not submitted via POST
    echo json_encode(['success' => false]);
}
?>