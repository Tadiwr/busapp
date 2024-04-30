<?php
include('atstart/asecurity.php');
include('includes/header.php'); 
include('includes/navbar.php'); 

?>


<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="codea.php" method="POST">

        <div class="modal-body">

            <div class="form-group">
                <label>Username</label>
                <input type="text" name="usernamea" class="form-control" placeholder="Enter Username">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="passworda" class="form-control" placeholder="Enter Password">
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="confirmpassworda" class="form-control" placeholder="Confirm Password">
            </div>
        
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="registerbtna" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>


<div class="container-fluid">

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Admin Profile 
        <br/>
        <br/>
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
                Add Admin Profile 
              </button>
      </h6>
    </div>

        <div class="card-body">
            <div class="table-responsive">
            <?php

                $query = "SELECT * FROM admins ";
                $query_run = mysqli_query($connection, $query);
            ?>

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Password</th>
<!--            <th>User Type</th>  -->
          </tr>
        </thead>
        <tbody>
        <?php
          if(mysqli_num_rows($query_run) > 0)        
              {
            while($row = mysqli_fetch_assoc($query_run))
              {
        ?>
          <tr>
            <td><?php  echo $row['ID']; ?></td>
            <td><?php  echo $row['Username']; ?></td>
            <td><?php  echo $row['Password']; ?></td>
            <td>
                <form action="register_edita.php" method="POST">
                    <input type="hidden" name="edit_ida" value="<?php echo $row['ID'] ?>">
                     <button  type="submit" name="edit_btna" class="btn btn-success"> EDIT</button>
                </form>
            </td>
            <td>
                <form action="codea.php" method="POST">
                  <input type="hidden" name="deleteida" value="<?php echo $row['ID'] ?>">
                  <button type="submit" name="deletebtna" class="btn btn-danger"> DELETE</button>
                </form>
            </td>
          </tr>
          <?php
             } 
               }
            else {
                  echo "No Record Found";
               }
          ?>
        </tbody>
      </table>

    </div>
  </div>
</div>

</div>

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>