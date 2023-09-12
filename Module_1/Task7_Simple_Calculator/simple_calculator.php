<?php
/*--- Including Header File and Coverter Class ---*/
    include'include/header.php';
    include'class/SimpleCalculator.php';

/*--- Taking input and passing to method ---*/
    if(isset($_POST['calculate']) && $_SERVER['REQUEST_METHOD'] == 'POST'){
        $result = SimpleCalculator::calculation($_POST);
        echo $_POST['number1'] + $_POST['number2'];
    }

?>

    <div class="container">
        <div class="row d-flex justify-content-center min-vh-100 m-5">
            <div class="col-lg-8 col-md-8 col-12 p-5">
            <!-- Card Start -->
                <div class="card rounded">
                    <div class="card-body p-3">
                    <!-- Card Title Start -->
                        <div class="card-title p-3 text-center">
                            <h3>Calculator</h3>
                        </div>
                    <!-- Card Title End -->

                    <!-- Form Start -->
                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                            <!-- Calculation Display -->
                            <div class="col-12 mb-2 px-2 py-2 rounded text-end" style="background: #888888;border: 1px solid #ddd">
                                <h4>
                                    <?php
                                        echo isset($result)? $_POST['number1']." ".$_POST['operator']." ".$_POST['number2']." = ".$result : 0;
                                    ?>
                                </h4>
                            </div>

                            <div class="row justify-content-center fs-5">
                            <!-- First Number From User -->
                                <div class="col-lg-6 col-md-6 col-12 mb-2">
                                    <label for="Number 1" class="form-label text-black-50 fw-semibold">First Number</label>
                                    <input type="number" name="number1" value = 0 class="form-control fs-5">
                                </div>

                            <!-- Second Number From User -->
                                <div class="col-lg-6 col-md-6 col-12 mb-2">
                                    <label for="Number 2" class="form-label text-black-50 fw-semibold">Second Number</label>
                                    <input type="number" name="number2" value = 0 class="form-control fs-5">
                                </div>

                            <!-- Calculation Operator -->
                                <div class="col-12">
                                    <label for="Number 2" class="form-label text-black-50 fw-semibold">Operation</label>
                                    <select name="operator" class="form-select fs-5">
                                        <option value="">Select Operator</option>
                                        <option value="+">Sum (+)</option>
                                        <option value="-">Subtraction (-)</option>
                                        <option value="/">Division (/)</option>
                                        <option value="*">Multiplication (*)</option>
                                        <option value="%">Modulas (%)</option>
                                    </select>
                                </div>
                                
                                <div class="col-12 mt-5">
                                    <button class="btn btn-success w-100 fs-5" type="submit" name="calculate">Calculate</button>
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