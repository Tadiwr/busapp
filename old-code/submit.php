<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bus_system";

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);
//echo"connected";

// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}

// Set the total number of seats for each bus
//$sql = "INSERT INTO bus (name, capacity) VALUES ('ZUPCO 1', 65), ('ZUPCO 2', 65), ('ZUPCO 3', 65)";

//if ($con->query($sql) === TRUE) {
//  echo "Bus records created successfully";
//} else {
//  echo "Error: " . $sql . "<br>" . $con->error;
//}

if  ($bus = $_POST['bus']) {
  
  // Check if there are any available seats for the selected bus
  $sql = "SELECT seats FROM bus WHERE registration_number = '$bus'";
  $result = $con->query($sql);
  
  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      if ($row["seats"] > 0) {
        // There are available seats, update the database
        $sql = "UPDATE bus SET seats=seats-1 WHERE registration_number ='$bus'";
        
        if ($con->query($sql) === TRUE) {
          echo "You have booked: " . $bus;
          // Delay the redirect by 3 seconds (adjust as needed)
          echo '<script>setTimeout(function(){ window.location.href = "booking.php"; }, 3000);</script>';
      } else {
          echo "Error updating record: " . $con->error;
          header('Location: booking.php');
      }
  } else {
      // The bus is full
      echo "Sorry, the bus is full.";
      // Delay the redirect by 3 seconds (adjust as needed)
      echo '<script>setTimeout(function(){ window.location.href = "booking.php"; }, 3000);</script>';
  }
    }
  } else {
    echo "No results";
    echo '<script>setTimeout(function(){ window.location.href = "booking.php"; }, 3000);</script>';
  }
  
  $con->close();
}
?>
