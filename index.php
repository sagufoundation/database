<?php
 require 'conn.php';
 session_start();
if(isset($_SESSION["login"])){
echo"
      <script>
        window.location = 'admin-dashboard.php'
      </script>
      ";
     exit;
}

require 'conn.php';
if(isset($_POST["login"])) {
	$email = $_POST["email"];
	$password = $_POST["password"];
	$result = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");

// Cek username 
	if (mysqli_num_rows($result) === 1) {
  // 
  //cek password
		$row = mysqli_fetch_assoc($result);
		if($password === $row["password"])
     
    {
       // Set session
      $_SESSION["login"]=true;
      echo"
      <script>
             window.location = 'admin-dashboard.php'
      </script>
      ";
      exit; 
    }else{
                echo"
                <script>
                alert('email atau password salah !!')
                </script>
                ";
    }
	 }
    else
    {
            echo"
            <script>
            alert('email atau password salah !!')
            </script>
            ";
        }
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
    
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto p-5">
                <div class="card shadow">
                    <div class="card-header text-center p-lg-5">
                        <img src="./assets/images/logo-sagu-foundation.png" alt="Logo SAGU Foundation" width="150px">
                        <h1>SAGU Connect</h1>
                        <p>an Online Database System in SAGU Foundation</p>
                    </div>
                    <div class="card-body p-lg-5">
                        
                        <form action="" method="post">

                            <div class="mb-3">
                                <input type="text" class="form-control form-control-lg" placeholder="email" value="" name="email">
                            </div>

                            <div class="mb-3">
                                <input type="password" class="form-control form-control-lg" placeholder="password" value="" name="password">
                            </div>

                            <div class="mb-3">
                                <button type="submit"  name="login" class="btn btn-primary btn-lg w-100">
                                    <i class="fa-solid fa-sign-in me-1"></i> LOG IN
                                </button>
                            </div>

                            <p class="text-muted">
                                Forgot your username or password? <a href="#" class="fw-bold p-0 text-decoration-none link-dark" target="_blank">Send a message</a>
                            </p>

                        </form>

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