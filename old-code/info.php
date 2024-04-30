<?php
require_once 'vendor/autoload.php'; // Include PHPMailer autoloader
use PHPMailer\PHPMailer\PHPMailer;
error_reporting(E_ALL);
ini_set('display_errors', 1);

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$hashedPassword = password_hash($password, PASSWORD_BCRYPT);


// Database Connection
$con = new mysqli('localhost', 'root', '', 'bus_system');

if ($con->connect_error) {
        die('Connection Failed: ' . $con->connect_error);
    } else {

    // Check if the username or email already exists
    $checkQuery = "SELECT COUNT(*) FROM clients WHERE Username = ? OR Email = ?";
    $stmt = $con->prepare($checkQuery);
    $stmt->bind_param("ss", $username, $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $count = $result->fetch_row()[0];
    
        if ($count > 0) {
            echo "User already exists<br/>";
            // You can handle this case (e.g., display an error message to the user)
        } else {
            // Insert the new user
            $newUserQuery = "INSERT INTO clients (Username, Email, Password) VALUES (?, ?, ?)";
            $stmt = $con->prepare($newUserQuery);
            $stmt->bind_param("sss", $username, $email, $hashedPassword);
            if ($stmt->execute()) {
                echo "You are now registered<br/>";
        
        // Create a new PHPMailer instance
        $mail = new PHPMailer(true);

        try {
            // SMTP settings (customize these with your own)
        $mail->isSMTP();
        $mail->Host = 'mailslurp.mx'; // Your SMTP server
        $mail->SMTPAuth = true;
        $mail->Username = 'ZIkw6CmIOflQJ016dxxoCP0LDI1wDert'; // Your SMTP username
        $mail->Password = '6kyBqPVmfQ2xyfl4xp4vyR8RmWAjgsbS'; // Your SMTP password
        $mail->SMTPSecure = 'tls';
        $mail->Port = 2587;

        // Sender and recipient
        $mail->setFrom('7630305a-421b-4a81-a653-0e65b90a6166@mailslurp.mx', 'Bus Scheduling System');
        $mail->addAddress($email, $username); // User's email and name

        // Email content
        $mail->isHTML(true);
        $mail->Subject = 'Welcome to Our System';
        $mail->Body = 'Dear' . $username . ', Thank you for registering on our website!';

        // Send the email
        $mail->send();
        echo 'Welcome email sent successfully!';
        } catch (Exception $e) {
            echo 'Error sending the welcome email: ' . $mail->ErrorInfo;
        }
                // Redirect to the booking page or any other desired page
                header("Location: booking.php");
                exit;
            } else {
                echo "Error adding user to the database<br/>";
            }
        }
    
        $stmt->close();
        $con->close();
    }

?>

