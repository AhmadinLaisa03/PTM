<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD php | tambah</title>
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

        .kategori-input{
            margin-left: 20px;
            width: 200px;
            height:30px;
        }
        .desk-input{
            margin-left: 15px;
            width: 200px;
            height:30px;
        }

        .input-kategori{
            margin-bottom: 20px;
        }

        .submit{
            margin-top: 10px;
        }

        .btn{
            width: 90px;
            height: 40px;
            border-radius: 10px;
            border: none;
            padding-bottom: 4px;    
        }

        .btn-green{
            background-color:green;
        }

        .text-white{
            color: white;
        }
    </style>
</head>

<body>
    <div class="container">
        <section class="sectA">
            <h1 class="judul">
                Insert Kategori
            </h1>
        </section>
        <section class="sectB">
            <form action="" method="post">
                <div class="input-kategori">
                    <label class="kategori-label" for="kategori">Kategori</label>
                    <input class="kategori-input" type="text" name="kategori" id="kategori">
                </div>
                <div class="input-deskBuku">
                    <label class="desk-kategori" for="desk">Deskripsi</label>
                    <input class="desk-input" type="text" name="desk" id="desk">
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

    if (isset($_POST['submit'])) {
        $kategori = $_POST['kategori'];
        $deskBuku = $_POST['desk'];

        $sql = "INSERT INTO kategori VALUES(null, '$kategori', '$deskBuku')";
        mysqli_query($koneksi ,$sql);
        header("Location:http://localhost/crudPhp/crud.php");
    }
?>