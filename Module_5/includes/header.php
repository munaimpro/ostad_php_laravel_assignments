<!-- PHP Code Start -->
<?php
    // Procedure with user file
    $filename = "C:/xampp/htdocs/ostad_php_laravel_assignments/Module_5/datafile/user.txt";
    $fp = fopen($filename, "a+");
?>
<!-- PHP Code End -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Authentication and Role Management System</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container-fluid">
      <div class="row">
        <!-- Navigation Menu Start -->
        <nav class="navbar navbar-expand-lg bg-white shadow-sm fw-bold">
          <div class="container-fluid">
            <a class="navbar-brand" href="#"><h3>User Authentication and Role Management System</h3></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav ms-auto text-uppercase">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="admin_home.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="users.php">Users</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="admin_home.php?action=logout">Logout</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <!-- Navigation Menu End -->
      </div>
    </div>