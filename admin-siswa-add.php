
<?php require_once('./partials/header.php'); ?>

    <!-- .container start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 p-lg-5">
                <div class="card shadow rounded-0">
                    <div class="card-header">
                        <div class="row mb-3">

                            <div class="col-lg-10">
                                <h1 class="fw-bold">Tambah Siswa</h1>
                            </div>

                            <div class="col-lg-2 text-end">
                                <a href="./admin-siswa.php" class="btn btn-lg btn-outline-dark rounded-0"><i class="fa-solid fa-times-rectangle me-1"></i> Close</a>
                            </div>

                        </div>
                        
                    </div>
                    <div class="card-body">

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
                                
                                <form action="./config/siswa/tambah.php" method="post" enctype="multipart/form-data">

                                    <ul class="list-group rounded-0">
                                        <li class="list-group-item">
                                            <label for="nama_lengkap" class="fw-bold form-label">Nama Lengkap :</label> 
                                            <input type="text" class="form-control form-control-lg rounded-0" id="nama_lengkap" name="nama_lengkap" value="">
                                        </li>
                                        <li class="list-group-item">
                                            <label for="nik" class="fw-bold form-label">NIK :</label> 
                                            <input type="text" class="form-control form-control-lg rounded-0" id="nik" name="nik" value="">
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
                                            <label class="fw-bold form-label">Kabupaten/Kota :</label> 
                                            <select name="kabkota" id="" class="form-select form-select-lg rounded-0 text-uppercase">
                                                <option hidden selected>Pilih</option>
                                                <!-- PAPUA -->
                                                <option value="Kota Jayapura">Kota Jayapura</option>
                                                <option value="Kabupaten Jayapura">Kabupaten Jayapura</option>
                                                <option value="Kabupaten Keerom">Kabupaten Keerom</option>
                                                <option value="Kabupaten Sarmi">Kabupaten Sarmi</option> 
                                                <option value="Kabupaten Biak Numfor">Kabupaten Biak Numfor</option> 
                                                <option value="Kabupaten Kepulauan Yapen">Kabupaten Kepulauan Yapen</option> 
                                                <option value="Kabupaten Waropen">Kabupaten Waropen</option> 

                                                <!-- PAPUA PEGUNUNGAN -->
                                                <option value="Kabupaten Yahukimo">Kabupaten Yahukimo</option> 
                                                <option value="Kabupaten Yalimo">Kabupaten Yalimo</option> 
                                                <option value="Kabupaten Puncak">Kabupaten Puncak</option> 
                                                <option value="Kabupaten Jayawijaya">Kabupaten Jayawijaya</option> 
                                                <option value="Kabupaten Lanny Jaya">Kabupaten Lanny Jaya</option> 
                                                <option value="Kabupaten Pegunungan Bintang">Kabupaten Pegunungan Bintang</option> 

                                                <!-- PAPUA TENGAH -->
                                                <option value="Kabupaten Intan Jaya">Kabupaten Intan Jaya</option> 
                                                <option value="Kabupaten Nabire">Kabupaten Nabire</option> 
                                                <option value="Kabupaten Paniai">Kabupaten Paniai</option> 
                                                <option value="Kabupaten Mimika">Kabupaten Mimika</option> 
                                                <option value="Kabupaten Nabire">Kabupaten Nabire</option> 
                                                <option value="Kabupaten Dogiyai">Kabupaten Dogiyai</option> 

                                                <!-- PAPUA SELATAN -->
                                                <option value="Kabupaten Merauke">Kabupaten Merauke</option> 
                                                <option value="Kabupaten Mappi">Kabupaten Mappi</option> 

                                            </select>
                                        </li> 
                                        <li class="list-group-item">
                                            <label class="fw-bold form-label">Program Beasiswa :</label> 
                                            <select name="provinsi" id="" class="form-select form-select-lg rounded-0 text-uppercase">
                                                <option hidden selected>Pilih</option>
                                                <option value="SUP Vokasi 2020">SUP Vokasi 2020</option>
                                                <option value="SUP 2021">SUP 2021</option>
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
                                            <input type="text" class="form-control form-control-lg rounded-0" id="folder_google_drive" name="folder_google_drive" value="">
                                        </li>
                                        <li class="list-group-item">
                                            <button type="submit" class="btn btn-dark btn-lg rounded-0" name="submit">
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