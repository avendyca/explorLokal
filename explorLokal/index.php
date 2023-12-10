<?php
include 'koneksi.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="style.css">
	<title>Eksplor Lokal</title>
</head>
<body>


	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">Eksplor Lokal</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="#" class="data-pesanan-link" onclick="showDataPesanan()">
					<i class='bx bxs-dashboard'></i>
					<span class="text">Data Pesanan</span>
				</a>
			</li>
			<li>
				<a href="#" id="destinasi" class="destination-link"onclick="showDestination()">
					<i class='bx bxs-shopping-bag-alt'></i>
					<span class="text">Destination</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="#" class="logout">
					<i class='bx bxs-log-out-circle'></i>
					<span href="login.html" class="text" onclick="confirmLogout()">Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->
	
	<!-- CONTENT -->
	<section id="content">
	
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu'></i>
	
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
		</nav>
	
		<!-- DATA PESANAN -->
	<div>
		<?php 
		$result = mysqli_query($conn,"SELECT * FROM pesan"); 
		?>
		
		<div id="dataPesanan" class="content-section">
			
			<?php
			while($row = mysqli_fetch_assoc($result)){
				$nama=$row['namaPesan'];
				$paketPesan=$row['paketPesan'];
				$telponPesan=$row['telponPesan'];
				$alamatPesan=$row['alamatPesan'];
				?> 
			
			<div class="dashboard-container">
				<h2>Data Pesanan Management</h2>
				<br>
				<br>
				<h1><?php echo $nama ?></h1>
				<h2><?php echo $paketPesan ?></h2>
				<h2><?php echo $telponPesan ?></h2>
				<h2><?php echo $alamatPesan ?></h2>
				
			</div>

			<?php
			}
			?>
		</div>
	</div>
		
		
		<?php
		$resultDestinasi = mysqli_query($conn, "SELECT * FROM wisataalam");

		//$jadwal=mysqli_fetch_assoc($resultJadwal);
	?>
	
		<!-- DESTINATION -->
<div id="destination" class="content-section">
    <div class="dashboard-container">
        <h2>Destination Management</h2>

		<a href="tambah.php"> Tambah Destinasi</a>
        <!-- Add your content for destination here -->
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>No</th>
                <th>gambar</th>
				<th>Judul alam</th>
                <th>Deskripsi</th>
                <th>Alamat</th>
                <th>Harga tiket</th>
                <th>Aksi</th>
            </tr>
            <?php $i = 1; ?>
            <?php while ($row = mysqli_fetch_assoc($resultDestinasi)) : ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td><?= $row['gambarAlam']; ?></td>
					<td><?= $row['judulAlam']; ?></td>
                    <td><?= $row['deskripsiAlam']; ?></td>
                    <td><?= $row['alamatAlam']; ?></td>
                    <td><?= $row['hargaAlam']; ?></td>
                    <td>
					<a href="edit.php?id=<?= $row["idAlam"]; ?>">edit</a>|
                            <a href="delet.php?id=<?= $row["idAlam"]; ?>" onclick="
                            return confirm('yakin?');">delete</a>

                    </td>
                </tr>
                <?php $i++; ?>
            <?php endwhile; ?>
        </table>
    </div>
</div>

	
		<!-- END OF MAIN -->
	</section>
	<!-- CONTENT -->
	
	<script src="script.js"></script>
	<!-- Additional JavaScript for dynamic content -->
<script>
    // Function to show Data Pesanan section
    function showDataPesanan() {
        document.getElementById('dataPesanan').style.display = 'block';
        document.getElementById('destination').style.display = 'none';
    }

    // Function to show Destination section
    function showDestination() {
        document.getElementById('dataPesanan').style.display = 'none';
        document.getElementById('destination').style.display = 'block';
    }
	
    // Function to set active class on menu item
    function setActiveMenuItem(element) {
        const menuItems = document.querySelectorAll('.side-menu li');
        menuItems.forEach(item => item.classList.remove('active'));
        element.parentNode.classList.add('active');
    }

    // Event listeners for menu items
    const dataPesananLink = document.querySelector('.data-pesanan-link');
    const destinationLink = document.querySelector('.destination-link');

    dataPesananLink.addEventListener('click', function () {
        setActiveMenuItem(this);
    });

    destinationLink.addEventListener('click', function () {
        setActiveMenuItem(this);
    });


</script>

	</body>
	</html>



		
		
		

		
<!-- END OF MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="script1.js"></script>
</body>
</html>