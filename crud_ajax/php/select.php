<?php 
    include 'koneksiDB.php';

    $sql = 'SELECT * FROM tblbarang';
    $result = mysqli_query($koneksi, $sql);

    if ($result->num_rows > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $data[] = $row;
        }
    }

    echo json_encode($data);
?>