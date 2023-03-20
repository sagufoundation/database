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
                                <h1 class="fw-bold">Ubah Siswa</h1>
                            </div>

                            <div class="col-lg-2 text-end">
                                <a href="./admin-siswa.php" class="btn btn-lg btn-outline-dark rounded-0"><i class="fa-solid fa-times-rectangle me-1"></i> Close</a>
                            </div>

                        </div>

                        <div class="row">

                            <div class="col-lg-2 mb-5">

                                <h3 class="fw-bold">Picture</h3>    

                                <img src="./assets/images/photos/user.png" alt="Profile Picture" class="img-thumbnail w-100 mb-lg-3 p-lg-5">

                                <div>
                                    <a href="#" class="btn btn-sm btn-link-dark w-100" title="Update Picture"><i class="fa-solid fa-edit"></i> Update Picture</a>
                                </div>

                            </div>

                            <div class="col-lg-5 mb-5">

                                <h3 class="fw-bold">Bio</h3>                                
                                
                                <form action="./config/siswa/ubah.php" method="post" enctype="multipart/form-data">

                                    <input type="hidden" name="id" value="<?=$id?>">

                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <label for="nama_lengkap" class="fw-bold form-label">Nama Lengkap :</label> 
                                            <input type="text" class="form-control form-control-lg rounded-0" id="nama_lengkap" name="nama_lengkap" value="<?=$nama_lengkap?>">
                                        </li>
                                        <li class="list-group-item">
                                            <label for="nik" class="fw-bold form-label">NIK :</label> 
                                            <input type="text" class="form-control form-select-lg rounded-0" id="nik" name="nik" value="<?=$nik?>">
                                        </li>
                                        <!-- <li class="list-group-item">
                                            <label class="fw-bold form-label">Provinsi :</label> 
                                            <select name="provinsi" id="" class="form-select">
                                                <option hidden selected>Pilih</option>
                                                <option value="1">Papua</option>
                                                <option value="2">Papua Pengunungan</option>
                                                <option value="3">Papua Tengah</option>
                                                <option value="4">Papua Selatan</option>
                                            </select>
                                        </li>-->
                                        <li class="list-group-item">
                                            <label class="fw-bold form-label">Kabupaten/Kota : </label> 
                                            <select name="kabkota" id="" class="form-select form-select-lg rounded-0 text-uppercase">
                                                <option hidden selected>Pilih</option>
                                                <!-- PAPUA -->
                                                <option value="Kota Jayapura" <?php if($kabkota == 'Kota Jayapura') { echo 'Selected'; }?>>Kota Jayapura</option>
                                                <option value="Kabupaten Jayapura" <?php if($kabkota == 'Kabupaten Jayapura') { echo 'Selected'; }?>>Kabupaten Jayapura</option>
                                                <option value="Kabupaten Keerom" <?php if($kabkota == 'Kabupaten Keerom') { echo 'Selected'; }?>>Kabupaten Keerom</option>
                                                <option value="Kabupaten Sarmi" <?php if($kabkota == 'Kabupaten Sarmi') { echo 'Selected'; }?>>Kabupaten Sarmi</option> 
                                                <option value="Kabupaten Biak Numfor" <?php if($kabkota == 'Kabupaten Biak Numfor') { echo 'Selected'; }?>>Kabupaten Biak Numfor</option>
                                                <option value="Kabupaten Kepulauan Yapen" <?php if($kabkota == 'Kabupaten Kepulauan Yapen') { echo 'Selected'; }?>>Kabupaten Kepulauan Yapen</option> 
                                                <option value="Kabupaten Waropen" <?php if($kabkota == 'Kabupaten Waropen') { echo 'Selected'; }?>>Kabupaten Waropen</option> 

                                                <!-- PAPUA PEGUNUNGAN -->
                                                <option value="Kabupaten Yahukimo" <?php if($kabkota == 'Kabupaten Yahukimo') { echo 'Selected'; }?>>Kabupaten Yahukimo</option> 
                                                <option value="Kabupaten Yalimo" <?php if($kabkota == 'Kabupaten Yalimo') { echo 'Selected'; }?>>Kabupaten Yalimo</option> 
                                                <option value="Kabupaten Puncak" <?php if($kabkota == 'Kabupaten Puncak') { echo 'Selected'; }?>>Kabupaten Puncak</option> 
                                                <option value="Kabupaten Jayawijaya" <?php if($kabkota == 'Kabupaten Jayawijaya') { echo 'Selected'; }?>>Kabupaten Jayawijaya</option> 
                                                <option value="Kabupaten Lanny Jaya" <?php if($kabkota == 'Kabupaten Lanny Jaya') { echo 'Selected'; }?>>Kabupaten Lanny Jaya</option> 
                                                <option value="Kabupaten Pegunungan Bintang" <?php if($kabkota == 'Kabupaten Pegunungan Bintang') { echo 'Selected'; }?>>Kabupaten Pegunungan Bintang</option> 

                                                <!-- PAPUA TENGAH -->
                                                <option value="Kabupaten Intan Jaya" <?php if($kabkota == 'Kabupaten Intan Jaya') { echo 'Selected'; }?>>Kabupaten Intan Jaya</option> 
                                                <option value="Kabupaten Nabire" <?php if($kabkota == 'Kabupaten Nabire') { echo 'Selected'; }?>>Kabupaten Nabire</option> 
                                                <option value="Kabupaten Paniai" <?php if($kabkota == 'Kabupaten Paniai') { echo 'Selected'; }?>>Kabupaten Paniai</option> 
                                                <option value="Kabupaten Mimika" <?php if($kabkota == 'Kabupaten Mimika') { echo 'Selected'; }?>>Kabupaten Mimika</option> 
                                                <option value="Kabupaten Nabire" <?php if($kabkota == 'Kabupaten Nabire') { echo 'Selected'; }?>>Kabupaten Nabire</option> 
                                                <option value="Kabupaten Dogiyai" <?php if($kabkota == 'Kabupaten Dogiyai') { echo 'Selected'; }?>>Kabupaten Dogiyai</option> 

                                                <!-- PAPUA SELATAN -->
                                                <option value="Kabupaten Merauke" <?php if($kabkota == 'Kabupaten Merauke') { echo 'Selected'; }?>>Kabupaten Merauke</option> 
                                                <option value="Kabupaten Mappi" <?php if($kabkota == 'Kabupaten Mappi') { echo 'Selected'; }?>>Kabupaten Mappi</option> 

                                                <!-- PAPUA BARAT -->
                                                <option value="Kabupaten Manokwari" <?php if($kabkota == 'Kabupaten Manokwari') { echo 'Selected'; }?>>Kabupaten Manokwari</option> 

                                                <!-- PAPUA BARAT DAYA -->
                                                <option value="Kota Sorong" <?php if($kabkota == 'Kota Sorong') { echo 'Selected'; }?>>Kota Sorong</option> 

                                            </select>
                                        </li> 
                                        <li class="list-group-item">
                                            <label class="fw-bold form-label" for="program_beasiswa">Program Beasiswa :</label> 
                                            <select name="program_beasiswa" id="program_beasiswa" class="form-select form-select-lg rounded-0 text-uppercase">
                                                <option hidden selected>Pilih</option>
                                                <option value="SUP Vokasi 2020" <?php if($program_beasiswa == 'SUP Vokasi 2020') { echo 'Selected'; }?>>SUP Vokasi 2020</option>
                                                <option value="SUP 2021" <?php if($program_beasiswa == 'SUP 2021') { echo 'Selected'; }?>>SUP 2021</option>
                                            </select>
                                        </li>
                                        <li class="list-group-item">
                                            <label class="fw-bold form-label" for="lokasi_studi">Lokasi Studi :</label> 
                                            <select name="lokasi_studi" id="lokasi_studi" class="form-select form-select-lg rounded-0 text-uppercase">
                                                <option hidden selected>Pilih</option>
                                                <option value="Dalam Negeri" <?php if($lokasi_studi == 'Dalam Negeri') { echo 'Selected'; }?>>Dalam Negeri</option>
                                                <option value="Luar Negeri" <?php if($lokasi_studi == 'Luar Negeri') { echo 'Selected'; }?>>Luar Negeri</option>
                                                <option value="" <?php if($lokasi_studi == '') { echo 'Selected'; }?>>Tanpa Keterangan</option>
                                            </select>
                                        </li>
                                        <!-- <li class="list-group-item">
                                            <label class="fw-bold form-label">NIK :</label> 
                                            <input type="text" class="form-control" name="nik" value="90234090234">
                                        </li>
                                        <li class="list-group-item">
                                            <label class="fw-bold form-label">Keterangan :</label> 
                                            <textarea name="" rows="10" class="form-control">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta, distinctio ex consequuntur voluptate non similique. Incidunt ratione harum vitae doloremque!</textarea>
                                        </li> -->
                                        <li class="list-group-item">
                                            <label for="folder_google_drive" class="fw-bold form-label">Folder Google Drive :</label> 
                                            <input type="text" class="form-control form-control-lg rounded-0" id="folder_google_drive" name="folder_google_drive" value="<?=$folder_google_drive?>">
                                        </li>
                                        <li class="list-group-item">
                                            <button type="submit" class="btn btn-lg btn-dark rounded-0" name="edit">
                                                <i class="fa-solid fa-save"></i> Save
                                            </button>
                                            <!-- <a href="admin-student-trash.html" class="btn btn-sm btn-outline-dark"><i class="fa-solid fa-trash"></i></a> -->
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
              
    </div>
    <!-- .container end -->

<?php require_once('./partials/footer.php'); ?>