<?php 

    require_once('../connection.php');

    if(isset($_POST['edit'])) {

        $id = $_POST['id'];

        $nama_lengkap = $_POST['nama_lengkap'];
        $nik = $_POST['nik'];        
        $kabkota = $_POST['kabkota'];        
        $program_beasiswa = $_POST['program_beasiswa'];        
        $folder_google_drive = $_POST['folder_google_drive'];        
        $keterangan = $_POST['keterangan'];        
                
        $result = mysqli_query($mysqli, "UPDATE siswa SET nama_lengkap='$nama_lengkap',nik='$nik',kabkota='$kabkota',program_beasiswa='$program_beasiswa',folder_google_drive='$folder_google_drive',keterangan='$keterangan' WHERE id=$id");

        header("Location: ../../admin-siswa.php");
    }

