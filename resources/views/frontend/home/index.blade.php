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
        @forelse($data as $berita)
        <div class="information-container">
            <h1>{{ $berita->judul }}</h1>
            <img class="gambar" src="{{ asset('foto/'. $berita->gambar) }}" alt="">
            <p> {{ $berita->isi }}</p>
        </div>
        @empty
        <div class="information-container">
            <p><b>Tidak Ada Berita</b></p>
        </div>
        @endforelse
        <!-- Information Akhir -->

        <!-- News -->
        <div class="news">
            @include('frontend.home.news')
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
            <a href="#">
                <div class="ig"></div>
            </a>
            <a href="#">
                <div class="fb"></div>
            </a>
            <a href="#">
                <div class="wa"></div>
            </a>
        </div>
    </div>
</footer>

<script src="{{ asset('assets_frontend/JS/galery.js') }}"></script>
<script src="{{ asset('assets_frontend/JS/news.js') }}"></script>
</body>

</html>