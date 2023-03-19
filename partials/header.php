<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Database - SAGU Foundation</title>

    <meta property="og:locale" content="id_ID" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="SAGU Foundation" />
    <meta
      property="og:description" content="Database Siswa Program Beasiswa SUP 2020 & SUP 2021"
    />
    <meta property="og:url" content="https://database.sagufoundation.org" />
    <meta property="og:site_name" content="SAGU Foundation" />
    <meta
      property="og:image"
      content="https://database.sagufoundation.org/logo-sagufoundation.jpg"
    />

    <!-- Favicon  -->
    <link rel="icon" href="./favicon.png" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="./assets/css/style.css">

</head>

<body class="bg-light">

<!-- HEADER START -->
<div class="container-fluid text-uppercase p-lg-5">
    <div class="row">
        <div class="col-lg-1">
            <img src="./assets/images/logo-sagu-foundation.png" alt="Logo SAGU Foundation" class="img-fluid">
        </div>
        <div class="col-lg-8">
            <h1 class="fw-bold display-3">SAGU Foundation</h1>
            <p class="h3 fw-bold mb-3">Database Siswa Program Beasiswa SUP 2020 & SUP 2021</p>
            <span class="rounded border bg-secondary text-light px-3 py-2">
                <?=date("d/m/Y");?>
            </span>
        </div>
        <div class="col-lg-3">
            
            <div class="dropdown">
            <button class="btn btn-success btn-lg dropdown-toggle rounded-0 text-uppercase" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Berdasarkan Kota/Kabupaten
            </button>
            <ul class="dropdown-menu rounded-0">
                <!-- PAPUA -->
                <li><a class="dropdown-item text-uppercase" href="admin-siswa.php?filter=Kota Jayapura" target="_blank">Kota Jayapura</a></li>
                <li><a class="dropdown-item text-uppercase" href="admin-siswa.php?filter=Kabupaten Jayapura" target="_blank">Kabupaten Jayapura</a></li>
                <li><a class="dropdown-item text-uppercase" href="admin-siswa.php?filter=Kabupaten Keerom" target="_blank">Kabupaten Keerom</a></li>
                <li><a class="dropdown-item text-uppercase" href="admin-siswa.php?filter=Kabupaten Sarmi" target="_blank">Kabupaten Sarmi</a></li>
                <li><a class="dropdown-item text-uppercase" href="admin-siswa.php?filter=Kabupaten Biak Numfor" target="_blank">Kabupaten Biak Numfor</a></li>
                <li><a class="dropdown-item text-uppercase" href="admin-siswa.php?filter=Kabupaten Kepulauan Yapen" target="_blank">Kabupaten Biak Kepulauan Yapen</a></li>
                <li><a class="dropdown-item text-uppercase" href="admin-siswa.php?filter=Kabupaten Waropen" target="_blank">Kabupaten Waropen</a></li>

                <!-- PAPUA PEGUNUNGAN -->
                <li><a class="dropdown-item text-uppercase" href="admin-siswa.php?filter=Kabupaten Yahukimo" target="_blank">Kabupaten Yahukimo</a></li>
                <li><a class="dropdown-item text-uppercase" href="admin-siswa.php?filter=Kabupaten Yalimo" target="_blank">Kabupaten Yalimo</a></li>
                <li><a class="dropdown-item text-uppercase" href="admin-siswa.php?filter=Kabupaten Puncak" target="_blank">Kabupaten Puncak</a></li>
                <li><a class="dropdown-item text-uppercase" href="admin-siswa.php?filter=Kabupaten Jayawijaya" target="_blank">Kabupaten Jayawijaya</a></li>
                <li><a class="dropdown-item text-uppercase" href="admin-siswa.php?filter=Kabupaten Lanny Jaya" target="_blank">Kabupaten Lanny Jaya</a></li>
                <li><a class="dropdown-item text-uppercase" href="admin-siswa.php?filter=Kabupaten Pegunungan Bintang" target="_blank">Kabupaten Pegunungan Bintang</a></li>

                <!-- PAPUA TENGAH -->
                <li><a class="dropdown-item text-uppercase" href="admin-siswa.php?filter=Kabupaten Intan Jaya" target="_blank">Kabupaten Intan Jaya</a></li>
                <li><a class="dropdown-item text-uppercase" href="admin-siswa.php?filter=Kabupaten Nabire" target="_blank">Kabupaten Nabire</a></li>
                <li><a class="dropdown-item text-uppercase" href="admin-siswa.php?filter=Kabupaten Paniai" target="_blank">Kabupaten Paniai</a></li>
                <li><a class="dropdown-item text-uppercase" href="admin-siswa.php?filter=Kabupaten Mimika" target="_blank">Kabupaten Mimika</a></li>
                <li><a class="dropdown-item text-uppercase" href="admin-siswa.php?filter=Kabupaten Nabire" target="_blank">Kabupaten Nabire</a></li>
                <li><a class="dropdown-item text-uppercase" href="admin-siswa.php?filter=Kabupaten Dogiai" target="_blank">Kabupaten Dogiai</a></li>

                <!-- PAPUA SELATAN -->
                <li><a class="dropdown-item text-uppercase" href="admin-siswa.php?filter=Kabupaten Merauke" target="_blank">Kabupaten Merauke</a></li>
                <li><a class="dropdown-item text-uppercase" href="admin-siswa.php?filter=Kabupaten Mappi" target="_blank">Kabupaten Mappi</a></li>
            </ul>
        </div>
        </div>
    </div>

</div>
<!-- HEADER END -->