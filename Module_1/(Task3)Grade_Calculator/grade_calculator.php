<?php
/*--- Including Header File and Coverter Class ---*/
    include'include/header.php';
    include'class/GradeCalculator.php';

/*--- Taking input and passing to method ---*/
    if(isset($_POST['calculate_grade']) && $_SERVER['REQUEST_METHOD'] == 'POST'){
        $average = GradeCalculator::calculate_grade($_POST);
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
                            <h3>Grade Calculator</h3>
                        </div>
                    <!-- Card Title End -->

                    <!-- Validation Message Start -->
                    <?php
                        if(isset($average) && is_string($average)){
                            echo $average;
                        }
                    ?>
                    <!-- Validation Message End -->

                    <!-- Form Start -->
                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                            <div class="row justify-content-center fs-5">
                            <!-- Test 1 Score -->
                                <div class="col-12 mb-2">
                                    <label for="Test 1 Score" class="form-label text-black-50 fw-semibold">Test 1 Score</label>
                                    <input type="number" name="score1" class="form-control fs-5">
                                </div>

                            <!-- Test 2 Score -->
                                <div class="col-12 mb-2">
                                    <label for="Test 2 Score" class="form-label text-black-50 fw-semibold">Test 2 Score</label>
                                    <input type="number" name="score2" class="form-control fs-5">
                                </div>
                            
                            <!-- Test 3 Score -->
                                <div class="col-12 mb-2">
                                    <label for="Test 3 Score" class="form-label text-black-50 fw-semibold">Test 3 Score</label>
                                    <input type="number" name="score3" class="form-control fs-5">
                                </div>

                            <!-- Average Score -->
                            <?php if(isset($average) && !is_string($average)){ ?>    
                                <div class="col-lg-6 col-md-6 col-12 mb-5 text-center">
                                    <label for="Average" class="form-label text-black-50 fw-semibold">Your Average Score</label>
                                    <h4><?php echo $average; ?></h4>
                                </div>

                            <!-- Acquired Grade -->
                                <div class="col-lg-6 col-md-6 col-12 mb-5 text-center">
                                    <label for="Average" class="form-label text-black-50 fw-semibold">Your Acquired Grade</label>
                                    <h4>
                                        <?php
                                            echo ($average >=80 && $average <= 100)? "A+" : (($average >=70 && $average < 80)? "A" : (($average >=50 && $average < 70)? "B" : (($average >=40 && $average < 50)? "C" : (($average >=30 && $average < 40)? "D" : "F" ))));
                                        ?>
                                    </h4>
                                </div>
                            <?php } ?>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 fs-5" type="submit" name="calculate_grade">Calculate Grade</button>
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