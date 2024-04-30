<?php
require_once(__DIR__ . '/vendor/autoload.php'); // Include PHPMailer autoloader
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Create a new PHPMailer instance
$mail = new PHPMailer(true);

try {
    // SMTP settings (customize these with your own)
    $mail->isSMTP();
    $mail->Host = 'mx.mailslurp.com'; // Your SMTP server
    $mail->SMTPAuth = true;
    $mail->Username = 'ZIkw6CmIOflQJ016dxxoCP0LDI1wDert'; // Your SMTP username
    $mail->Password = '6kyBqPVmfQ2xyfl4xp4vyR8RmWAjgsbS'; // Your SMTP password
    $mail->SMTPSecure = 'tls';
    $mail->Port = 2587;

    // Sender and recipient
    $mail->setFrom('7630305a-421b-4a81-a653-0e65b90a6166@mailslurp.mx', 'Your Website');
    $mail->addAddress('user@example.com', 'User Name'); // User's email and name

    // Email content
    $mail->isHTML(true);
    $mail->Subject = 'Welcome to Our System';
    $mail->Body = 'Dear User, Thank you for registering on our website!';

    // Send the email
    $mail->send();
    echo 'Welcome email sent successfully!';
} catch (Exception $e) {
    echo 'Error sending the welcome email: ' . $mail->ErrorInfo;
}
?>