<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tour.css">
    <!-- <script src="animasi.js" defer></script> -->
    <title>eTourisme - Tour</title>
</head>
<body>
    <header class="container">
        <div>
            <nav >
            <ul >
                <li><a href="expo.html"><b>Beranda</b></a></li>
                <li><a href="tour.html"><b>Tour</b></a></li>
                <li><a href="tentang.html"><b>Tentang</b></a></li>
                <li><a href="biaya.html"><b>Biaya</b></a></li>
                <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
                <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
                <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
                <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
            </ul>
        </nav>
    </div>

    
    </header>

  
   
    <section id="home" class="hero">
        <div>
            <h1 style="font-size: 35px;">Pilih Destinasi Sesuai<br> Keinginan Anda</h1>
            <p>Disini akan memberikan gambaran wisata yang kami tawarkan,jogja memberikan banyak pilihan tempat menarik jadi jangan bingung ya</p>
        </div>
    </section>
    <div class ="container">
        <div class="content">
            <p style="text-align: center;font-size: 60px;">Wisata Alam</p> 
            <p style="text-align: center; font-size: 20px;">Sejuk indah pegunungan, damai gemercik air di pantai, pepohonan di hutan</p>
        </div>
    </div>



    <?php
$resultAlam = mysqli_query($conn, "SELECT * FROM wisataAlam");
?>

<section class="recent-blog">
    <div class="row">
        <div class="container">
            <main class="grid">
                <?php
                while ($rowAlam = mysqli_fetch_array($resultAlam, MYSQLI_ASSOC)) {
                    // menambahkan kode untuk menampilkan data wisata alam
                    $gambarAlam = $rowAlam['gambarAlam'];
                    $judulAlam = $rowAlam['judulAlam'];
                    $deskripsiAlam = $rowAlam['deskripsiAlam'];
                    $hargaAlam = $rowAlam['hargaAlam'];
                    $alamatAlam = $rowAlam['alamatAlam'];
                ?>
                    <article>
                        <div class="content">
                            <img src="<?php echo $gambarAlam; ?>" height="300px" width="300px" alt="Nature Image">
                            <h3><?php echo $judulAlam; ?></h3>
                            <p><?php echo $deskripsiAlam; ?></p>
                            <div class="description">
                                <p>
                                    Address:<br>
                                    <?php echo $alamatAlam; ?><br>
                                    <p>-----------------------------</p>

                                    <br>
                                   <?php echo $hargaAlam; ?><br>
                                  
                                </p>
                            </div>
                        </div>
                        <!-- end content -->
                    </article>
                <?php
                }
                ?>
            </main>
            <!-- end grid -->
        </div>
        <!-- end container -->
    </div>
    <!-- end row -->
</section>
<!-- end recent-blog -->

           <div class ="container">
        <div class="content">
            <h3 style="text-align: center;font-size: 60px;">Wisata Budaya</h3>
            <p style="text-align: center; font-size: 20px;">Bentuk perjalanan yang menekankan eksplorasi dan pemahaman warisan</p>
        </div>
    </div>
    <?php
$resultBudaya = mysqli_query($conn, "SELECT * FROM wisatabudaya");
?>

<section class="recent-blog">
    <div class="row">
        <div class="container">
            <main class="grid">
                <?php
                while ($rowBudaya = mysqli_fetch_array($resultBudaya, MYSQLI_ASSOC)) {
                    // menambahkan kode untuk menampilkan data wisata budaya
                    $gambarBudaya  = $rowBudaya['gambarBudaya'];
                    $judulBudaya = $rowBudaya['judulBudaya'];
                    $deskripsiBudaya = $rowBudaya['deskripsiBudaya'];
                    $hargaBudaya = $rowBudaya['hargaBudaya'];
                    $alamatBudaya = $rowBudaya['alamatBudaya'];
                ?>
                    <article>
                        <div class="content">
                            <img src="<?php echo $gambarBudaya; ?>" height="300px" width="300px" alt="Nature Image">
                            <h3><?php echo $judulBudaya; ?></h3>
                            <p><?php echo $deskripsiBudaya; ?></p>
                            <div class="description">
                                <p>
                                    Address:<br>
                                    <?php echo $alamatBudaya; ?><br>
                                    <p>-----------------------------</p>

                                    <br>
                                   <?php echo $hargaBudaya; ?><br>
                                  
                                </p>
                            </div>
                        </div>
                        <!-- end content -->
                    </article>
                <?php
                }
                ?>
            </main>
            <!-- end grid -->
        </div>
        <!-- end container -->
    </div>
    <!-- end row -->
</section>
<!-- end recent-blog -->

<div class ="container">
    <div class="content">
        <h3 style="text-align: center;font-size: 60px;">Wisata Kuliner</h3>
        <p style="text-align: center; font-size: 20px;">Makanan enak punya ciri khas tersendiri dan diracik oleh tangan ahli</p>
    </div>
</div>

<?php
$resultKuliner = mysqli_query($conn, "SELECT * FROM wisatakuliner");
?>

