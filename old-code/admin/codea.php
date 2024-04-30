<?php
include('atstart/asecurity.php');

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

    if(isset($_POST['deletebtna']))
    {
            $id = $_POST['deleteida'];
    
            $query = "DELETE FROM admins WHERE ID='$id' ";
            $query_run = mysqli_query($connection, $query);
    
        if($query_run)
        {
            $_SESSION['Username'] = "Your Data is Deleted";
            $_SESSION['Username_code'] = "success";
            header('Location: registera.php'); 
        }
        else
        {
            $_SESSION['Username'] = "Your Data is NOT DELETED";       
            $_SESSION['Username_code'] = "error";
            header('Location: registera.php'); 
        }    
    }

}

?>