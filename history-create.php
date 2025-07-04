<?php 
session_start();
?>

<?php include('dbcon.php');?>
<?php include('includes/header.php');?>
    
    <div class="container mt-5">

     <?php include('message.php'); ?>

      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4>Registration
                <a href="index.php" class="btn btn-danger float-end">BACK</a>
                <a href="
                
                <?php
                  $query = "SELECT * FROM history";

                  $query_run = $con->query($query);
                  if ($query_run->num_rows > 0) 
                  {
                    echo "login.php";
                  }
                  else
                  {
                    echo "";
                  }
                ?>
                "
                class="btn btn-danger float-end" style="margin-right: 6px; background-color: purple; border-color: purple;"
                 onclick=
                 <?php
                   $query = "SELECT * FROM history";

                   $query_run = $con->query($query);
                   if ($query_run->num_rows > 0) 
                   {
                     echo "";
                   }
                   else
                   {
                     echo "myFunction()";
                   }
                ?>

                 
                 >LOGIN NOW</a>

                <script>
                    function myFunction() {
                    alert("Please, Complete Your Registration!");
                    }
                </script>

                
                 
              </h4>
            </div>
            <div class="card-body">
              <form action="code.php" method="POST">
                
              <div class="mb-3">
                <label>Name</label>
                <input type="text" name="name" class="form-control" required>
              </div>

              <div class="mb-3">
                <label>Email</label>
                <input type="email" name="email" class="form-control" required>
              </div>

              <div class="mb-3">
                <label>Phone</label>
                <input type="text" name="phone" class="form-control" required>
              </div>

              <div class="mb-3">
                <label>Address</label>
                <input type="text" name="address" class="form-control" required>
              </div>

              <div class="mb-3">
                <label>Password</label>
                <input type="password" name="password" class="form-control" required>
              </div>

              <div class="mb-3">
                <button type="submit" name="save" class="btn btn-primary" style="color:white;">Save</button>
              </div>
              </form>
              
            </div>
          </div>
          
        </div>
        
      </div>
      
    </div>

  <?php include('includes/footer.php');?>