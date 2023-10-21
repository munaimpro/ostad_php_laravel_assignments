<!-- Header Start -->
<?php
    include("includes/header.php");
    
    /*-- Calculating Total Admins and Users --*/
    $totalAdmin = 0;
    $totalUser  = 0;

    // while($line = fgetcsv($fp)){
    //   if($line[0] == "Admin"){
    //     $totalAdmin++;
    //   }
    //   if($line[0] == "User"){
    //     $totalUser++;
    //   }
    // }
?>
<!-- Header End -->

    <div class="container-fluid">
      <div class="row d-flex justify-content-center min-vh-100 m-1">
        <div class="col-12 p-2">
        <!-- Alert Message Start -->
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Hi Munaim!</strong> Welcome to your dashboard
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        <!-- Alert Message End -->
        
        <!-- User Details Section Start -->
          <div class="container-fluid mb-4">
              <div class="row text-uppercase">
                <h2>Munaim Khan</h2>
                <h5>Admin</h5>
              </div>
          </div>
        <!-- User Detail Section End -->

        <!-- Total User Section Start -->
          <div class="container mb-5 mt-5">
            <div class="row">
                <!-- Total User -->
                <div class="col-md-6 col-lg-6 col-12">
                    <div class="card">
                      <div class="card-body text-center">
                          <h1 class="display-1 fw-bold">
                            <?php echo $totalUser; ?>
                          </h1>
                      </div>
                      <div class="card-footer">
                        <p class="m-0 fw-bold">Users</p>
                      </div>
                    </div>
                </div>

                <!-- Total Admin -->
                <div class="col-md-6 col-lg-6 col-12">
                    <div class="card">
                      <div class="card-body text-center">
                          <h1 class="display-1 fw-bold">
                            <?php echo $totalAdmin; ?>
                          </h1>
                      </div>
                      <div class="card-footer">
                        <p class="m-0 fw-bold">Admins</p>
                      </div>
                    </div>
                </div>
            </div>
          </div>
        <!-- Total User Section End -->

        <!-- Home Content Start -->
          <div class="card rounded">
              <div class="card-header text-white fw-bold d-flex">
              <!-- Card Title Start -->
                  <h5 class="card-title p-1 me-auto mb-0 text-uppercase">Our Users</h5>
              <!-- Card Title End -->
              </div>

              <div class="card-body p-3">
                  <button class="btn btn-success float-end">New User</button>
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
                        if($user[0] == "Admin"){
                          $totalAdmin++; // Incrementing admin number decleared at the starting of the script
                        }
                        if($user[0] == "User"){
                          $totalUser++; // Incrementing user number decleared at the starting of the script
                        }
                    ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $user[1] . " " . $user[2] ?></td>
                            <td><?php echo $user[3] ?></td>
                            <td><?php echo $user[0] ?></td>
                            <td>
                              <a href=""><button class="btn btn-primary">Update</button></a>
                              <a href=""><button class="btn btn-danger">Remove</button></a>
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

<!-- Footer Start -->
<?php
    include("includes/footer.php");
?>
<!-- Footer End -->