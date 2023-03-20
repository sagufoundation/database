        <div class="row">

            <!-- .col start -->
            <div class="col-lg-2 py-lg-5 ps-5 text-center">
                <div class="card rounded-0 shadow-sm <?php if (!isset($_GET['filter_program'])) {
                                                            echo 'bg-dark text-light';
                                                        } ?>">
                    <div class="card-body">
                        <?php
                        require_once('./config/connection.php');
                        $rows_semua_siswa = mysqli_query($mysqli, "SELECT * FROM siswa");
                        $rows_semua_siswa = mysqli_num_rows($rows_semua_siswa);
                        ?>
                        <p class="text-uppercase fw-bold">Total Semua Siswa</p>
                        <h1><span class="fw-bold"><?= $rows_semua_siswa ?></span> Siswa</h1>
                        <a href="./siswa.php" class="btn link-success btn-sm fw-bold w-100" title="Saat ini link belum berfungsi"><i class="fa-solid fa-arrow-right me-2"></i>Tampilkan</a>
                    </div>
                </div>
            </div>
            <!-- .col end -->

            <!-- .col start -->
            <div class="col-lg-2 py-lg-5 ps-5 text-center">
                <div class="card rounded-0 shadow-sm <?php if (isset($_GET['filter_program']) && $_GET['filter_program'] == 'SUP Vokasi 2020') {
                                                            echo 'bg-dark text-light';
                                                        } ?>">
                    <div class="card-body">
                        <?php
                        require_once('./config/connection.php');
                        $result_sup_vokasi = mysqli_query($mysqli, "SELECT * FROM siswa WHERE program_beasiswa = 'SUP Vokasi 2020'");
                        $rows_sup_vokasi = mysqli_num_rows($result_sup_vokasi);
                        ?>
                        <p class="text-uppercase fw-bold">SUP Vokasi 2020</p>
                        <h1><span class="fw-bold"><?= $rows_sup_vokasi ?></span> Siswa</h1>
                        <a href="?filter_program=SUP Vokasi 2020" class="btn link-success btn-sm fw-bold w-100" title="Saat ini link belum berfungsi"><i class="fa-solid fa-arrow-right me-2"></i>Tampilkan</a>
                    </div>
                </div>
            </div>
            <!-- .col end -->

            <!-- .col start -->
            <div class="col-lg-2 py-lg-5 ps-5 text-center">
                <div class="card rounded-0 shadow-sm <?php if (isset($_GET['filter_program']) && $_GET['filter_program'] == 'SUP 2021') {
                                                            echo 'bg-dark text-light';
                                                        } ?>">
                    <div class="card-body">
                        <?php
                        require_once('./config/connection.php');
                        $result_sup_2021 = mysqli_query($mysqli, "SELECT * FROM siswa WHERE program_beasiswa = 'SUP 2021'");
                        $rows_sup_2021 = mysqli_num_rows($result_sup_2021);
                        ?>
                        <p class="text-uppercase fw-bold">SUP 2021</p>
                        <h1><span class="fw-bold"><?= $rows_sup_2021 ?></span> Siswa</h1>
                        <a href="?filter_program=SUP 2021" class="btn link-success btn-sm fw-bold w-100" title="Saat ini link belum berfungsi"><i class="fa-solid fa-arrow-right me-2"></i>Tampilkan</a>
                    </div>
                </div>
            </div>
            <!-- .col end -->

        </div>

        <div class="row">
            <div class="col-12 pb-lg-5 px-5 text-center">

                <div class="card">
                    <div class="card-body d-flex gap-3">

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Dalam Negeri" id="dalam-neger">
                            <label class="form-check-label" for="dalam-neger">
                                Dalam Negeri
                            </label>
                        </div>      

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Luar Negeri" id="luar-negeri">
                            <label class="form-check-label" for="luar-negeri">
                                Luar Negeri
                            </label>
                        </div>                  

                    </div>
                </div>

            </div>
        </div>