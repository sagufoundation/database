
<?php require_once('./partials/header-index.php'); ?>
    
    <div class="container-fluid text-uppercase">

        <!-- .row start -->
        <div class="row">
            <div class="col-lg-8 mx-auto p-5">
                <div class="card shadow">
                    <div class="card-header text-center p-lg-5">
                        <img src="./assets/images/logo-sagu-foundation.png" alt="Logo SAGU Foundation" width="150px">
                        <h1 class="fw-bold display-3">SAGU Foundation</h1>
                        <p class="h3 fw-bold mb-3">Database Siswa <br> Program Beasiswa SUP 2020 & SUP 2021</p>
                        <span class="rounded border bg-secondary text-light px-3 py-2">
                            <?=date("d/m/Y");?>
                        </span>
                    </div>
                    <div class="card-body p-0">
                        
                        <a href="siswa.php" target="_blank" class="btn btn-lg btn-dark py-4 fw-bold w-100 rounded-0">Tampilkan Data</a>

                    </div>
                </div>
            </div>
        </div>
        <!-- .row end -->

    </div>

<?php require_once('./partials/footer.php'); ?>