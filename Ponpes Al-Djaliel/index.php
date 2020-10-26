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

<!-- Jumbotron -->
    <div class="jumbotron">
        <h1>Pondok Pesantren Syariah <br> <span>"Al-Djaliel</span> "
        </h1>
        <img src="IMG/Logo.png" alt="">
    </div>
<!-- Jumbotron End -->

<!-- Container -->
    <div class="container-index">
        <div class="main">
            <!-- galery -->
            <div class="gallery">
                <div class="galleryContainer">
                    <div class="slideShowContainer">
                        <div onclick="plusSlides(-1)" class="nextPrevBtn leftArrow"><span class="arrow arrowLeft"></span></div>
                        <div onclick="plusSlides(1)" class="nextPrevBtn rightArrow"><span class="arrow arrowRight"></span></div>
                        <div class="captionTextHolder"><p class="captionText slideTextFromTop"></p></div>
                        <?php for ($i = 0; $i < 4; $i++){ ?>
                        <div class="imageHolder">
                            <img src="IMG/galeri.jpg">
                            <p class="captionText">Jalan bareng pengurus pondok</p>
                        </div>
                        <?php } ?>
                    </div>
                    <div id="dotsContainer"></div>
                </div>
            </div>
            <!-- galery akhir -->

            <!-- Information -->
            <div class="information-container">
                <h1>Penerimaan Santri Baru</h1>
                <img class="gambar" src="IMG/informasi.jpg" alt="">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi vitae sit deleniti reiciendis molestiae provident magnam sint perferendis quo molestias? Reiciendis reprehenderit mollitia natus, asperiores vel distinctio quia nam odio commodi iusto provident voluptas, iste facilis. Veritatis, quis laboriosam earum quia amet unde libero odit adipisci nemo. Facilis porro impedit delectus repellendus sint asperiores, quasi dicta nam et quam culpa aspernatur, iste adipisci veniam saepe nemo sunt consequatur quod nostrum rerum vitae. Pariatur at neque cumque voluptate praesentium excepturi molestias fugiat, natus aliquid quibusdam dicta alias rerum non omnis eveniet, molestiae vel numquam! Eligendi eius incidunt consequuntur asperiores itaque voluptas, similique perferendis. Quae omnis eos aspernatur unde a blanditiis error pariatur quis, maiores aliquam ex corrupti debitis quibusdam. Voluptatum maiores assumenda repellat natus. Quae deleniti quidem magnam repudiandae sit, eum ex quia quod asperiores? Fuga neque praesentium laudantium eveniet corporis! Aut dolores architecto praesentium optio temporibus deleniti amet quidem repellat, reiciendis assumenda dolore quis ullam, tempora nostrum maxime consequuntur et velit similique ut autem. Nisi molestiae earum obcaecati dolores nam enim facilis quibusdam vitae, consequuntur nostrum asperiores inventore commodi hic adipisci quisquam aut ullam sunt magni? Doloremque optio adipisci doloribus, sequi accusamus ea aliquam dolorem. Fugiat dolorum et nulla voluptate.</p>
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
    <div class="containerInfo">
        <div class="map">
            <div class="ImgPeta">
                <a href="https://www.google.com/maps/place/8%C2%B015'21.3%22S+113%C2%B038'46.4%22E/@-8.2551247,113.6473145,15z/data=!4m5!3m4!1s0x0:0x0!8m2!3d-8.2559189!4d113.6462214?hl=en" target="_blank">klik untuk lokasi Pondok Al-Djaliel</a>
            </div>
        </div>
        <div class="sosmed">
            <div class="youtube">
                <iframe width="" height="" src="https://www.youtube.com/embed/OmS01pKTgeY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
        <div class="kontak">
            <a href="#"><div class="ig"></div></a>
            <a href="#"><div class="fb"></div></a>
            <a href="#"><div class="wa"></div></a>
        </div>
    </div>
</footer>




    <script src="JS/galery.js"></script>
    <script src="JS/news.js"></script>
</body>
</html>