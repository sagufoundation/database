<?php 

    require_once('../connection.php');

    if(isset($_POST['submit'])) {

        $nama_lengkap = $_POST['nama_lengkap'];
        $nik = $_POST['nik'];        
        $kabkota = $_POST['kabkota'];        
        $program_beasiswa = $_POST['program_beasiswa'];        
        $lokasi_studi = $_POST['lokasi_studi'];        
        $folder_google_drive = $_POST['folder_google_drive'];        
        $universitas = $_POST['universitas'];        
        $jurusan = $_POST['jurusan'];        
        $tahun_masuk = $_POST['tahun_masuk'];        
        $negara_studi = $_POST['negara_studi'];        
        $status_kuliah = $_POST['status_kuliah'];        
        $keterangan = $_POST['keterangan'];        
                
        $result = mysqli_query($mysqli, "INSERT INTO siswa(nama_lengkap,nik,kabkota,program_beasiswa,lokasi_studi,folder_google_drive,universitas,jurusan,tahun_masuk,negara_studi,status_kuliah,keterangan) VALUES('$nama_lengkap','$nik','$kabkota','$program_beasiswa','$lokasi_studi','$folder_google_drive','$universitas','$jurusan','$tahun_masuk','$negara_studi','$status_kuliah','$keterangan')");

        header("Location: ../../admin-siswa.php");
    }

