<?php require_once('config/siswa/detail.php'); ?>

<?php require_once('./partials/header.php'); ?>

    <!-- .container start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 p-lg-5">
                <div class="card rounded-0 shadow">
                    <div class="card-body">
                        <div class="row mb-3">

                            <div class="col-lg-10">
                                <h1 class="fw-bold">Detail Siswa</h1>
                            </div>

                            <div class="col-lg-2 text-end">
                                <a href="./admin-siswa.php" class="btn btn-lg btn-outline-dark rounded-0"><i class="fa-solid fa-times-rectangle me-1"></i> Close</a>
                            </div>

                        </div>

                        <div class="row">

                            <div class="col-lg-2 mb-5">

                                <h3 class="fw-bold">Picture</h3>    

                                <img src="./assets/images/photos/user.png" alt="Profile Picture" class="img-thumbnail w-100 mb-lg-3 p-lg-5 rounded-0">

                                <div>
                                    <a href="#" class="btn btn-sm btn-link-dark w-100" title="Update Picture"><i class="fa-solid fa-edit"></i> Update Picture</a>
                                </div>

                            </div>

                            <div class="col-lg-5 mb-5">

                                <h3 class="fw-bold">Bio</h3>                                
                                
                                <form action="./admin-student-detail.html">

                                    <ul class="list-group rounded-0">
                                        <li class="list-group-item">
                                            <div>
                                                <span class="fw-bold form-label d-block">Nama Lengkap :</span> 
                                                <?=$nama_lengkap?>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div>
                                                <span class="fw-bold form-label d-block">NIK :</span> 
                                                <?=$nik?>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div>
                                                <span class="fw-bold form-label d-block">Kabupaten/Kota :</span> 
                                                <?=$kabkota?>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div>
                                                <span class="fw-bold form-label d-block">Program :</span> 
                                                <?=$program_beasiswa?>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div>
                                                <span class="fw-bold form-label d-block">Lokasi Studi :</span> 
                                                <?=$lokasi_studi?>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div>
                                                <span class="fw-bold form-label d-block">Sekolah/Universitas :</span> 
                                                <?=$universitas?>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div>
                                                <span class="fw-bold form-label d-block">Keterangan :</span> 
                                                <?=$keterangan?>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div>
                                                <span class="fw-bold form-label d-block">Folder Google Drive :</span> 
                                                <?php if(isset($folder_google_drive) && $folder_google_drive != ''){ ?> 
                                                    <a href="<?=$folder_google_drive?>" class="btn btn-outline-success rounded-0" target="_blank"><i class="fa-solid fa-folder me-1"></i> Tampilkan data di Google Drive</a>
                                                <?php } ?>
                                            </div>
                                        </li>
                                    </ul>

                                </form>

                            </div>

                        </div>

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

<?php require_once('./partials/footer.php'); ?>