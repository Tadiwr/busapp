<?php
include('atstart/asecurity.php');
include('includes/header.php'); 
include('includes/navbar.php'); 

?>


<div class="modal fade" id="addprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST">

        <div class="modal-body">

            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control" placeholder="Enter Username">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" placeholder="Enter Email">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter Password">
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="confirmpassword" class="form-control" placeholder="Confirm Password">
            </div>
        
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="registerbtn" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>


<div class="container-fluid">

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Profile 
      <br/>
        <br/>
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addprofile">
                Add Profile 
              </button>
      </h6>
    </div>

        <div class="card-body">
            <div class="table-responsive">
            <?php

                $query = "SELECT * FROM clients ";
                $query_run = mysqli_query($connection, $query);
            ?>

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Email</th>
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
            <td><?php  echo $row['Email']; ?></td>
            <td><?php  echo $row['Password']; ?></td>
<!--            <td>//?php  echo $row['UserType']; ?></td> -->
            <td>
                <form action="register_edit.php" method="POST">
                    <input type="hidden" name="edit_id" value="<?php echo $row['ID'] ?>">
                     <button  type="submit" name="edit_btn" class="btn btn-success"> EDIT</button>
                </form>
            </td>
            <td>
                <form action="code.php" method="POST">
                  <input type="hidden" name="deleteid" value="<?php echo $row['ID'] ?>">
                  <button type="submit" name="deletebtn" class="btn btn-danger"> DELETE</button>
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