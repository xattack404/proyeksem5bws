@include('layouts.FrontendNavbar')
<!-- Navbar End -->
<!-- Judul -->
<div class="judul-halaman">
    <h1>Pondok Pesantren Al-Djaliel</h1>
</div>
<!-- Judul Akhir-->
<!-- Container -->
<div class="container-index2">
    <div class="main2">
        <!-- Information -->
        <div class="information-container">
            <div class="judul-information">
                <h1>{{$data->judul}}</h1>
            </div>
            <h2><span>October</span> <span>01</span>,<span>2020</span> <span>04.00 PM</span></h2>
            <img class="gambar" src="{{ asset('img_artikel/'. $data->gambar) }}" alt="">
            <p>
                {{$data->isi}}
            </p>
        </div>
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
</footer>




<script src="{{ asset('assets_frontend/JS/news.js') }}"></script>
</body>

</html>