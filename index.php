<?php 
  session_start();
  require 'dbcon.php';
?>

<?php include('includes/header.php');?>
    <div class="cotainer mt-4">

      <?php include('message.php'); ?>

      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4>History Details
                <a href="history-create.php" class="btn btn-primary float-end">Registration</a>
                <a href="login.php" class="btn btn-primary float-end" style="margin-right: 6px; background-color: purple; border-color: purple;">Login</a>      
              </h4>
        </div>

        <div class="card-body">
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Password</th>
                <th>Action</th>
              </tr>
            </thead>
               <tbody>
                    <?php 
                       $query = "SELECT * FROM history";
                       $query_run = mysqli_query($con, $query);

                       if (mysqli_num_rows($query_run) > 0) 
                       {
                         foreach ($query_run as $history) 
                         {
                          //echo $student['name'];
                          ?>
                            <tr>
                              <td><?= $history['id'];?></td>
                              <td><?= $history['name'];?></td>
                              <td><?= $history['email'];?></td>
                              <td><?= $history['phone'];?></td>
                              <td><?= $history['address'];?></td>
                              <td><?= $history['password'];?></td>
                              
                              <td>
                                <a href="history-view.php?id=<?=$history['id']; ?>" class="btn btn-info btn-sm">View</a>
                                <a href="history-edit.php?id=<?=$history['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                <!-- <a href="history-edit.php?id=<?=$history['id']; ?>" class="btn btn-danger btn-sm">Delete</a>
                                <a href="" id="<?=$history['id'];?>" class="btn btn-danger btn-sm">Delete</a> -->
                                <form action="code.php" method="POST" class="d-inline">
                                  <button type="submit" name="delete_history" value="<?=$history['id'];?>" class="btn btn-danger btn-sm">Delete</button>
                                  
                                </form>
                              </td>
                              
                            </tr>

                          <?php
                         }
                       }
                       else
                       {
                         echo "<h5> No Record Found </h5";
                       }
                    ?>
                 <tr>
                   <td>1</td>
                 </tr>
               </tbody>
          </table>
          
        </div>
      </div>
    </div>
  </div>
</div>

<?php include('includes/footer.php');?>

   