<?php
include('atstart/asecurity.php');

if (isset($_POST['edit_btnb'])) {
    $id = $_POST['edit_idb'];
    $registration_number = $_POST['registration_number'];
    $capacity = $_POST['capacity'];
    $seats = $_POST['seats'];

    // Insert data into the bus table
    $sql = "INSERT INTO bus (registration_number, capacity, seats) VALUES (?, ?, ?)";
    $stmt = $con->prepare($sql);
    $stmt->bind_param('sii', $registration_number, $capacity, $seats);

    if ($stmt->execute()) {
        echo "Profile added successfully!";
    } else {
        echo "Error adding profile: " . $stmt->error;
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
    } else {
        echo "Error adding profile: " . $stmt->error;
    }


    if(isset($_POST['deletebtn']))
    {
            $id = $_POST['deleteid'];
    
            $query = "DELETE FROM bus WHERE ID='$id' ";
            $query_run = mysqli_query($connection, $query);
    
        if($query_run)
        {
            $_SESSION['Username'] = "Your Data is Deleted";
            $_SESSION['Username_code'] = "success";
            header('Location: registerb.php'); 
        }
        else
        {
            $_SESSION['Username'] = "Your Data is NOT DELETED";       
            $_SESSION['Username_code'] = "error";
            header('Location: registerb.php'); 
        }    
    }

}

?>