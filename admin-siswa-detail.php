<?php require_once('config/siswa/detail.php'); ?>

<?php require_once('./partials/header.php'); ?>

    <!-- .container start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 p-lg-5">
                <div class="card shadow">
                    <div class="card-body">
                        <div class="row mb-3">

                            <div class="col-lg-10">
                                <h1 class="fw-bold">Detail Siswa</h1>
                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur optio, quidem, placeat iste vero rem maxime beatae fugit voluptate provident quam est consequatur ea numquam quae odio dolores aperiam sequi.</p>
                            </div>

                            <div class="col-lg-2 text-end">
                                <a href="./admin-siswa.php" class="btn btn-sm btn-outline-dark"><i class="fa-solid fa-times-rectangle me-1"></i> Close</a>
                            </div>

                        </div>

                        <div class="row">

                            <div class="col-lg-2 mb-5">

                                <h3 class="fw-bold">Picture</h3>    

                                <img src="./assets/images/photos/1.png" alt="Profile Picture" class="img-thumbnail w-100 mb-lg-3 p-lg-5">

                                <div>
                                    <a href="#" class="btn btn-sm btn-link-dark w-100" title="Update Picture"><i class="fa-solid fa-edit"></i> Update Picture</a>
                                </div>

                            </div>

                            <div class="col-lg-5 mb-5">

                                <h3 class="fw-bold">Bio</h3>                                
                                
                                <form action="./admin-student-detail.html">

                                    <ul class="list-group">
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
                                    </ul>

                                </form>

                            </div>
                            <div class="col-lg-5" mb-5>

                                <h3 class="fw-bold">Documents</h3>

                                <ul class="list-group">
                                    <li class="list-group-item d-flex justify-content-between">
                                        Sponsor letter 
                                        <div>
                                            <a href="#" class="btn btn-sm btn-dark p-0 px-2"><i class="fa-solid fa-download me-1"></i></a>
                                            <a href="#" class="btn btn-sm btn-dark p-0 px-2"><i class="fa-solid fa-eye me-1"></i></a>
                                            <a href="#" class="btn btn-sm btn-outline-dark p-0 px-2"><i class="fa-solid fa-edit me-1"></i></a>
                                            <a href="#" class="btn btn-sm btn-outline-dark p-0 px-2"><i class="fa-solid fa-trash me-1"></i></a>
                                        </div>
                                        
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between">
                                        Offer letter
                                        <div>
                                            <a href="#" class="btn btn-sm btn-dark p-0 px-2"><i class="fa-solid fa-download me-1"></i></a>
                                            <a href="#" class="btn btn-sm btn-dark p-0 px-2"><i class="fa-solid fa-eye me-1"></i></a>
                                            <a href="#" class="btn btn-sm btn-outline-dark p-0 px-2"><i class="fa-solid fa-edit me-1"></i></a>
                                            <a href="#" class="btn btn-sm btn-outline-dark p-0 px-2"><i class="fa-solid fa-trash me-1"></i></a>
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between">
                                        CoE
                                        <div>
                                            <a href="#" class="btn btn-sm btn-dark p-0 px-2"><i class="fa-solid fa-download me-1"></i></a>
                                            <a href="#" class="btn btn-sm btn-dark p-0 px-2"><i class="fa-solid fa-eye me-1"></i></a>
                                            <a href="#" class="btn btn-sm btn-outline-dark p-0 px-2"><i class="fa-solid fa-edit me-1"></i></a>
                                            <a href="#" class="btn btn-sm btn-outline-dark p-0 px-2"><i class="fa-solid fa-trash me-1"></i></a>
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between">
                                        Tuition Payment Guide
                                        <div>
                                            <a href="#" class="btn btn-sm btn-dark p-0 px-2"><i class="fa-solid fa-download me-1"></i></a>
                                            <a href="#" class="btn btn-sm btn-dark p-0 px-2"><i class="fa-solid fa-eye me-1"></i></a>
                                            <a href="#" class="btn btn-sm btn-outline-dark p-0 px-2"><i class="fa-solid fa-edit me-1"></i></a>
                                            <a href="#" class="btn btn-sm btn-outline-dark p-0 px-2"><i class="fa-solid fa-trash me-1"></i></a>
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between">
                                        Progress Report From SAGU
                                        <div>
                                            <a href="#" class="btn btn-sm btn-dark p-0 px-2"><i class="fa-solid fa-download me-1"></i></a>
                                            <a href="#" class="btn btn-sm btn-dark p-0 px-2"><i class="fa-solid fa-eye me-1"></i></a>
                                            <a href="#" class="btn btn-sm btn-outline-dark p-0 px-2"><i class="fa-solid fa-edit me-1"></i></a>
                                            <a href="#" class="btn btn-sm btn-outline-dark p-0 px-2"><i class="fa-solid fa-trash me-1"></i></a>
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between">
                                        IELTS Result
                                        <div>
                                            <a href="#" class="btn btn-sm btn-dark p-0 px-2"><i class="fa-solid fa-download me-1"></i></a>
                                            <a href="#" class="btn btn-sm btn-dark p-0 px-2"><i class="fa-solid fa-eye me-1"></i></a>
                                            <a href="#" class="btn btn-sm btn-outline-dark p-0 px-2"><i class="fa-solid fa-edit me-1"></i></a>
                                            <a href="#" class="btn btn-sm btn-outline-dark p-0 px-2"><i class="fa-solid fa-trash me-1"></i></a>
                                        </div>
                                    </li>
                                </ul>
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