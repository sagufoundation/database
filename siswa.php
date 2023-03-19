<?php require_once('config/siswa/semua.php'); ?>
<?php require_once('./partials/header.php'); ?>

    <!-- HEADER START -->
    <div class="container-fluid text-uppercase p-lg-5">
        <div class="row">
            <div class="col-lg-1">
                <img src="./assets/images/logo-sagu-foundation.png" alt="Logo SAGU Foundation" class="img-fluid">
            </div>
            <div class="col-lg-11">
                <h1 class="fw-bold display-3">SAGU Foundation</h1>
                <p class="h3 fw-bold">Database Siswa Program Beasiswa SUP 2020 & SUP 2021</p>
            </div>
        </div>

    </div>
    <!-- HEADER END -->

    <!-- .container start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 p-lg-5">
                <div class="card shadow">
                    <div class="card-body">

                        <div class="row mb-3">
                            
                            <div class="col">
                                <div class="dropdown">
                                    <button class="btn btn-success btn-lg dropdown-toggle rounded-0 text-uppercase" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Berdasarkan Kota/Kabupaten
                                    </button>
                                    <ul class="dropdown-menu">
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

                        <div class="table-responsive">

                            <table class="table align-middle table-bordered">
                                <thead class="bg-dark text-light">
                                    <tr>
                                        <th width="1px" class="text-uppercase">No</th>
                                        <th width="100px" class="text-uppercase">Gambar</th>
                                        <th class="text-uppercase">Nama Lengkap</th>
                                        <th class="text-uppercase">Kota / Kabupaten</th>
                                        <th class="text-uppercase">Program Beasiswa</th>
                                        <th class="text-uppercase" colspan="2">NIK</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    $no = 1;
                                    while ($user_data = mysqli_fetch_array($siswa_semua)) {
                                        echo "<tr>";
                                        echo "<td>" . $no++ . "</td>";
                                        echo "<td> <img src='./assets/images/photos/user.png' alt='Profile Picture' class='img-fluid'> </td>";
                                        echo "<td>" . $user_data['nama_lengkap'] . "</td>";
                                        echo "<td class='text-uppercase'>" . $user_data['kabkota'] . "</td>";
                                        echo "<td class='text-uppercase'>" . $user_data['program_beasiswa'] . "</td>";
                                        echo "<td>" . $user_data['nik'] . "</td>";
                                        echo "<td>
                                                <a class='btn btn-sm btn-success rounded-0' href='".$user_data['folder_google_drive']."' target='_blank'><i class='fa-solid fa-folder me-1'></i> Folder Google Drive</a>  
                                              </td>
                                              </tr>
                                            ";
                                    }
                                    ?>


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
              
    </div>
    <!-- .container end -->

<?php require_once('./partials/footer.php'); ?>