<?php
/*--- Including Header File and Coverter Class ---*/
    include'include/header.php';
    include'class/ComparisonTool.php';

/*--- Taking input and passing to method ---*/
    if(isset($_POST['compare']) && $_SERVER['REQUEST_METHOD'] == 'POST'){
        $result = ComparisonTool::compareNumbers($_POST);
    }

?>

    <div class="container">
        <div class="row d-flex justify-content-center min-vh-100 m-5">
            <div class="col-lg-8 col-md-8 col-12 p-2">
            <!-- Task Details Start -->
                <div class="rounded p-3 text-center">
                    <h2>Module 1 Assignment: Task 6</h2>
                </div>
            <!-- Task Details End -->

            <!-- Card Start -->
                <div class="card rounded">
                    <div class="card-body p-3">
                    <!-- Card Title Start -->
                        <div class="card-title p-3 text-center">
                            <h3>Comparison Tool</h3>
                        </div>
                    <!-- Card Title End -->

                    <!-- Validation Message Start -->
                    <?php
                        if(isset($result) && is_string($result)){
                            echo $result;
                        }
                    ?>
                    <!-- Validation Message End -->

                    <!-- Form Start -->
                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                            <div class="row justify-content-center fs-5">
                            <!-- First Number From User -->
                                <div class="col-lg-6 col-md-6 col-12 mb-2">
                                    <label for="Number 1" class="form-label text-black-50 fw-semibold">First Number</label>
                                    <input type="number" name="number1" class="form-control fs-5">
                                </div>

                            <!-- Second Number From User -->
                            <div class="col-lg-6 col-md-6 col-12 mb-2">
                                    <label for="Number 2" class="form-label text-black-50 fw-semibold">Second Number</label>
                                    <input type="number" name="number2" class="form-control fs-5">
                                </div>

                            <!-- Number Check Result Display -->
                            <?php if(isset($result) && !is_string($result)){ ?>    
                                <div class="col-12 text-center">
                                    <h4>
                                        <?php echo ($result == 1)? "{$_POST['number1']} is the Largest Number" : (($result == 2)? "{$_POST['number2']} is the Largest Number" : "Both numbers are equal!"); ?>
                                    </h4>
                                </div>
                            <?php } ?>
                                <div class="col-12 mt-5">
                                    <button class="btn btn-primary w-100 fs-5" type="submit" name="compare">Compare</button>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>