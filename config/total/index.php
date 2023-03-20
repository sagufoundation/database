        <div class="row">

            <!-- .col start -->
            <div class="col-lg-2 py-lg-5 ps-5 text-center">
                <div class="card rounded-0 shadow-sm <?php if (!isset($_GET['filter_program'])) { echo 'bg-dark text-light'; } ?>">
                    <div class="card-body">
                        <?php
                            require_once('./config/connection.php');
                            $rows_semua_siswa = mysqli_query($mysqli, "SELECT * FROM siswa");
                            $rows_semua_siswa = mysqli_num_rows($rows_semua_siswa);
                        ?>
                        <p class="text-uppercase fw-bold">Total Semua Siswa</p>
                        <h1><span class="fw-bold"><?= $rows_semua_siswa ?></span> Siswa</h1>
                        <a href="./siswa.php" class="btn link-success btn-sm fw-bold w-100" title="Saat ini link belum berfungsi"><i class="fa-solid fa-arrow-right me-2"></i>Tampilkan</a>

                        <div class="mt-2">
                            <div class="d-block border mb-1 py-1 d-flex justify-content-between px-2 <?php if (!isset($_GET['filter_program'])) { echo 'bg-light text-dark'; } ?>">

                                <?php
                                    require_once('./config/connection.php');
                                    $rows_dalam_engeri = mysqli_query($mysqli, "SELECT * FROM siswa WHERE lokasi_studi ='Dalam Negeri'");
                                    $rows_dalam_engeri = mysqli_num_rows($rows_dalam_engeri);
                                ?>
                                Dalam Negeri <span class="fw-bold badge bg-dark rounded-0"><?=$rows_dalam_engeri?></span>
                            </div>
                            <div class="d-block border mb-1 py-1 d-flex justify-content-between px-2 <?php if (!isset($_GET['filter_program'])) { echo 'bg-light text-dark'; } ?>">
                                <?php
                                    require_once('./config/connection.php');
                                    $rows_luar_negeri = mysqli_query($mysqli, "SELECT * FROM siswa WHERE lokasi_studi ='Luar Negeri'");
                                    $rows_luar_negeri = mysqli_num_rows($rows_luar_negeri);
                                ?>
                                Luar Negeri <span class="fw-bold badge bg-dark rounded-0"><?=$rows_luar_negeri?></span>
                            </div>
                            <div class="d-block border mb-1 py-1 d-flex justify-content-between px-2 <?php if (!isset($_GET['filter_program'])) { echo 'bg-light text-dark'; } ?>">
                                <?php
                                    require_once('./config/connection.php');
                                    $rows_luar_negeri = mysqli_query($mysqli, "SELECT * FROM siswa WHERE lokasi_studi !='Luar Negeri' AND  lokasi_studi !='Dalam Negeri'");
                                    $rows_luar_negeri = mysqli_num_rows($rows_luar_negeri);
                                ?>
                                Tanpa Keterangan <span class="fw-bold badge bg-dark rounded-0"><?=$rows_luar_negeri?></span>
                            </div>
                        </div>

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

                        <div class="mt-2">
                            <div class="d-block border mb-1 py-1 d-flex justify-content-between px-2 <?php if (isset($_GET['filter_program'])) { echo 'bg-light text-dark'; } ?>">
                                <?php
                                    require_once('./config/connection.php');
                                    $rows_dalam_engeri = mysqli_query($mysqli, "SELECT * FROM siswa WHERE lokasi_studi ='Dalam Negeri' AND program_beasiswa = 'SUP Vokasi 2020'");
                                    $rows_dalam_engeri = mysqli_num_rows($rows_dalam_engeri);
                                ?>
                                Dalam Negeri : <span class="fw-bold badge bg-dark rounded-0"><?=$rows_dalam_engeri?></span>
                            </div>
                            <div class="d-block border mb-1 py-1 d-flex justify-content-between px-2 <?php if (isset($_GET['filter_program'])) { echo 'bg-light text-dark'; } ?>">
                                <?php
                                    require_once('./config/connection.php');
                                    $rows_luar_negeri = mysqli_query($mysqli, "SELECT * FROM siswa WHERE lokasi_studi ='Luar Negeri' AND program_beasiswa = 'SUP Vokasi 2020'");
                                    $rows_luar_negeri = mysqli_num_rows($rows_luar_negeri);
                                ?>
                                Luar Negeri : <span class="fw-bold badge bg-dark rounded-0"><?=$rows_luar_negeri?></span>
                            </div>
                            <div class="d-block border mb-1 py-1 d-flex justify-content-between px-2 <?php if (isset($_GET['filter_program'])) { echo 'bg-light text-dark'; } ?>">
                                <?php
                                    require_once('./config/connection.php');
                                    $rows_luar_negeri = mysqli_query($mysqli, "SELECT * FROM siswa WHERE lokasi_studi !='Luar Negeri' AND  lokasi_studi !='Dalam Negeri' AND program_beasiswa = 'SUP Vokasi 2020'");
                                    $rows_luar_negeri = mysqli_num_rows($rows_luar_negeri);
                                ?>
                                Tanpa Keterangan : <span class="fw-bold badge bg-dark rounded-0"><?=$rows_luar_negeri?></span>
                            </div>
                        </div>

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

                        <div class="mt-2">
                            <div class="d-block border mb-1 py-1 d-flex justify-content-between px-2 <?php if (isset($_GET['filter_program'])) { echo 'bg-light text-dark'; } ?>">
                                <?php
                                    require_once('./config/connection.php');
                                    $rows_dalam_engeri = mysqli_query($mysqli, "SELECT * FROM siswa WHERE lokasi_studi ='Dalam Negeri' AND program_beasiswa = 'SUP 2021'");
                                    $rows_dalam_engeri = mysqli_num_rows($rows_dalam_engeri);
                                ?>
                                Dalam Negeri : <span class="fw-bold badge bg-dark rounded-0"><?=$rows_dalam_engeri?></span>
                            </div>
                            <div class="d-block border mb-1 py-1 d-flex justify-content-between px-2 <?php if (isset($_GET['filter_program'])) { echo 'bg-light text-dark'; } ?>">
                                <?php
                                    require_once('./config/connection.php');
                                    $rows_luar_negeri = mysqli_query($mysqli, "SELECT * FROM siswa WHERE lokasi_studi ='Luar Negeri' AND program_beasiswa = 'SUP 2021'");
                                    $rows_luar_negeri = mysqli_num_rows($rows_luar_negeri);
                                ?>
                                Luar Negeri : <span class="fw-bold badge bg-dark rounded-0"><?=$rows_luar_negeri?></span>
                            </div>
                            <div class="d-block border mb-1 py-1 d-flex justify-content-between px-2 <?php if (isset($_GET['filter_program'])) { echo 'bg-light text-dark'; } ?>">
                                <?php
                                    require_once('./config/connection.php');
                                    $rows_luar_negeri = mysqli_query($mysqli, "SELECT * FROM siswa WHERE lokasi_studi !='Luar Negeri' AND  lokasi_studi !='Dalam Negeri' AND program_beasiswa = 'SUP 2021'");
                                    $rows_luar_negeri = mysqli_num_rows($rows_luar_negeri);
                                ?>
                                Tanpa Keterangan : <span class="fw-bold badge bg-dark rounded-0"><?=$rows_luar_negeri?></span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- .col end -->

        </div>

