<?php
include('atstart/asecurity.php');
include('includes/header.php'); 
include('includes/navbar.php'); 
?>


<div class="modal fade" id="busprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="codeb.php" method="POST">

        <div class="modal-body">

            <div class="form-group">
                <label>Registration Numbe</label>
                <input type="text" name="regsitration_number" class="form-control" placeholder="Enter Registration Number">
            </div>
            <div class="form-group">
                <label>Capacity</label>
                <input type="text" name="capacity" class="form-control" placeholder="Enter Capacity">
            </div>
            <div class="form-group">
                <label>Seats</label>
                <input type="text" name="seats" class="form-control" placeholder="Enter Seats">
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
            <h6 class="m-0 font-weight-bold text-primary">Bus Profile</h6>
        <br/>
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#busprofile">
                Add Profile 
              </button>
      </h6>
</div>
        <div class="card-body">
            <div class="table-responsive">
            <?php
                $query = "SELECT * FROM bus";
                $query_run = mysqli_query($connection, $query);
            ?>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th> ID </th>
                            <th> Registration Number </th>
                            <th> Capacity </th>
                            <th> Seats </th>
                            <th>EDIT</th>
                            <th>DELETE</th>
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
                                <td><?php  echo $row['id']; ?></td>
                                <td><?php  echo $row['registration_number']; ?></td>
                                <td><?php  echo $row['capacity']; ?></td>
                                <td><?php  echo $row['seats']; ?></td>
                                <td>
                                    <form action="register_editb.php" method="post">
                                        <input type="hidden" name="edit_idb" value="<?php echo $row['id']; ?>">
                                        <button type="submit" name="edit_btnb" class="btn btn-success"> EDIT</button>
                                    </form>
                                </td>
                                <td>
                                    <form action="codeb.php" method="post">
                                        <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                                        <button type="submit" name="delete_btn" class="btn btn-danger"> DELETE</button>
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