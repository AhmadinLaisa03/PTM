<?php 
    include 'koneksiDB.php';

    $id = $_POST['idbarang'];

    $sql = "DELETE FROM tblbarang WHERE idBarang = $id";
    $result = mysqli_query($koneksi, $sql);

    if ($result) {
        $msg = [
            'status' => 1,
            'pesan' => 'data berhasil di hapus'
        ];
    } else {
        $msg = [
            'status' => 0,
            'pesan' => 'data gagal di hapus'
        ];
    }

    echo json_encode($msg);
?>