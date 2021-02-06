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
            <p><img class="gambar" src="{{ asset('img_artikel/'. $data->gambar) }}" alt=""></p>
            <p>
                {{$data->isi}}
            </p>
        </div>
        <!-- Information Akhir -->

        <!-- News -->

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