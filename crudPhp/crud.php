<?php
include 'prosesPhp/select.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD php</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
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

        .tabel th,td{
            padding: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <section class="sectA">
            <h1 class="judul">
                Kategori Buku
            </h1>
            <a href="prosesPhp/tambah.php">Tambah Data</a>

        </section>
        <section class="sectB">
            <table class="tabel" cellpadding="10px" cellspacing="0" border="1px" style="border-collapse: collapse;">
                <tr>
                    <th>
                        <h3>Kategori Buku</h3>
                    </th>
                    <th>
                        <h3>Deskripsi Buku</h3>
                    </th>
                    <th>
                        <h3>hapus</h3>
                    </th>
                    <th>
                        <h3>Update</h3>
                    </th>
                </tr>
                <?php
                foreach ($data as $datas) {
                    echo '<tr>';
                    echo '<td>' . $datas['kategoriBuku'] . '</td>';
                    echo '<td>' . $datas['deskBuku'] . '</td>';
                    echo '<td><a href="prosesPhp/hapus.php?id='.$datas['idKategori'].'">hapus</a></td>';
                    echo '<td><a href="prosesPhp/update.php?id='.$datas['idKategori'].'">update</a></td>';
                    echo '</tr>';
                }
                ?>
            </table>
        </section>
    </div>
</body>

</html>