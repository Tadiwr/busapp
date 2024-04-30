<?php
// Start a session for storing user data (if applicable)
session_start();


 if (isset($_SESSION['Username']))


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



// Check if the login form is submitted
if (isset($_POST['login_btn'])) {

  // Sanitize username and password
  $username = $_POST['Username'];
  $password = $_POST['Password'];
  $query = "SELECT * FROM clients WHERE Username='$username' ";
  $result = mysqli_query($con, $query);
  $row = mysqli_fetch_assoc($result);
  $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

  //var_dump($hashedPassword);
  //var_dump($row['Password']);

  // Prepare SQL statement with parameterized query to prevent SQL injection
  $sql = "SELECT * FROM clients WHERE Username = ?";
  $stmt = $con->prepare($sql);

  // Bind parameter to the statement
  $stmt->bind_param('s', $username);
  //echo$username;
  // Execute the statement
  $stmt->execute();

  // Get the result
  $result = $stmt->get_result();

  if ($result->num_rows > 0) {
    //echo"user found";
    $row = $result->fetch_assoc();

    // Verify password using password hashing (replace with your hashing method)
    if (password_verify($password, $hashedPassword)) {
      // Login successful: store user data in session (optional)
      $_SESSION['Username'] = $username;
      $_SESSION['ID'] = $row['ID']; // Replace 'id' with the actual user ID column name

      // Redirect to a welcome page or dashboard
      header("Location: booking.php");
      exit;
       }   else {
      echo "Invalid Username or Password.";
    }
  } else {
    echo "Invalid username or password.";
  }

  // Close the result set and statement
  $result->close();
  $stmt->close();


$con->close();
}
?>
