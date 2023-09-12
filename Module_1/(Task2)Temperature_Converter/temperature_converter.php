<?php
/*--- Including Header File and Coverter Class ---*/
    include'include/header.php';
    include'class/TemperatureConverter.php';

/*--- Taking input and passing to method ---*/
    if(isset($_POST['convert']) && $_SERVER['REQUEST_METHOD'] == 'POST'){
        $result = TemperatureConverter::convert_temperature($_POST);
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
                            <h3>Temperature Converter</h3>
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
                                <div class="col-lg-6 col-md-6 col-12 mb-2">
                                    <label for="Degrees" class="form-label text-black-50 fw-semibold">Degrees</label>
                                    <input type="number" name="degree" class="form-control fs-5">
                                </div>
                                
                                <div class="col-lg-6 col-md-6 col-12 mb-2">
                                    <label for="Type" class="form-label text-black-50 fw-semibold">Type</label>
                                    <select name="type" class="form-select fs-5">
                                        <option value="">Select Type</option>
                                        <option value="farenheit">Farenheit To Celsius</option>
                                        <option value="celsius">Celsius To Farenheit</option>
                                    </select>
                                </div>
                                
                                <?php if(isset($result) && !is_string($result)){ ?>
                                <div class="col-12 mb-5">
                                    <label for="Result" class="form-label text-black-50 fw-semibold">
                                        <?php 
                                            echo ($_POST['type'] == "celsius")? "Celsius To Farenheit" : "Farenheit To Celsius";
                                        ?>
                                    </label>
                                    <input type="text" 
                                    value="<?php echo ($_POST['type'] == "celsius")? round($result)." °F" : round($result)." °C"; ?>" 
                                    class="form-control fs-5">
                                </div>
                                <?php } ?>
                                
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 fs-5" type="submit" name="convert">Convert</button>
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