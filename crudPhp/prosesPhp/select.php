<?php 
    include 'koneksiDB.php';

    $sql = "SELECT * FROM kategori";
    $result = mysqli_query($koneksi, $sql);

    if ($result->num_rows > 0) {
        while ($row = mysqli_fetch_assoc($result)){
            $data[] = $row;
        }
    }
?>