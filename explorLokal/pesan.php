<?php
// Pastikan Anda sudah menghubungkan ke database sebelum menggunakan script ini
// Gantilah nilai-nilai berikut sesuai dengan informasi database Anda
$host = "localhost";
$username = "root";
$password = "";
$database = "explorlokal";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $namaPaket = $_POST["paket"];
    $noTelpon = $_POST["telpon"];
    $alamat = $_POST["alamat"];

    // Query untuk menyimpan data ke dalam tabel donasi
    $sql = "INSERT INTO pesan (namaPesan, paketPesan, telponPesan, alamatPesan) VALUES ('$nama', '$namaPaket', '$noTelpon', '$alamat')";


    $successStyle = 'style="background-color: #dff0d8; border: 1px solid #3c763d; color: #3c763d; padding: 15px; margin-bottom: 20px;"';
    
    // Gaya untuk tombol kembali
    $backButtonStyle = 'style="display: inline-block; padding: 8px 15px; font-size: 16px; font-weight: bold; text-decoration: none; background-color: #5cb85c; color: #fff; border-radius: 5px;"';
    
    // Gaya untuk pesan error
    $errorStyle = 'style="background-color: #f2dede; border: 1px solid #a94442; color: #a94442; padding: 15px; margin-bottom: 20px;"';
    
    if (mysqli_query($conn, $sql)) {
        // Pesan keberhasilan dengan tautan atau tombol kembali
        echo '<div ' . $successStyle . '>';
        echo '<p>Terima kasih atas pesanannya!</p>';
        echo '<p>Pesanan berhasil disimpan.</p>';
      
    
        // Tambahkan tombol untuk mengarahkan ke WhatsApp
        echo '<button onclick="redirectToWhatsApp()"> lanjutkan pembayaran via WhatsApp</button>';
    
        echo '</div>';
    } else {
        // Pesan error jika terjadi kesalahan
        echo '<div ' . $errorStyle . '>';
        echo '<p>Error: ' . mysqli_error($conn) . '</p>';
        echo '<p>Silakan coba lagi nanti.</p>';
        echo '</div>';
    }

    
    
    
    
}


mysqli_close($conn);
?>

<script src="pesan.js"></script>
