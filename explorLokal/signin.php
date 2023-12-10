<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sigin.css">
    <title>eTourisme</title>
</head>

<body>
    <header class="container" style="background-color: transparent;">
        <div>
            <nav>
                <ul>
                    <li><a href="expo.html"><b>Beranda</b></a></li>
                    <li><a href="tour.html"><b>Tour</b></a></li>
                    <li><a href="tentang.html"><b>Tentang</b></a></li>
                    <li><a href="biaya.html"><b>Biaya</b></a></li>
                    <li><a href="login.html" style="margin-left: 650px;"><b>Login</b></a></li>
                    <li><a href="sigin.html"><b>Sign In</b></a></li>
                </ul>
            </nav>
        </div>
        
    </header>

    <section id="home" class="hero" style="background-image:url(sigin.jpg);">
    <?php
$resultuser = mysqli_query($conn, "SELECT * FROM user");
?>

<section class="recent-blog">
    <div class="row">
        <div class="container">
            <main class="grid">
                <?php
                while ($rowuser = mysqli_fetch_array($resultuser, MYSQLI_ASSOC)) {
                    // menambahkan kode untuk menampilkan data wisata kuliner
                    $username  = $rowuser['username'];
                    $email = $rowuser['email'];
                    $password = $rowuser['password'];
                    $confirmpassword = $rowuser['confirmpassword'];
                    
                ?>
                    <article>
                        <div class="content">
                            <img src="<?php echo $username; ?>" height="300px" width="300px" alt="Nature Image">
                            <h3><?php echo $email; ?></h3>
                            <p><?php echo $password; ?></p>
                            <p><?php echo $confirmpassword; ?></p>
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
        <div>

            <h2 style="font-size: 35px;">Register</h2>
            
            <!-- Formulir Register -->
            <form id="registerForm" action="createuser.php" method="post">
                <label for="username">Username</label>
                <br>
                <input type="text" style="border-radius: 20px;box-shadow: 4px 3px 3px 0px rgb(0, 0, 0); "id="username" >
                <br>
                <label for="email">Email</label>
                <br>
                <input type="text" id="email"style="border-radius:20px; box-shadow: 4px 3px 3px 0px rgb(0, 0, 0); ">
                <br>
                <label for="password">Password</label>
                <br>
                <input type="password" id="password"style="border-radius:20px;box-shadow: 4px 3px 3px 0px rgb(0, 0, 0);">
                <br>
                <label for="password">Confirm Password</label>
                <br>
                <input type="password" id="password"style="border-radius:20px;box-shadow: 4px 3px 3px 0px rgb(0, 0, 0);">
                <br>
                <button type="button" onclick="validateForm()"style="border-radius:20px;box-shadow: 4px 3px 3px 0px rgb(0, 0, 0);">Register</button>
                <p>Sudah punya akun? <a href="login.html"style="color: aliceblue;">Login di sini</a></p>
                </form>
            </form>
        </div>
    </section>

    <script>
        function validateForm() {
            var username = document.getElementById('username').value;
            var email = document.getElementById('email').value;
            var password = document.getElementById('password').value;

            if (username === '' || email === '' || password === '') {
                alert('Mohon isi semua kolom.');
            } else {
                alert('Anda berhasil mendaftar!');
                // Tambahkan logika untuk mengirim data atau redirect ke halaman lain jika diperlukan.
            }
        }
    </script>

</div>

<footer>
    <p style="font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">&copy; 2023 <b>ExplorLokal.</b> All rights reserved.</p>
</footer>
</div>
</body>
</html>
