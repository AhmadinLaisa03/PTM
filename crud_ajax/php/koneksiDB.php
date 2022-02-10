<?php 
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'tokoajax';

    $koneksi = mysqli_connect($host, $username, $password, $database);

    // if (mysqli_connect_errno()) {
    //     echo 'koneksi gagal'.mysqli_connection_error();
    // }
?>