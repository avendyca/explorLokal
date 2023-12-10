<?php

include 'koneksi.php';

if( isset($_POST["submit"])) {

    if(tambah($_POST) > 0 ) {
        echo "
        <script>
        alert('data berhasil ditambahkan!');
        document.location.href = 'index.php';
        </script>
        ";
    }else {
        echo "
        <script>
        alert('data berhasil ditambahkan!');
        document.location.href = 'index.php';
        </script>
        ";
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tambah.css">

    
    <title>Document</title>
</head>
<body>
    <h1>Tambah destinasi</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="gambarAlam">gambar</label>
                <input type="file" name="gambarAlam" id="gambarAlam"
                required>
            </li>
            <li>
                <label for="judulAlam">judul</label>
                <input type ="text" name="judulAlam" id="judulAlam"></textarea
                required>
            </li>
            <li>
                <label for="deskripsiAlam">deskripsi</label>
                <textarea name="deskripsiAlam" id="deskripsiAlam" cols="30" rows="10"></textarea
                required>
            </li>
            <li>
                <label for="hargaAlam">Harga</label>
                <textarea name="hargaAlam" id="hargaAlam" cols="30" rows="10"></textarea
                required>
            </li>
            <li>
                <label for="alamatAlam">Alamat</label>
                <textarea name="alamatAlam" id="alamatAlam" cols="30" rows="10"></textarea
                required>
            </li>
            <li>
                <button type="submit" name="submit">Tambahkan</button>
            </li>
        </ul>


    </form>
</body>
</html>