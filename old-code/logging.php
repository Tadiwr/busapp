<?php
// Assuming you have already established a database connection
// Replace the placeholders with your actual database details

// Connect to the database
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "bus_system";

// Create connection
$con = new mysqli('localhost', 'root', '', 'bus_system');

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// Retrieve login logs
$log_query = "SELECT * FROM login_logs ORDER BY login_time DESC"; // Order by login time in descending order
$log_result = $con->query($log_query);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Logs</title>
</head>
<body>

<h2>Login Logs</h2>

<table border="1">
    <tr>
        <th>ID</th>
        <th>User ID</th>
        <th>Login Time</th>
    </tr>
    <?php
    if ($log_result->num_rows > 0) {
        while ($row = $log_result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['user_id'] . "</td>";
            echo "<td>" . $row['login_time'] . "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='3'>No login logs found.</td></tr>";
    }
    ?>
</table>

</body>
</html>

<?php
// Close the database connection
$con->close();
?>