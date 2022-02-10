<?php 
    include 'koneksiDB.php';

    if (isset($_GET['id'])) {
        $id =  $_GET['id'];

        $sql = "DELETE FROM kategori WHERE idKategori = $id";
        mysqli_query($koneksi, $sql);

        header("Location:http://localhost/crudPhp/crud.php");
    }
?>