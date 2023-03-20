<?php 

    require_once('./config/connection.php');

    if(isset($_GET['filter']) && $_GET['filter'] != '') {

        $filter = $_GET['filter'];
    
        $siswa_semua = mysqli_query($mysqli, "SELECT * FROM siswa WHERE kabkota = '$filter' ORDER BY id ASC");
        

    } 
    
    elseif(isset($_GET['filter_program']) && $_GET['filter_program'] != '') {

        $filter_program = $_GET['filter_program'];
    
        $siswa_semua = mysqli_query($mysqli, "SELECT * FROM siswa WHERE program_beasiswa = '$filter_program' ORDER BY id ASC");
        
    } 

    else {
        $siswa_semua = mysqli_query($mysqli, "SELECT * FROM siswa ORDER BY id ASC");
    }   
