<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="img/png" href="IMG/Logo.png">
    <title>Al-Djaliel</title>
    <link rel="stylesheet" href="CSS/style.css">
    <script src="JS/pagination.js"></script>
</head>
<body>
<!-- Navbar -->
    <?php include 'navbar.php';?>
<!-- Navbar End -->
<!-- Judul -->
    <div class="judul-halaman">
        <h1>Profil Pengurus</h1>
    </div>
<!-- Judul Akhir-->
<!-- Container -->
    <div class="container-index2">
        <div class="main2">            
            <!-- Information -->
            <div class="information-container">
                <div class="navabar-information">
                    <input type="checkbox" name="" id="ribbon2">
                    <ul>
                        <li><a href="">Habib Syech Abdul Qodir Assegaf</a></li>
                        <li><a href="">Habib Luthfi Bin Yahya</a></li>
                        <li><a href="">Habib Umar Bin Hafidz</a></li>
                        <li><a href="">Ustadz Abdul Somad</a></li>
                    </ul>
                    <label class="tie" for="ribbon2"></label>
                </div>
                
                <div class="judul-information">
                    <h1>Latar Belakang</h1>
                </div>                

                <img class="" src="IMG/foto 4.jpg" alt="">

                <p>
                    Nama lengkap: Syech Abdul Qodir Assegaf
                    Lahir: 20 September 1961 Surakarta
                    Pasangan: Sayyidah binti Hasan al Habsyi
                    Anak: Muh. Al Baqir, Abu Bakar, Fathimatah az Zahro, Toha, Umar
                    Album: The Best Sholawat, Vol. 2, Tholama Asyku
                </p>
            </div>
            <!-- Information Akhir -->

            <!-- News -->
            <div class="news">
                <?php include 'news.php';?>                
            </div>
            <!-- Akhir -->
        </div>
    </div>
<!-- Container End-->

<!-- Footer -->
<footer>
</footer>




<script src="JS/news.js"></script>
</body>
</html>