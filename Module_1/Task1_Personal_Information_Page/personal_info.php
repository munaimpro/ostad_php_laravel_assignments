<?php
/* Including header file */
    include'include/header.php';

/* Variable declearation and value assignment */
    $name = "Munaim Khan";
    $age = 23;
    $country = "Bangladesh";
    $brief_intro = "I am a Computer Science & Engineering student at Port City International University, Chittagong, currently pursuing my M.Sc. in CSE. I've been doing programming since 2020, with my first programming language being C. I truly enjoy web design and development, and I have a strong passion for it. I thrive on continuous learning and the excitement of discovering new things in the world of technology.";
?>

    <div class="container">
        <div class="row d-flex justify-content-center min-vh-100 m-5">
            <div class="col-lg-8 col-md-8 col-12 p-2">
            <!-- Task Details Start -->
                <div class="rounded p-3 text-center">
                    <h2>Module 1 Assignment: Task 1</h2>
                </div>
            <!-- Task Details End -->

            <!-- Card Start -->
                <div class="card rounded p-5">
                    <div class="card-body">
                        <div class="card-title text-center mb-3">
                            <h4>Personal Information</h4>
                        </div>
                        <div class="card-text">
                            <table class="">
                                <tbody>
                                    <tr>
                                        <td class="fw-bold">Name: </td>
                                        <td><?php echo $name; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold">Age: </td>
                                        <td><?php echo "{$age} years"; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold">Country: </td>
                                        <td><?php echo $country ?></td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold">Brief Introduction: </td>
                                        <td class="vertical-align-top"><?php echo $brief_intro; ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            <!-- Card End -->
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>