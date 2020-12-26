@include('layouts.FrontendNavbar')
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
            @forelse($data as $profil)
            <img class="gambar" src="{{ asset('img_profil/'. $profil->foto) }}" alt="">

            <p>
                Nama lengkap: {{ $profil->nama_pengurus }}
            </p>
            <p>
                Lahir: {{ $profil->tempat_lahir }}, {{ $profil->tgl_lahir }}
            </p>
            <p>
                Pendidikan Terakhir : {{ $profil->pendidikan_terakhir }}
            </p>
            <p>
                Deskripsi: {{ $profil->deskripsi }}
            </p>
            @empty
            <div class="information-container">
                <p><b>Tidak Ada Berita</b></p>
            </div>
            @endforelse
        </div>
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
</footer>




<script src="JS/news.js"></script>
</body>

</html>