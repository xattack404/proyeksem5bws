<!-- Navbar -->
@include('layouts.FrontendNavbar')
<!-- Navbar End -->

<!-- Jumbotron -->
<div class="jumbotron">
    <h1>Pondok Pesantren Syariah <br> <span>"Al-Djaliel</span> "
    </h1>
    <img src="{{ asset('assets_frontend/IMG/Logo.png') }}" alt="">
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
                    <div class="captionTextHolder">
                        <p class="captionText slideTextFromTop"></p>
                    </div>
                    <?php for ($i = 0; $i < 4; $i++) { ?>
                        <div class="imageHolder">
                            <img src="{{ asset('assets_frontend/IMG/galeri.jpg') }}">
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
            <img class="gambar" src="{{ asset('assets_frontend/IMG/informasi.jpg') }}" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi vitae sit deleniti reiciendis molestiae provident magnam sint perferendis quo molestias? Reiciendis reprehenderit mollitia natus, asperiores vel distinctio quia nam odio commodi iusto provident voluptas, iste facilis. Veritatis, quis laboriosam earum quia amet unde libero odit adipisci nemo. Facilis porro impedit delectus repellendus sint asperiores, quasi dicta nam et quam culpa aspernatur, iste adipisci veniam saepe nemo sunt consequatur quod nostrum rerum vitae. Pariatur at neque cumque voluptate praesentium excepturi molestias fugiat, natus aliquid quibusdam dicta alias rerum non omnis eveniet, molestiae vel numquam! Eligendi eius incidunt consequuntur asperiores itaque voluptas, similique perferendis. Quae omnis eos aspernatur unde a blanditiis error pariatur quis, maiores aliquam ex corrupti debitis quibusdam. Voluptatum maiores assumenda repellat natus. Quae deleniti quidem magnam repudiandae sit, eum ex quia quod asperiores? Fuga neque praesentium laudantium eveniet corporis! Aut dolores architecto praesentium optio temporibus deleniti amet quidem repellat, reiciendis assumenda dolore quis ullam, tempora nostrum maxime consequuntur et velit similique ut autem. Nisi molestiae earum obcaecati dolores nam enim facilis quibusdam vitae, consequuntur nostrum asperiores inventore commodi hic adipisci quisquam aut ullam sunt magni? Doloremque optio adipisci doloribus, sequi accusamus ea aliquam dolorem. Fugiat dolorum et nulla voluptate.</p>
        </div>
        <!-- Information Akhir -->

        <!-- News -->
        <div class="news">

        </div>
        <!-- Akhir -->
    </div>
</div>
<!-- Container End-->

<!-- Footer -->
@include('layouts.FrontendFooter')

<script src="{{ asset('assets_frontend/JS/galery.js') }}"></script>
<script src="{{ asset('assets_frontend/JS/news.js') }}"></script>
</body>

</html>