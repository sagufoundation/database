
<?php require_once('./partials/header.php'); ?>

    <!-- .container start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 px-lg-5">
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
                                        <!-- input item end -->
                                        
                                        <li class="list-group-item">
                                            <label for="nik" class="fw-bold form-label">NIK :</label> 
                                            <input type="text" class="form-control form-control-lg rounded-0" id="nik" name="nik" value="">
                                        </li>
                                        <!-- input item end -->
                                        
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

                                                <!-- PAPUA BARAT -->
                                                <option value="Kabupaten Manokwari">Kabupaten Manokwari</option> 

                                                <!-- PAPUA BARAT DAYA -->
                                                <option value="Kota Sorong">Kota Sorong</option> 

                                            </select>
                                        </li> 
                                        <!-- input item end -->
                                        
                                        <li class="list-group-item">
                                            <label class="fw-bold form-label" for="provinsi">Program Beasiswa :</label> 
                                            <select name="provinsi" id="provinsi" class="form-select form-select-lg rounded-0 text-uppercase">
                                                <option hidden selected>Pilih</option>
                                                <option value="SUP Vokasi 2020">SUP Vokasi 2020</option>
                                                <option value="SUP 2021">SUP 2021</option>
                                            </select>
                                        </li>
                                        <!-- input item end -->
                                        
                                        <li class="list-group-item">
                                            <label class="fw-bold form-label" for="lokasi_studi">Lokasi Studi :</label> 
                                            <select name="lokasi_studi" id="lokasi_studi" class="form-select form-select-lg rounded-0 text-uppercase">
                                                <option hidden selected>Pilih</option>
                                                <option value="Dalam Negeri">Dalam Negeri</option>
                                                <option value="Luar Negeri">Luar Negeri</option>
                                                <option value="">Tanpa Keterangan</option>
                                            </select>
                                        </li>
                                        <!-- input item end -->
                                        
                                        <li class="list-group-item">
                                            <label for="universitas" class="fw-bold form-label">Sekolah/Universitas :</label> 
                                            <input type="text" class="form-control form-control-lg rounded-0" id="universitas" name="universitas" value="">
                                        </li>
                                        <!-- input item end -->
                                        
                                        <li class="list-group-item">
                                            <label for="jurusan" class="fw-bold form-label">Jurusan :</label> 
                                            <input type="text" class="form-control form-control-lg rounded-0" id="jurusan" name="jurusan" value="">
                                        </li>
                                        <!-- input item end -->
                                        
                                        <li class="list-group-item">
                                            <label class="fw-bold form-label" for="tahun_masuk">Tahun Masuk :</label> 
                                            <select name="tahun_masuk" id="tahun_masuk" class="form-select form-select-lg rounded-0 text-uppercase">
                                                <option hidden selected>Pilih</option>
                                                <option value="2020">2020</option>
                                                <option value="2021">2021</option>
                                                <option value="2022">2022</option>
                                                <option value="2023">2023</option>
                                            </select>
                                        </li>
                                        <!-- input item end -->
                                        
                                        <li class="list-group-item">
                                            <label class="fw-bold form-label" for="negara_studi">Negara Studi :</label> 
                                            <select name="negara_studi" id="negara_studi" class="form-select form-select-lg rounded-0 text-uppercase">
                                                <option hidden selected>Pilih</option>
                                                <option value="Indonesia">Indonesia</option>
                                                <option value="Australia">Australia</option>
                                            </select>
                                        </li>
                                        <!-- input item end -->
                                        
                                        <li class="list-group-item">
                                            <label class="fw-bold form-label" for="status_kuliah">Status :</label> 
                                            <select name="status_kuliah" id="status_kuliah" class="form-select form-select-lg rounded-0 text-uppercase">
                                                <option hidden selected>Pilih</option>
                                                <option value="1">Aktif Kuliah</option>
                                                <option value="2">Mengundurkan Diri</option>
                                                <option value="3">Selesai</option>
                                                <option value="4">Tidak Jelas</option>
                                                <option value="5">Meninggal Dunia</option>
                                            </select>
                                        </li>
                                        <!-- input item end -->
                                        
                                        <li class="list-group-item">
                                            <label class="fw-bold form-label" for="keterangan">Keterangan :</label> 
                                            <textarea name="keterangan" id="keterangan" rows="10" class="form-control form-control-lg rounded-0"></textarea>
                                        </li>
                                        <!-- input item end -->
                                        
                                        <li class="list-group-item">
                                            <label for="folder_google_drive" class="fw-bold form-label">Folder Google Drive :</label> 
                                            <input type="text" class="form-control form-control-lg rounded-0" id="folder_google_drive" name="folder_google_drive" value="">
                                        </li>
                                        <!-- input item end -->
                                        
                                        <li class="list-group-item">
                                            <button type="submit" class="btn btn-dark btn-lg rounded-0" name="submit">
                                                <i class="fa-solid fa-save"></i> Save
                                            </button>
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