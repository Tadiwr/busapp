  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>


  <?php


$connection = mysqli_connect("localhost","root","","bus_system");

if (isset($_POST['registerbtn'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirmpassword'];

    if ($password === $confirm_password) {
        // Hash the password using bcrypt
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        $query = "INSERT INTO clients (Username, Password) VALUES ('$username', '$hashedPassword')";
        $query_run = mysqli_query($connection, $query);

        if ($query_run) {
            echo "done";
            $_SESSION['Username_success'] = "Admin is Added Successfully";
            header('Location: register.php');
        } else {
            echo "not done";
            $_SESSION['Username'] = "Admin is Not Added";
            header('Location: register.php');
        }
    } else {
        echo "pass no match";
        $_SESSION['Username'] = "Password and Confirm Password Do Not Match";
        header('Location: register.php');
    }
}

if (isset($_POST['registerbtna'])) {
    $username = $_POST['usernamea'];
    $password = $_POST['passworda'];
    $confirm_password = $_POST['confirmpassworda'];

    if ($password === $confirm_password) {
        // Hash the password using bcrypt
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        $query = "INSERT INTO admins (Username, Password) VALUES ('$username', '$hashedPassword')";
        $query_run = mysqli_query($connection, $query);

        if ($query_run) {
            echo "done";
            $_SESSION['Username_success'] = "Admin is Added Successfully";
            header('Location: registera.php');
        } else {
            echo "not done";
            $_SESSION['Username'] = "Admin is Not Added";
            header('Location: registera.php');
        }
    } else {
        echo "pass no match";
        $_SESSION['Username'] = "Password and Confirm Password Do Not Match";
        header('Location: registera.php');
    }

    if(isset($_POST['registerbtnb']))
    $registration_number = $_POST['registration_number'];
    $capacity = $_POST['capacity'];
    $seats = $_POST['seats'];

    // Insert data into the bus table
    $sql = "INSERT INTO bus (registration_number, capacity, seats) VALUES (?, ?, ?)";
    $stmt = $con->prepare($sql);
    $stmt->bind_param('sii', $registration_number, $capacity, $seats);

    if ($stmt->execute()) {
        echo "Profile added successfully!";
        header('Location: registerb.php');

    } else {
        echo "Error adding profile: " . $stmt->error;
        header('Location: registerb.php');
    }

}

?>
