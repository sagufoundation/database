        <div class="row">
            
            <!-- .col start -->
            <div class="col-lg-2 py-lg-5 ps-5  text-center">
                <div class="card">
                    <div class="card-body">
                        <?php 
                            require_once('./config/connection.php');
                            $result_sup_vokasi = mysqli_query($mysqli, "SELECT * FROM siswa WHERE program_beasiswa = 'SUP Vokasi 2020'");
                            $rows_sup_vokasi = mysqli_num_rows($result_sup_vokasi);
                        ?>
                        <p class="text-uppercase fw-bold">SUP Vokasi 2020</p>
                        <h1><span class="fw-bold"><?=$rows_sup_vokasi?></span> Siswa</h1>
                        <a href="#" class="btn btn-sm btn-outline-success fw-bold w-100"><i class="fa-solid fa-arrow-right me-2"></i>Tampilkan</a>
                    </div>
                </div>
            </div>
            <!-- .col end -->
            
            <!-- .col start -->
            <div class="col-lg-2 py-lg-5 ps-5  text-center">
                <div class="card">
                    <div class="card-body">
                        <?php 
                            require_once('./config/connection.php');
                            $result_sup_2021 = mysqli_query($mysqli, "SELECT * FROM siswa WHERE program_beasiswa = 'SUP 2021'");
                            $rows_sup_2021 = mysqli_num_rows($result_sup_2021);
                        ?>
                        <p class="text-uppercase fw-bold">SUP 2021</p>
                        <h1><span class="fw-bold"><?=$rows_sup_2021?></span> Siswa</h1>
                        <a href="#" class="btn btn-sm btn-outline-success fw-bold w-100"><i class="fa-solid fa-arrow-right me-2"></i>Tampilkan</a>
                    </div>
                </div>
            </div>
            <!-- .col end -->

        </div>