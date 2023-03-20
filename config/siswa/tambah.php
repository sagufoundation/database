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
        $keterangan = $_POST['keterangan'];        
                
        $result = mysqli_query($mysqli, "INSERT INTO siswa(nama_lengkap,nik,kabkota,program_beasiswa,lokasi_studi,folder_google_drive,universitas,keterangan) VALUES('$nama_lengkap','$nik','$kabkota','$program_beasiswa','$lokasi_studi','$folder_google_drive','$universitas','$keterangan')");

        header("Location: ../../admin-siswa.php");
    }

