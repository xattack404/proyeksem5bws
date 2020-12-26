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
                <ul id="list">

                    <li>
                        @forelse($data as $news)
                        <h1>{{ $news->judul }}</h1>
                        <p><span>October</span> <span>01</span>,<span>2020</span>
                            <img src="{{ asset('foto/'. $news->gambar) }}" alt="">
                            <p>{{ str_limit($news->isi, $limit = 200, $end = '') }}</p>
                            <a href="berita.php">baca selanjutnya...</a>
                            @empty
                            @endforelse
                    </li>
                </ul>


            </div>
        </table>
    </div>