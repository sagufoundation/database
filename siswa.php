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

                        <div class="table-respoinsive">
                            <table id="scroll-vertical-datatable" class="table dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th width="1px" class="text-uppercase">No</th>
                                        <!-- <th width="100px" class="text-uppercase">Gambar</th> -->
                                        <th class="text-uppercase">Nama Lengkap</th>
                                        <th class="text-uppercase">Kota / Kabupaten</th>
                                        <th class="text-uppercase">NIK</th>
                                        <th class="text-uppercase">Program Beasiswa</th>
                                        <th class="text-uppercase">Lokasi Studi</th>
                                        <th class="text-uppercase">Sekolah/Universitas</th>
                                        <th class="text-uppercase">Jurusan</th>
                                        <th class="text-uppercase">Tahun Masuk</th>
                                        <th class="text-uppercase">Negara Studi</th>
                                        <th class="text-uppercase">Status Kuliah</th>
                                        <th class="text-uppercase">Keterangan</th>
                                        <th class="text-uppercase">Folder Google Drive</th>
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
                                        echo "<td>" . $user_data['nik'] . "</td>";
                                        echo "<td class='text-uppercase'>" . $user_data['program_beasiswa'] . "</td>";
                                        echo "<td class='text-uppercase'>" . $user_data['lokasi_studi'] . "</td>";
                                        echo "<td>" . $user_data['universitas'] . "</td>";
                                        echo "<td>" . $user_data['jurusan'] . "</td>";
                                        echo "<td>" . $user_data['tahun_masuk'] . "</td>";
                                        echo "<td>" . $user_data['negara_studi'] . "</td>";
                                        echo "<td>" . $user_data['status_kuliah'] . "</td>";
                                        echo "<td>" . $user_data['keterangan'] . "</td>";
                                        echo "<td>";
                                            if(isset($user_data['folder_google_drive']) && $user_data['folder_google_drive'] != '') {
                                                echo " <a class='btn btn-sm btn-success rounded-0' href='".$user_data['folder_google_drive']."' target='_blank'><i class='fa-solid fa-folder me-1'></i> Folder Google Drive</a>";
                                            }
                                        echo "</td>";
                                        echo "</tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>

                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->
        </div>
        <!-- end row-->
              
    </div>
    <!-- .container end -->

<?php require_once('./partials/footer.php'); ?>