<?php require_once('config/siswa/semua.php'); ?>
<?php require_once('./partials/header.php'); ?>

    <!-- .container start -->
    <div class="container-fluid">

        <!-- REKAP JUMLAH DATA START-->
        <?php require_once('./config/total/index.php'); ?>
        <!-- REKAP JUMLAH DATA END -->

        <div class="row">
            <div class="col-12 px-lg-5">
                <div class="card rounded-0 shadow-sm">
                    <div class="card-body">

                        <div class="mb-3">
                            <a href="./admin-siswa-add.php" class="btn btn-dark btn-lg rounded-0"><i class="fa-solid fa-user-plus me-1"></i> Tambah Siswa</a>
                        </div>

                        <table id="scroll-vertical-datatable" class="table dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th width="1px" class="text-uppercase">No</th>
                                    <!-- <th width="100px" class="text-uppercase">Gambar</th> -->
                                    <th class="text-uppercase">Nama Lengkap</th>
                                    <th class="text-uppercase">Kota / Kabupaten</th>
                                    <th class="text-uppercase">Program Beasiswa</th>
                                    <th class="text-uppercase" >Lokasi Studi</th>
                                    <th class="text-uppercase" >NIK</th>
                                    <th class="text-uppercase" ></th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                $no = 1;
                                while ($user_data = mysqli_fetch_array($siswa_semua)) {
                                    echo "<tr>";
                                    echo "<td>" . $no++ . "</td>";
                                    // echo "<td> <img src='./assets/images/photos/user.png' alt='Profile Picture' class='img-fluid' width='30px'> </td>";
                                    echo "<td>" . $user_data['nama_lengkap'] . "</td>";
                                    echo "<td class='text-uppercase'>" . $user_data['kabkota'] . "</td>";
                                    echo "<td class='text-uppercase'>" . $user_data['program_beasiswa'] . "</td>";
                                    echo "<td class='text-uppercase'>" . $user_data['lokasi_studi'] . "</td>";
                                    echo "<td>" . $user_data['nik'] . "</td>";
                                    echo "<td>
                                            <a class='btn btn-sm btn-success rounded-0' href='".$user_data['folder_google_drive']."' target='_blank'><i class='fa-solid fa-folder me-1'></i> Folder Google Drive</a>  
                                            <a class='btn btn-sm btn-dark rounded-0' href='admin-siswa-detail.php?id=$user_data[id]'>Detail</a>  
                                            <a class='btn btn-sm btn-outline-dark rounded-0' href='admin-siswa-edit.php?id=$user_data[id]'>Ubah</a>  
                                            <a class='btn btn-sm btn-outline-danger rounded-0' href='config/siswa/hapus.php?id=$user_data[id]' data-bs-toggle='modal' data-bs-target='#siswa-$user_data[id]'>Hapus</a>
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

                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->
        </div>
        <!-- end row-->
    </div>
    <!-- .container end -->

<?php require_once('./partials/footer.php'); ?>