<?php 
session_start();
require 'dbcon.php';
?>

<?php include('includes/header.php');?>
    
    <div class="container mt-5">

     <?php include('message.php'); ?>

      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4>History Edit
                <a href="index.php" class="btn btn-danger float-end">BACK</a>
              </h4>
            </div>
            <div class="card-body">

              <?php 
                if (isset($_GET['id'])) 
                {
                  $history_id = mysqli_real_escape_string($con, $_GET['id']);
                  $query = "SELECT * FROM history WHERE id='$history_id'"; 
                  $query_run = mysqli_query($con, $query);

                  if (mysqli_num_rows($query_run) > 0) 
                  {
                    $history = mysqli_fetch_array($query_run);
                    ?>

              <form action="code.php" method="POST">
                <input type="hidden" name="history_id" value="<?=$history['id']; ?>">
                
              <div class="mb-3">
                <label>Name</label>
                <input type="text" name="name" value="<?=$history['name'];?>" class="form-control">
              </div>

              <div class="mb-3">
                <label>Email</label>
                <input type="email" name="email" value="<?=$history['email'];?>" class="form-control">
              </div>

              <div class="mb-3">
                <label>Phone</label>
                <input type="text" name="phone" value="<?=$history['phone'];?>" class="form-control">
              </div>

              <div class="mb-3">
                <label>Address</label>
                <input type="text" name="address" value="<?=$history['address'];?>" class="form-control">
              </div>

              <div class="mb-3">
                <label>Password</label>
                <input type="password" name="password" value="<?=$history['password'];?>" class="form-control">
              </div>


              <div class="mb-3">
                <button type="submit" name="update_history" class="btn btn-primary">Update</button>
              </div>
              </form>

              <?php 
            }
            else
            {
              echo "<h4>No Such ID Found</h4>";
            }
          }
            ?>
              
            </div>
          </div>
          
        </div>
        
      </div>
      
    </div>

<?php include('includes/footer.php');?>