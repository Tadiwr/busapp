<?php
include('atstart/asecurity.php');
include('includes/header.php'); 
include('includes/navbar.php');
include("auth.php");

error_log("This is logged only to the PHP log");
error_log("Custom error message", 3, "C:/xampp/htdocs/Project/text.log");
// Define some variables
//$first = "foo";
//$second = "bar";

 /** Return true if the user is logged in */


if(isLoggedIn()) {
  echo "<p>Is logged in</p>";
} else {
  header("Location: webpage.php");
  exit;
}


?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i>Produce Logs</a>
    </div>

    <!-- Output variables -->
    <div class="row">
        <!-- First Row -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Registered Admin</div>
                    <?php
                    $query = "SELECT ID FROM admins ORDER BY ID";  
                    $query_run = mysqli_query($connection, $query);
                    $row = mysqli_num_rows($query_run);
                    echo '<h4> Total Admin: '.$row.'</h4>';
                    ?>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Registered Users</div>
                    <?php
                    $query = "SELECT ID FROM clients ORDER BY ID";  
                    $query_run = mysqli_query($connection, $query);
                    $row = mysqli_num_rows($query_run);
                    echo '<h4> Total Users: '.$row.'</h4>';
                    ?>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Buses</div>
                    <?php
                    $query = "SELECT ID FROM bus ORDER BY ID";  
                    $query_run = mysqli_query($connection, $query);
                    $row = mysqli_num_rows($query_run);
                    echo '<h4> Total Buses: '.$row.'</h4>';
                    ?>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Second Row -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Drivers</div>
                    <?php
                    $query = "SELECT ID FROM driver ORDER BY ID";  
                    $query_run = mysqli_query($connection, $query);
                    $row = mysqli_num_rows($query_run);
                    echo '<h4> Total Drivers: '.$row.'</h4>';
                    ?>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Bus Stops</div>
                    <?php
                    $query = "SELECT ID FROM bus_stop ORDER BY ID";  
                    $query_run = mysqli_query($connection, $query);
                    $row = mysqli_num_rows($query_run);
                    echo '<h4> Total Bus Stops: '.$row.'</h4>';
                    ?>
                </div>
            </div>
        </div>
        <!-- Add another column here if needed -->
    </div>
</div>

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>
