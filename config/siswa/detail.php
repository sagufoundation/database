<?php 

    require_once('./config/connection.php');
    
    $id = $_GET['id'];
    $siswa_detail = mysqli_query($mysqli, "SELECT * FROM siswa WHERE id=$id");
    
    while($siswa = mysqli_fetch_array($siswa_detail))
    {
        $nama_lengkap = $siswa['nama_lengkap'];
        $nik = $siswa['nik'];
        $kabkota = $siswa['kabkota'];
        $program_beasiswa = $siswa['program_beasiswa'];
        $folder_google_drive = $siswa['folder_google_drive'];
        $lokasi_studi = $siswa['lokasi_studi'];
        $universitas = $siswa['universitas'];
        $jurusan = $siswa['jurusan'];
        $tahun_masuk = $siswa['tahun_masuk'];
        $negara_studi = $siswa['negara_studi'];
        $status_kuliah = $siswa['status_kuliah'];
        $keterangan = $siswa['keterangan'];
    }