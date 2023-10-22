<!-- Header Start -->
<?php
    include("includes/header.php");
    
  /*-- Getting file data as array --*/
    $data = file($filename);

  /*-- User Delete Process --*/
    if(isset($_GET['delete']) && $_GET['delete'] != NULL){
      $deleteId = $_GET['delete'];
      unset($data[$deleteId]);
      file_put_contents($filename, $data);
    }

  /*-- User Access Control Process --*/
    if($_SESSION['userRole'] == "User"){
      echo"<script>window.location='user_home.php'</script>";
    }

?>
<!-- Header End -->

    <div class="container-fluid my-5">
      <div class="row d-flex justify-content-center min-vh-100 m-1">
        <div class="col-12 p-2">
        <!-- Home Content Start -->
          <div class="card rounded">
              <div class="card-header text-white fw-bold d-flex">
              <!-- Card Title Start -->
                  <h5 class="card-title p-1 me-auto mb-0 text-uppercase">Our Users</h5>
              <!-- Card Title End -->
              </div>

              <div class="card-body p-3">
                  <table class="table w-100 text-center my-5">
                    <thead>
                        <tr>
                            <th>Serial No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                      $i = 0;
                      while($user = fgetcsv($fp)){
                        $i++;
                    ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $user[1] . " " . $user[2] ?></td>
                            <td><?php echo $user[4] ?></td>
                            <td><?php echo $user[0] ?></td>
                            <td>
                              <a href="update_user.php?update=<?php echo $i - 1; ?>"><button class="btn btn-primary">Update</button></a>
                              <a onclick="return confirm('Are you sure to Delete!')" href="return confirm('Do you want to delete this user?') ?delete=<?php echo $i - 1; ?>"><button class="btn btn-danger">Remove</button></a>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                  </table>
              </div>
          </div>
        <!-- Home Content End -->
        </div>
      </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>