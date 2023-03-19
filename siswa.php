<?php require_once('config/siswa/semua.php'); ?>
<?php require_once('./partials/header.php'); ?>

    <!-- .container start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 p-lg-5">
                <div class="card shadow rounded-0">
                    <div class="card-body">

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