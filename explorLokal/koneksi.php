<?php
$servernameku = "localhost";
$username = "root";
$password = "";
$dbname = "explorlokal";

// Create connection
$conn = mysqli_connect($servernameku, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Koneksi gagal: " . mysqli_connect_error());
}



function  tambah($data) {
  global $conn;
  $gambarAlam = htmlspecialchars($data["gambarAlam"]);
  $judulAlam = htmlspecialchars ($data["judulAlam"]);
  $deskripsiAlam = htmlspecialchars($data["deskripsiAlam"]);
  $hargaAlam = htmlspecialchars($data["hargaAlam"]);
  $alamatAlam = htmlspecialchars($data["alamatAlam"]);

  $query = "INSERT INTO wisataAlam VALUES ('','$gambarAlam','$judulAlam','$deskripsiAlam' ,'$hargaAlam','$alamatAlam')"; ; 
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}


function hapus ($id) {
  global $conn;
  mysqli_query($conn, "DELETE FROM wisataalam WHERE idAlam = $id");
  return mysqli_affected_rows($conn);
}

function query($sql)
{
    global $conn; // Variabel koneksi database

    $result = mysqli_query($conn, $sql);

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}
function ubah($data)
{
    global $conn;
    $id = $data["idAlam"];
  $gambarAlam = htmlspecialchars($data["gambarAlam"]);
  $judulAlam = htmlspecialchars ($data["judulAlam"]);
  $deskripsiAlam = htmlspecialchars($data["deskripsiAlam"]);
  $hargaAlam = htmlspecialchars($data["hargaAlam"]);
  $alamatAlam = htmlspecialchars($data["alamatAlam"]);

    
    // $nama = htmlspecialchars($data["nama"]); // Jika kolom 'nama' tidak ada, bisa dihapus

    // Gunakan prepared statement untuk mencegah SQL injection
    $query = "UPDATE wisataalam SET gambarAlam = ?, judulAlam = ?, deskripsiAlam = ?, hargaAlam = ?, alamatAlam = ? WHERE idAlam = ?";
    $stmt = mysqli_prepare($conn, $query);

    // Bind parameter ke prepared statement
    mysqli_stmt_bind_param($stmt, "sssssi", $gambarAlam, $judulAlam, $deskripsiAlam, $hargaAlam, $alamatAlam, $id);

    // Eksekusi prepared statement
    mysqli_stmt_execute($stmt);

    // Periksa jumlah baris yang terpengaruh
    $affected_rows = mysqli_stmt_affected_rows($stmt);

    // Tutup statement
    mysqli_stmt_close($stmt);

    return $affected_rows;
}

?>


