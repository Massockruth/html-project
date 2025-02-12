<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    // Set the recipient email address (your email)
    $to = "massockruth56@gmail.com";
    
    // Set the email subject
    $subject = "New Message from " . $name;
    
    // Create the email content
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Message:\n$message\n";
    
    // Set the email headers
    $headers = "From: $email";
    
    // Send the email
    if (mail($to, $subject, $email_content, $headers)) {
        echo "Thank you for your message! We will get back to you soon.";
    } else {
        echo "Oops! Something went wrong, please try again later.";
    }
}
?>
