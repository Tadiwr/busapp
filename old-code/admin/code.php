<?php
include('atstart/asecurity.php');

$connection = mysqli_connect("localhost","root","","bus_system");

if(isset($_POST['registerbtn']))
{
    $id = $_POST['ID'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirmpassword'];

    $username_query = "SELECT * FROM clients WHERE Username='$username' ";
    $username_query_run = mysqli_query($connection, $username_query);
    if(mysqli_num_rows($username_query_run) > 0)
    {
        $_SESSION['Username'] = "User Already Taken. Please Try Another one.";
        $_SESSION['Username_code'] = "error";
        header('Location: register.php');  
    }
    else
    {
        if ($password === $cpassword) {
            // Hash the password using bcrypt
            $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
        
            $query = "INSERT INTO clients (Username, Email, Password) VALUES ('$username', '$email', '$hashedPassword')";
            $query_run = mysqli_query($connection, $query);        
            
            if($query_run)
            {
                // echo "Saved";
                $_SESSION['Username'] = "Profile Added";
                $_SESSION['Username_code'] = "success";
                header('Location: register.php');
            }
            else 
            {
                $_SESSION['Username'] = "Profile Not Added";
                $_SESSION['Username_code'] = "error";
                header('Location: register.php');  
            }
        }
        else 
        {
            $_SESSION['Username'] = "Password and Confirm Password Does Not Match";
            $_SESSION['Username_code'] = "warning";
            header('Location: register.php');  
        }
    }
}

    if(isset($_POST['deletebtn']))
{
        $id = $_POST['deleteid'];

        $query = "DELETE FROM clients WHERE ID='$id' ";
        $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['Username'] = "Your Data is Deleted";
        $_SESSION['Username_code'] = "success";
        header('Location: register.php'); 
    }
    else
    {
        $_SESSION['Username'] = "Your Data is NOT DELETED";       
        $_SESSION['Username_code'] = "error";
        header('Location: register.php'); 
    }    
}

    if(isset($_POST['deletebtnb']))
{
        $id = $_POST['deleteid'];

        $query = "DELETE FROM bus WHERE ID='$id' ";
        $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['Username'] = "Your Data is Deleted";
        $_SESSION['Username_code'] = "success";
        header('Location: register.php'); 
    }
    else
    {
        $_SESSION['Username'] = "Your Data is NOT DELETED";       
        $_SESSION['Username_code'] = "error";
        header('Location: register.php'); 
    }    
}

    if(isset($_POST['deletebtnc']))
{
        $id = $_POST['deleteid'];

        $query = "DELETE FROM driver WHERE ID='$id' ";
        $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['Username'] = "Your Data is Deleted";
        $_SESSION['Username_code'] = "success";
        header('Location: register.php'); 
    }
    else
    {
        $_SESSION['Username'] = "Your Data is NOT DELETED";       
        $_SESSION['Username_code'] = "error";
        header('Location: register.php'); 
    }    
}

    if(isset($_POST['deletebtnd']))
{
        $id = $_POST['deleteid'];

        $query = "DELETE FROM locations WHERE ID='$id' ";
        $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['Username'] = "Your Data is Deleted";
        $_SESSION['Username_code'] = "success";
        header('Location: register.php'); 
    }
    else
    {
        $_SESSION['Username'] = "Your Data is NOT DELETED";       
        $_SESSION['Username_code'] = "error";
        header('Location: register.php'); 
    }    
}

if (isset($_POST['updatebtn'])) {
    
    echo 'this part is working';
    $id = $_POST['edit_id'];
    $username = $_POST['edit_username'];
    $password = $_POST['edit_password'];

    // Hash the password using bcrypt
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    $query = "UPDATE clients SET Username='$username', Password='$hashedPassword' WHERE ID='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['Username'] = "Your Data is Updated";
        $_SESSION['Username_code'] = "success";
        header('Location: register.php'); 
    }
    else
    {
        $_SESSION['Username'] = "Your Data is NOT Updated";
        $_SESSION['Username_code'] = "error";
        header('Location: register.php'); 
    }
}

if (isset($_POST['login_btn'])) {
    $username_login = $_POST['username'];
    $password_login = $_POST['password'];

    // Database Connection
    $con = new mysqli('localhost', 'root', '', 'bus_system');
    if ($con->connect_error) {
        echo'not connecting';
        die('Connection Failed: ' . $con->connect_error);
        
    } 
    else {
        // Retrieve the hashed password from the database
        $query = "SELECT Password FROM admins WHERE Username='$username_login' LIMIT 1";
        $result = mysqli_query($con, $query);
        $row = mysqli_fetch_assoc($result);
        $hashedPassword = $row['Password'];

        // Verify the password using password_verify
        if (password_verify($password_login, $hashedPassword)) {
            $_SESSION['Username'] = $username_login;
            header('Location: index.php');
        } 
        else {
            $_SESSION['Username'] = "Username / Password is Invalid";
            header('Location: adminlogin.php');
        }
    }
    
if (isset($_POST['adminbtn'])) {
    $id = $_POST['edit_ida'];
    $username = $_POST['usernamea'];
    $password = $_POST['passworda'];        
    $confirm_password = $_POST['confirmpassworda'];

    if ($password === $confirm_password) {
    // Hash the password using bcrypt
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        echo'hallo';

    $query = "UPDATE admins SET Username='$username', Password='$hashedPassword' WHERE ID='$id' ";
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
}

if(isset($_POST['registerbtna']))
{
    $id = $_POST['ID'];
    $username = $_POST['usernamea'];
    $password = $_POST['passworda'];
    $cpassword = $_POST['confirmpassworda'];

    $username_query = "SELECT * FROM admins WHERE Username='$username' ";
    $username_query_run = mysqli_query($connection, $username_query);
    if(mysqli_num_rows($username_query_run) > 0)
    {
        $_SESSION['Username'] = "User Already Taken. Please Try Another one.";
        $_SESSION['Username_code'] = "error";
        header('Location: registera.php');  
    }
    else
    {
        if ($password === $cpassword) {
            // Hash the password using bcrypt
            $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
        
            $query = "INSERT INTO admins (Username, Password) VALUES ('$username', '$hashedPassword')";
            $query_run = mysqli_query($connection, $query);        
            
            if($query_run)
            {
                // echo "Saved";
                $_SESSION['Username'] = "Profile Added";
                $_SESSION['Username_code'] = "success";
                header('Location: registera.php');
            }
            else 
            {
                $_SESSION['Username'] = "Profile Not Added";
                $_SESSION['Username_code'] = "error";
                header('Location: registera.php');  
            }
        }
        else 
        {
            $_SESSION['Username'] = "Password and Confirm Password Does Not Match";
            $_SESSION['Username_code'] = "warning";
            header('Location: registera.php');  
        }
    }
}
}
?>