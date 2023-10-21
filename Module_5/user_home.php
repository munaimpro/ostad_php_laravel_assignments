<!-- Header Start -->
<?php
    include("includes/header.php");
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
        
        <!-- User Details Start -->
          <div class="container-fluid mb-4">
              <div class="row text-uppercase">
                <h2>Munaim Khan</h2>
                <h5>Admin</h5>
              </div>
          </div>
        <!-- User Detail End -->

        <!-- Total User Start -->
          <div class="container mb-5 mt-5">
            <div class="row">
                <!-- Total User -->
                <div class="col-md-6 col-lg-6 col-12">
                    <div class="card">
                      <div class="card-body text-center">
                          <h1 class="display-1 fw-bold">6</h1>
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
                          <h1 class="display-1 fw-bold">6</h1>
                      </div>
                      <div class="card-footer">
                        <p class="m-0 fw-bold">Admins</p>
                      </div>
                    </div>
                </div>
            </div>
          </div>
        <!-- Total User End -->

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
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Firstname Lastname</td>
                            <td>email@email.com</td>
                            <td>role1</td>
                        </tr>

                        <tr>
                            <td>1</td>
                            <td>Firstname Lastname</td>
                            <td>email@email.com</td>
                            <td>role1</td>
                        </tr>
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