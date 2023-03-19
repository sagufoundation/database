<?php 

    // CONNECTION FOR PRODUCTION

    $databaseHost = 'localhost';
    $databaseName = 'u5463725_database';
    $databaseUsername = 'u5463725_database';
    $databasePassword = 'database2023';

    $mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 

    // // CONECTION FOR LOCAL DEVELOPMENT

    // $databaseHost = 'localhost';
    // $databaseName = 'database-beasiswa-sup';
    // $databaseUsername = 'root';
    // $databasePassword = '';

    // $mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
