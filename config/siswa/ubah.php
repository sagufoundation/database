<?php 

    require_once('../connection.php');

    if(isset($_POST['edit'])) {

        $id = $_POST['id'];

        $nama_lengkap = $_POST['nama_lengkap'];
        $nik = $_POST['nik'];        
        $kabkota = $_POST['kabkota'];        
        $program_beasiswa = $_POST['program_beasiswa'];        
        $folder_google_drive = $_POST['folder_google_drive'];        
        $lokasi_studi = $_POST['lokasi_studi'];        
        $universitas = $_POST['universitas'];         
        $jurusan = $_POST['jurusan'];        
        $tahun_masuk = $_POST['tahun_masuk'];        
        $negara_studi = $_POST['negara_studi'];        
        $status_kuliah = $_POST['status_kuliah'];        
        $keterangan = $_POST['keterangan'];         
                
        $result = mysqli_query($mysqli, "UPDATE siswa SET nama_lengkap='$nama_lengkap',nik='$nik',kabkota='$kabkota',program_beasiswa='$program_beasiswa',folder_google_drive='$folder_google_drive',lokasi_studi='$lokasi_studi',universitas='$universitas',jurusan='$jurusan',tahun_masuk='$tahun_masuk',negara_studi='$negara_studi',status_kuliah='$status_kuliah',keterangan='$keterangan' WHERE id=$id");

        header("Location: ../../admin-siswa.php");
    }

