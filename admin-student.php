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

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
  

</head>

<body class="bg-light">

<div class="container-fluid">
        <nav class="p-lg-5">
            <a href="admin-dashboard.php" class="link-light btn btn-primary"><i class="fa-solid fa-home me-1"></i> DASHBOARD</a>
            <a href="admin-student.php" class="link-light btn btn-success"><i class="fa-solid fa-users me-1"></i> STUDENTS</a>
            <!-- <a href="#" class="link-light btn btn-primary"><i class="fa-solid fa-folder me-1"></i> DOCUMENTS</a> -->
            <!-- <a href="#" class="link-light btn btn-primary"><i class="fa-solid fa-folder me-1"></i> STATISTICS</a> -->

            <a href="logout.php" class="btn btn-outline-primary float-end"><i class="fa-solid fa-sign-out me-1"></i> LOG OUT</a>
        </nav>
    </div>
    <!-- .container end -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-12 p-lg-5">
                <div class="card shadow">
                    <div class="card-body">
                        <h1>STUDENTS</h1>
                       
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur optio, quidem, placeat iste vero rem maxime beatae fugit voluptate provident quam est consequatur ea numquam quae odio dolores aperiam sequi.</p>

                        <div class="table-responsive">
                        <table id="myTable" class="display">
                            <thead class="bg-dark text-light">
                                <tr>
                                    <th width="10px">NO</th>
                                    <th width="150px">PHOTO</th>
                                    <th>FIRST NAME</th>
                                    <th>MIDDLE NAME</th>
                                    <th>LAST NAME</th>
                                    <th>EMIAIL</th>
                                    <th >ADDRESS</th>
                                    <th ></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                            <td>
                                                <img src="./assets/images/photos/1.png" alt="Picture" class="img-fluid">
                                            </td>
                                            <td>Anastasia</td>
                                            <td>Febriani</td>
                                            <td>Yandong</td>
                                            <td>ayandong@sagufoundation.org</td>
                                            <td>Jalan Raya Sentani, Kelurahan Waena, Kelurahan Heram, Kota Jayapura, Papua.
                                            </td>
                                            <td class="">
                                                <a href="admin-student-detail.php" class="btn" title="Click to view">
                                                    <i class="fa-solid fa-eye"></i> Detail
                                                </a>
                                                <a href="admin-student-edit.php" class="btn" title="Click to edit">
                                                    <i class="fa-solid fa-edit"></i> Edit
                                                </a>
                                                <a href="admin-student-remove.php" class="btn" title="Click to move into trash">
                                                    <i class="fa-solid fa-trash"></i>
                                                </a>
                                            </td>
                                </tr>
                            </tbody>
                        </table>

                        </div>
                        <!-- .table-responsive end -->
                    </div>
                    <!-- .card-body end -->
                </div>
                <!-- .card end -->
            </div>
            <!-- .col end -->
        </div>
        <!-- .row end -->

        <div class="row">
            <footer class="col-lg-6 mx-auto text-center text-secondary">
                <div>
                    <a href="https://sagufoundation.org"
                        class="text-decoration-none link-secondary fw-bold">www.sagufoundation.org</a>
                </div>
                Copyright &copy; 2023 - All Right Reserved.
            </footer>
            <!-- .footer end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->


<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
<script>
    $(document).ready( function () {
    $('#myTable').DataTable();
    $('#myTable2').DataTable();
} );
</script>
</body>

</html>