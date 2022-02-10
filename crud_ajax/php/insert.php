<?php 
    include 'koneksiDB.php';

    $namabarang = $_POST['namabarang'];
    $hargabarang = $_POST['hargabarang'];
    $stok = $_POST['stok'];

    // echo $namabarang;

    $sql = "INSERT INTO tblbarang VALUES(null, '$namabarang', $hargabarang, $stok)";
    $result = mysqli_query($koneksi, $sql);

    if ($result) {
        $msg = [
            'status' => 1,
            'pesan' => 'data berhasil di input'
        ];
    }else{
        $msg = [
            'status' => 0,
            'pesan' => 'data gagal di input'
        ];
    }

    echo json_encode($msg);

?>