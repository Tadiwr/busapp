// Create a new PHPMailer instance
    $mail = new PHPMailer();


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
        $mail->setFrom('33e0b163-5d5e-4a1a-be6e-632a562259b5@mailslurp.mx', 'Bus Reservation');
        $mail->addAddress($email, $username); // User's email and name
    
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