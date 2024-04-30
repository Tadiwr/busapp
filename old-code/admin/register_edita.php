<?php
    include('atstart/asecurity.php');
    include("includes/header.php");
    include("includes/navbar.php");
    include('codea.php');


?>

<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"> EDIT Profile </h6>
        </div>
        <div class="card-body">
        <?php
        
            if(isset($_POST['edit_btna']))
            {
                $id = $_POST['edit_ida'];
                
                $query = "SELECT * FROM admins WHERE ID='$id' ";
                $query_run = mysqli_query($connection, $query);

                foreach($query_run as $row)
                {
                    ?>

                        <form action="codea.php" method="POST">

                            <input type="hidden" name="edit_ida" value="<?php echo $row['ID'] ?>">

                            <div class="form-group">
                                <label> Username </label>
                                <input type="text" name="usernamea" value="" class="form-control"
                                    placeholder="Enter Username">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="passworda" value=""
                                    class="form-control" placeholder="Enter Password">
                            </div>

                            <a href="registera.php" class="btn btn-danger"> CANCEL </a>
                            <button type="submit" name="adminbtn" class="btn btn-primary"> Update </button>

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