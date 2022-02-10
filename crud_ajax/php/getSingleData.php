<?php 
    include 'koneksiDB.php';

    $idbarang = $_POST['idbarang'];

    $sql = "SELECT * FROM tblbarang WHERE idBarang = $idbarang";
    $result = mysqli_query($koneksi, $sql);

    $data = mysqli_fetch_array($result);

    echo json_encode($data);
?>