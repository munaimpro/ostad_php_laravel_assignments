<!-- Header Start -->
<?php
    include("includes/header.php");

    /*-- User Update Process --*/
    if(isset($_GET['update']) && $_GET['update'] != NULL){
        $updateId = $_GET['update']; // Getting user id for update
        $data = file($filename); // Getting file data as array

        // file_put_contents($filename, $data);
        print_r($data);
        echo "<b>" . $data[$updateId] . "</b>";
        echo "<b>" . count($data) . "</b>";
        for($i = 0; $i < count($data); $i++){
            if($i == $updateId){
                echo "Single";
            }
        }
    }
?>
<!-- Header End -->

    <div class="container-fluid mt-5">
      <div class="row d-flex justify-content-center min-vh-100 m-1">
        <div class="col-12 p-2">
        <!-- Card Start -->
          <div class="card rounded overflow-hidden">
              <div class="card-header text-white fw-bold d-flex">
              <!-- Card Title Start -->
                  <h5 class="card-title p-2 me-auto mb-0 text-uppercase">Update User</h5>
                  <p class="card-title p-2 ms-auto mb-0 text-uppercase">Munaim Khan</p>
              <!-- Card Title End -->
              </div>

              <div class="card-body p-3">
                  <!-- Form Start -->
                  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                    <div class="row justify-content-center fs-5">
                    <?php
                      for($i = 0; $i < count($data); $i++){
                        if($i == $updateId){
                            $singleUserData = explode(",", $data[$i]);
                    ?>
                        <div class="col-12 mb-2">
                            <label for="firstName">First Name</label>
                            <input type="text" name="firstName" value="<?php echo $singleUserData[1]; ?>" class="form-control fs-5">
                        </div>
                    <?php } } ?>
                        
                        <div class="col-12 mb-2">
                            <label for="lastName">Last Name</label>
                            <input type="text" name="lastName" value="<?php echo $singleUserData[2]; ?>" class="form-control fs-5">
                        </div>

                        <div class="col-12 mb-2">
                            <label for="userName">Username</label>
                            <input type="text" name="userName" value="<?php echo $singleUserData[3]; ?>" class="form-control fs-5">
                        </div>

                        <div class="col-12 mb-2">
                            <label for="mailAddress">Email</label>
                            <input type="text" name="mailAddress" value="<?php echo $singleUserData[4]; ?>" class="form-control fs-5">
                        </div>

                        <div class="col-12 mb-2">
                          <label for="role">Role</label>
                          <select name="role" class="form-select fs-5">
                            <option value="Admin" <?php if($singleUserData[0] == "Admin"){ echo "selected"; } ?> >Admin</option>
                            <option value="User" <?php if($singleUserData[0] == "User"){ echo "selected"; } ?> >User</option>
                          </select>
                        </div>
                        
                        <div class="col-12 mt-5">
                            <button class="btn btn-primary shadow-none text-white w-100 fs-5" type="submit" name="update">Update</button>
                        </div>
                    <?php // } } ?>
                    </div>
                </form>
            <!-- Form End -->
              </div>
          </div>
        <!-- Card End -->
        </div>
      </div>
    </div>

<!-- Footer Start -->
<?php
    include("includes/footer.php");
?>
<!-- Footer End -->