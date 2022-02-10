<?php 
    include 'koneksiDB.php';

    $id = $_POST['idbarang'];
    $namabarang = $_POST['namabarang'];
    $hargabarang = $_POST['hargabarang'];
    $stok = $_POST['stok'];

    $sql = "UPDATE tblbarang SET namabarang = '$namabarang', hargabarang = $hargabarang, stok = $stok WHERE idBarang = $id";
    $result = mysqli_query($koneksi, $sql);

    if ($result) {
        $msg = [
            'status' => 1,
            'pesan' => 'data berhasil di update'
        ];
    } else {
        $msg = [
            'status' => 0,
            'pesan' => 'data gagal di update'
        ];
    }

    echo json_encode($msg);

?>