<section class="recent-blog">
    <div class="row">
        <div class="container">
            <main class="grid">
                <?php
                while ($rowKuliner = mysqli_fetch_array($resultKuliner, MYSQLI_ASSOC)) {
                    // menambahkan kode untuk menampilkan data wisata kuliner
                    $gambarKuliner  = $rowKuliner['gambarKuliner'];
                    $judulKuliner = $rowKuliner['judulKuliner'];
                    $deskripsiKuliner = $rowKuliner['deskripsiKuliner'];
                    $hargaKuliner = $rowKuliner['hargaKuliner'];
                    $alamatKuliner = $rowKuliner['alamatKuliner'];
                ?>
                    <article>
                        <div class="content">
                            <img src="<?php echo $gambarKuliner; ?>" height="300px" width="300px" alt="Nature Image">
                            <h3><?php echo $judulKuliner; ?></h3>
                            <p><?php echo $deskripsiKuliner; ?></p>
                            <div class="description">
                                <p>
                                    Address:<br>
                                    <?php echo $alamatKuliner; ?><br>
                                    <p>-----------------------------</p>

                                    <br>
                                   <?php echo $hargaKuliner; ?><br>
                                  
                                </p>
                            </div>
                        </div>
                        <!-- end content -->
                    </article>
                <?php
                }
                ?>
            </main>
            <!-- end grid -->
        </div>
        <!-- end container -->
    </div>
    <!-- end row -->
</section>
<!-- end recent-blog -->



<div class ="container">
    <div class="content">
        <h3 style="text-align: center;font-size: 60px;">Wisata Edukasi</h3>
        <p style="text-align: center; font-size: 20px;">Belajar mengamati,mengapresiasi, dan mempraktikan, ayo lakukan</p>
        
    </div>
</div>
<?php
$resultEdukasi = mysqli_query($conn, "SELECT * FROM wisataedukasi");
?>

<section class="recent-blog">
    <div class="row">
        <div class="container">
            <main class="grid">
                <?php
                while ($rowEdukasi = mysqli_fetch_array($resultEdukasi, MYSQLI_ASSOC)) {
                    // menambahkan kode untuk menampilkan data wisata edukasi
                    $gambarEdukasi  = $rowEdukasi['gambarEdukasi'];
                    $judulEdukasi = $rowEdukasi['judulEdukasi'];
                    $deskripsiEdukasi = $rowEdukasi['deskripsiEdukasi'];
                    $hargaEdukasi = $rowEdukasi['hargaEdukasi'];
                    $alamatEdukasi = $rowEdukasi['alamatEdukasi'];
                ?>
                    <article>
                        <div class="content">
                            <img src="<?php echo $gambarEdukasi; ?>" height="300px" width="300px" alt="Nature Image">
                            <h3><?php echo $judulEdukasi; ?></h3>
                            <p><?php echo $deskripsiEdukasi; ?></p>
                            <div class="description">
                                <p>
                                    Address:<br>
                                    <?php echo $alamatEdukasi; ?><br>
                                    <p>-----------------------------</p>

                                    <br>
                                   <?php echo $hargaEdukasi; ?><br>
                                  
                                </p>
                            </div>
                        </div>
                        <!-- end content -->
                    </article>
                <?php
                }
                ?>
            </main>
            <!-- end grid -->
        </div>
        <!-- end container -->
    </div>
    <!-- end row -->
</section>
<!-- end recent-blog -->






<div class="footer1"> 
    <section>
     <h1>Kenapa memilih kami</h1>
     <p>ExplorLokal telah di percaya oleh ribuan turis lokal maupun mancanegara, dalam urusan wisata serahkan kepada kami,<br> kami akan memberikan layanan sebaik mungkin, dan jangan lupa kami tetap istimewa di hatimu <br>-------------------------------------------------------------------------------------------------------------------------</p>
     <iconify-icon icon="line-md:heart-filled" style="font-size: 60px;" ></iconify-icon>
     <p><b>DESTINASI SESUAI HATIMU</b> <br> <br>Anda ingin wisata ke tempat mana sesuaikan,dengan hati anda, kami akan melayani <br>dengan maksimal dan tentunya supaya jogja berkaesan di hati anda</p>
     <iconify-icon icon="line-md:check-list-3-filled" style="font-size: 60px;"></iconify-icon>
     <p style="margin-bottom: 0%;"><b>BIAYA TERJANGKAU</b> <br> <br>Anda ingin wisata ke tempat mana sesuaikan,<br>dengan hati anda, kami akan melayani <br>dengan maksimal dan tentunya supaya jogja berkaesan di hati anda</p>
     <br>
     <iconify-icon icon="line-md:circle-twotone-to-confirm-circle-twotone-transition" style="font-size: 60px;"></iconify-icon>
     <p style="margin-bottom: 0%;"><b>Akses mudah</b> <br> <br>Anda dapat mengakses kami memesan dari,<br>aplikasi mobile atau dari web browser untuk <br>pembayaran dapat di lakukan melalui rekening maupun di muka mudah bukan.</p>
    </section>
 </div>




    <footer>
        <p style="font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">&copy; 2023 <b>ExplorLokal.</b> All rights reserved.</p>
    </footer>
    </div>
</body>
</html>
<?php mysqli_close($conn); ?>