<?php
    include('atstart/asecurity.php');
    include("includes/header.php");
    include("includes/navbar.php");
    include('code.php');


?>

<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"> EDIT Profile </h6>
        </div>
        <div class="card-body">
        <?php
        
            if(isset($_POST['edit_id']))
            {
                $id = $_POST['edit_id'];
                
                $query = "SELECT * FROM clients WHERE ID='$id' ";
                $query_run = mysqli_query($connection, $query);

                foreach($query_run as $row)
                {
                    ?>

                        <form action="code.php" method="POST">

                            <input type="hidden" name="edit_id" value="<?php echo $row['ID'] ?>">

                            <div class="form-group">
                                <label> Username </label>
                                <input type="text" name="edit_username" value="" class="form-control"
                                    placeholder="Enter Username">
                            </div>
                            <div class="form-group">
                                <label> Email </label>
                                <input type="text" name="edit_email" value="" class="form-control"
                                    placeholder="Enter Email">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="edit_password" value=""
                                    class="form-control" placeholder="Enter Password">
                            </div>

                            <a href="register.php" class="btn btn-danger"> CANCEL </a>
                            <button type="submit" name="updatebtn" class="btn btn-primary"> Update </button>

                        </form>
                        <?php
                }
            }
        ?>
        </div>
    </div>
</div>

</div>

<?php
    include("includes/scripts.php");
    include("includes/footer.php");
?>