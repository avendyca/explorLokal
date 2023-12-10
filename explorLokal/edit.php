<?php
include 'koneksi.php';

$id = $_GET["id"];

// Pastikan $id adalah angka
if (!is_numeric($id)) {
    // Handle error, misalnya redirect ke halaman error
    header("Location: error.php");
    exit;
}

// Fungsi query dan tambah harus didefinisikan
// Gantilah fungsi query dan tambah sesuai dengan implementasinya
$Destinasi = query("SELECT * FROM wisataalam WHERE idAlam = $id")[0];

if (isset($_POST["submit"])) {
    // Gantilah tambah($_POST) dengan implementasi yang benar
    if (ubah($_POST) > 0) {
        echo "
        <script>
        alert('data berhasil diubah!');
        document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('data gagal diubah!');
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
    <link rel="stylesheet" href="edit.css">
    <title>Document</title>
</head>
<body>
    <h1>Edit destinasi</h1>

    <form action="" method="post">
        <input type="hidden" name="idAlam" value="<?= $Destinasi["idAlam"]; ?>">
        <ul>
            <li>
                <label for="gambarAlam">gambar</label>
                <input type="file" name="gambarAlam" id="gambarAlam">
            </li>
            <li>
                <label for="judulAlam">judul</label>
                <input type ="text" name="judulAlam" id="judulAlam"
                required value="<?= $Destinasi["judulAlam"]; ?>">
            </li>
           <!-- ... -->
<li>
    <label for="deskripsiAlam">deskripsi</label>
    <!-- Perbaiki tag textarea yang tidak ditutup dan letakkan value di dalam tag -->
    <textarea name="deskripsiAlam" id="deskripsiAlam" cols="30" rows="10" required><?= $Destinasi["deskripsiAlam"]; ?></textarea>
</li>
<li>
    <label for="hargaAlam">Harga</label>
    <!-- Perbaiki tag textarea yang tidak ditutup dan letakkan value di dalam tag -->
    <textarea name="hargaAlam" id="hargaAlam" cols="30" rows="10" required><?= $Destinasi["hargaAlam"]; ?></textarea>
</li>
<li>
    <label for="alamatAlam">Alamat</label>
    <!-- Perbaiki tag textarea yang tidak ditutup dan letakkan value di dalam tag -->
    <textarea name="alamatAlam" id="alamatAlam" cols="30" rows="10" required><?= $Destinasi["alamatAlam"]; ?></textarea>
</li>
<!-- ... -->

            <li>
                <button type="submit" name="submit">Tambahkan</button>
            </li>
        </ul>


    </form>
</body>
</html>