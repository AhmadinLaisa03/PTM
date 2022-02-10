<?php
include 'koneksiDB.php';

if (isset($_GET['id'])) {
    $id =  $_GET['id'];

    $sql = "SELECT * FROM kategori WHERE idKategori = $id";
    $data = mysqli_query($koneksi, $sql);

    if ($data->num_rows > 0) {
        $result = mysqli_fetch_assoc($data);
        // print_r($result);
    }

    // print_r($data);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD php | update</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            font-size: 20px;
        }

        .sectA,
        .sectB {
            margin: 10px;
        }

        .sectA h1 {
            font-size: 40px;
        }

        .sectA a {
            display: inline-block;
            margin-top: -40px;
        }

        .tabel th,
        td {
            padding: 10px;
        }

        .kategori-input {
            margin-left: 20px;
            width: 200px;
            height: 30px;
        }

        .desk-input {
            margin-left: 15px;
            width: 200px;
            height: 30px;
        }

        .input-kategori {
            margin-bottom: 20px;
        }

        .submit {
            margin-top: 10px;
        }

        .btn {
            width: 90px;
            height: 40px;
            border-radius: 10px;
            border: none;
            padding-bottom: 4px;
        }

        .btn-green {
            background-color: green;
        }

        .text-white {
            color: white;
        }
    </style>
</head> 

<body>
    <div class="container">
        <section class="sectA">
            <h1 class="judul">
                Update Kategori
            </h1>
        </section>
        <section class="sectB">
            <form action="" method="post">
                <input type="hidden" name="idkategori" value="<?php echo $result['idKategori'] ?>">
                <div class="input-kategori">
                    <label class="kategori-label" for="kategori">Kategori</label>
                    <input class="kategori-input" type="text" name="kategori" id="kategori" value="<?php echo $result['kategoriBuku'] ?>">
                </div>
                <div class="input-deskBuku">
                    <label class="desk-kategori" for="desk">Deskripsi</label>
                    <input class="desk-input" type="text" name="desk" id="desk" value="<?php echo $result['deskBuku'] ?>">
                </div>
                <div class="submit">
                    <button class="btn btn-green text-white" name="submit" type="submit">simpan</button>
                </div>
            </form>
        </section>
    </div>
</body>

</html>

<?php 
    include 'koneksiDB.php';

    if(isset($_POST['submit'])){
        $idkategori = $_POST['idkategori'];
        $kategori =  $_POST['kategori'];
        $desk =  $_POST['desk'];

        // echo $idkategori."=>".$kategori."=>".$desk;

        $sql = "UPDATE kategori SET idkategori=$idkategori, kategoriBuku='$kategori', deskBuku = '$desk' WHERE idkategori=$id";
        mysqli_query($koneksi, $sql);
        header("Location:http://localhost/crudPhp/crud.php");
    }

?>