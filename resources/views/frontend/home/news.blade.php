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
                    @forelse($data as $news)
                    <li>
                        <h1>{{ $news->judul }}</h1>
                        <p><span>October</span> <span>01</span>,<span>2020</span>
                            <img src="{{ asset('foto/'. $news->gambar) }}" alt="">
                            <p>{{ str_limit($news->isi, $limit = 200, $end = '') }}</p>
                            <a href="{{ route('frontend.home.artikel', ['seo' => $artikel->seo]) }}">baca selanjutnya...</a>
                            
                    </li>
                    @empty
                    @endforelse
                </ul> 
                <ul>
                    <div id="list_index" class="box"></div> 
                </ul>

                <script type="text/javascript">
                    window.addEventListener("load", function () {
                    paginator({
                    get_rows: function () {
                    return document.getElementById("list").getElementsByTagName("li");
                    },
                    box: document.getElementById("list_index"),
                    active_class: "color_page"
                    });
                    }, false);  
                </script>


            </div>
        </table>
    </div>