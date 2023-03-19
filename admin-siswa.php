<?php require_once('config/siswa/semua.php'); ?>
<?php require_once('./partials/header.php'); ?>

    <!-- .container start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 p-lg-5">
                <div class="card shadow">
                    <div class="card-body">
                        <div class="mb-3">
                            <h1 class="fw-bold">DATABASE SISWA SAGU FOUNDATION</h1>
                            <p class="h3">Program Pembinaan Beasiswa Siswa Unggul Papua.</p>
                        </div>

                        <div class="row mb-3">

                            <!-- <div class="col">
                                <a href="admin-siswa-add.php" class="btn btn-primary mb-3 fw-bold rounded-0 text-uppercase" target="_blank">Tambah Siswa</a>
                            </div> -->
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
                                                <a class='btn btn-sm btn-dark rounded-0' href='admin-siswa-detail.php?id=$user_data[id]'>Detail</a>  
                                                <a class='btn btn-sm btn-outline-dark rounded-0' href='admin-siswa-edit.php?id=$user_data[id]'>Edit</a>  
                                                <a class='btn btn-sm btn-outline-danger rounded-0' href='config/siswa/hapus.php?id=$user_data[id]' data-bs-toggle='modal' data-bs-target='#siswa-$user_data[id]'>Delete</a>
                                              </td>
                                              </tr>
                                              
                                              

                                              <div class='modal fade' id='siswa-$user_data[id]' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                                                <div class='modal-dialog'>
                                                    <div class='modal-content'>
                                                    <div class='modal-header'>
                                                        <h1 class='modal-title fs-5' id='exampleModalLabel'>Yakin ingin menghapus data berikut?</h1>
                                                        <button type='button' class='btn-close rounded-0' data-bs-dismiss='modal' aria-label='Close'></button>
                                                    </div>
                                                    <div class='modal-body'>
                                                        " . $user_data['nama_lengkap'] . "
                                                    </div>
                                                    <div class='modal-footer'>
                                                        <button type='button' class='btn btn-secondary rounded-0' data-bs-dismiss='modal'>Close</button>
                                                        <form action='./config/siswa/hapus.php' method='post'>
                                                            <input type='hidden' name='id' value='$user_data[id]'>
                                                            <button type='submit' name='delete' class='btn btn-danger rounded-0'>Hapus</button>
                                                        </form>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
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