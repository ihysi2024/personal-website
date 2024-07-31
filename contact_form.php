<?php
// Set the recipient email address
$recipient = "your-email@example.com"; // Replace with your email address

// Get the form data
$name = htmlspecialchars($_POST['name']); // Sanitize input to prevent XSS
$email = htmlspecialchars($_POST['email']);
$priority = htmlspecialchars($_POST['priority']);
$copy = isset($_POST['copy']) ? 'Yes' : 'No';
$human = isset($_POST['human']) ? 'Yes' : 'No';
$message = htmlspecialchars($_POST['message']);

// Prepare the email subject and message
$subject = "Contact Form Submission from $name";
$email_message = "Name: $name\n";
$email_message .= "Email: $email\n";
$email_message .= "Priority: $priority\n";
$email_message .= "Email Copy: $copy\n";
$email_message .= "Human Check: $human\n";
$email_message .= "Message:\n$message\n";

// Set the email headers
$headers = "From: $email";

// Send the email
if (mail($recipient, $subject, $email_message, $headers)) {
    echo "Message sent successfully.";
} else {
    echo "Failed to send message.";
}
?>
