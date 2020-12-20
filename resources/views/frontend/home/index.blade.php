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
            <div class="container-news">
                <div class="container-pagination ">
                    <div class="news-label">
                        <h1>Al-Djaliel NEWS</h1>
                    </div>
                </div>

                <div class="container-pagination ">
                    <!-- Table structure here -->
                    <table class="tablepaginitation" id="our-table">
                        <div id="page-news">

                            <h1>Al-Djaliel adakan makan bareng santri satu minggu sekali</h1>

                            <p><span>October</span> <span>01</span>,<span>2020</span></p>

                            <img src="IMG/berita.JPG" alt="">

                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil ipsa quasi explicabo at, reiciendis, odio eum laudantium quaerat iste facilis iure tempore praesentium atque fugit delectus dicta impedit recusandae! Sint vero laudantium eveniet ducimus sit laborum quam voluptates aliquam similique sunt, ipsam, iusto impedit, ea modi recusandae eaque fuga reiciendis!</p>

                            <a href="berita.php">baca selanjutnya...</a>

                        </div>
                    </table>
                </div>

                <div class="container-pagination ">
                    <div id="pagination-wrapper"></div>
                </div>
            </div>
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