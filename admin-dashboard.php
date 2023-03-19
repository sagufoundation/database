<?php
    session_start();
    if(!isset($_SESSION["login"])){
      echo"
          <script>
    
                 window.location = 'index.php'
          </script>
          ";
          exit;
    }

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Database - SAGU Foundation</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="./assets/css/style.css">

</head>

<body class="bg-light">

    <div class="container-fluid">
        <nav class="p-lg-5">
            <a href="admin-dashboard.php" class="link-light btn btn-success"><i class="fa-solid fa-home me-1"></i> DASHBOARD</a>
            <a href="admin-student.php" class="link-light btn btn-primary"><i class="fa-solid fa-users me-1"></i> STUDENTS</a>
            <!-- <a href="admin-statistics.php" class="link-light btn btn-primary"><i class="fa-solid fa-folder me-1"></i> DOCUMENTS</a>
            <a href="admin-statistics.php" class="link-light btn btn-primary"><i class="fa-solid fa-folder me-1"></i> STATISTICS</a> -->

            <a href="logout.php" class="btn btn-outline-primary float-end"><i class="fa-solid fa-sign-out me-1"></i> LOG OUT</a>
        </nav>
    </div>
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 p-lg-5">
                <div class="card shadow">
                    <div class="card-body">
                        <h1>DASHBOARD</h1>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur optio, quidem, placeat iste vero rem maxime beatae fugit voluptate provident quam est consequatur ea numquam quae odio dolores aperiam sequi.
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <footer class="col-lg-6 mx-auto text-center text-secondary">
                <div>
                    <a href="https://sagufoundation.org" class="text-decoration-none link-secondary fw-bold">www.sagufoundation.org</a>
                </div>
                Copyright &copy; 2023 - All Right Reserved.
            </footer>
        </div>
    </div>

</body>

</html>