<?php
// Start a session for storing user data (if applicable)
session_start();

// Define database connection details (replace with your credentials)
$servername = "localhost";
$username = "";
$password = "";
$dbname = "bus_system";

// Create connection
$con = new mysqli('localhost', 'root', '', 'bus_system');

// Check connection
if ($con->connect_error) {
    echo "Not connecting";
    die("Connection failed: " . $con->connect_error);
}

// Get the current timestamp
$login_time = date("Y-m-d H:i:s");

// Check if the login form is submitted
if (isset($_POST['login_btn'])) {
    // Sanitize username and password
    $username = $_POST['Username'];
    $password = $_POST['Password'];

    // Prepare SQL statement with parameterized query to prevent SQL injection
    $sql = "SELECT * FROM clients WHERE Username = ?";
    $stmt = $con->prepare($sql);

    // Bind parameter to the statement
    $stmt->bind_param('s', $username);

    // Execute the statement
    $stmt->execute();

    // Get the result
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Verify password using password hashing (replace with your hashing method)
        if (password_verify($password, $row['Password'])) {
            // Login successful: store user data in session (optional)
            $_SESSION['Username'] = $username;
            $_SESSION['ID'] = $row['ID']; // Replace 'id' with the actual user ID column name

            // Insert login log into the database
            $log_sql = "INSERT INTO login_logs (user_id, login_time) VALUES (?, ?)";
            $log_stmt = $con->prepare($log_sql);
            $log_stmt->bind_param('ss', $username, $login_time);
            $log_stmt->execute();

            // Redirect to a welcome page or dashboard
            header("Location: booking.php");
            exit; // Exit to prevent further code execution
        } else {
            echo "Invalid Username or Password.";
            header("Location: index.php");  // Use header for redirection
        }
    } else {
        echo "Invalid Username or Password.";
        header("Location: index.php");  // Use header for redirection
    }

    // Close the result set and statement
    $result->close();
    $stmt->close();
}

// Close the database connection
$con->close();
?>
