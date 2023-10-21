<!-- Header Start -->
<?php
    include("includes/header.php");
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
                        <div class="col-12 mb-2">
                            <input type="text" name="firstName" placeholder="First Name" class="form-control fs-5">
                        </div>
                        
                        <div class="col-12 mb-2">
                            <input type="text" name="lastName" placeholder="Last Name" class="form-control fs-5">
                        </div>

                        <div class="col-12 mb-2">
                            <input type="text" name="userName" placeholder="Username" class="form-control fs-5">
                        </div>

                        <div class="col-12 mb-2">
                            <input type="text" name="mailAddress" placeholder="Email" class="form-control fs-5">
                        </div>

                        <div class="col-12 mb-2">
                            <input type="text" name="userPassword" placeholder="Password" class="form-control fs-5">
                        </div>

                        <div class="col-12 mb-2">
                          <select name="role" class="form-select fs-5">
                            <option value="">Role1</option>
                            <option value="">Role1</option>
                            <option value="">Role1</option>
                          </select>
                        </div>
                        
                        <div class="col-12 mt-5">
                            <button class="btn btn-primary shadow-none text-white w-100 fs-5" type="submit" name="signup">Update</button>
                        </div>
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