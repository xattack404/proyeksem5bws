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
                        <?php for ($i = 0; $i < 5; $i++){ ?>
                        <li>
                            @forelse($data as $news)
                            <h1>{{ $news->judul }}</h1>
                            <p><span>October</span> <span>01</span>,<span>2020</span>
                            <img src="{{ asset('foto/'. $news->gambar) }}" alt="">
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil ipsa quasi explicabo at, reiciendis, odio eum laudantium quaerat iste facilis iure tempore praesentium atque fugit delectus dicta impedit recusandae! Sint vero laudantium eveniet ducimus sit laborum quam voluptates aliquam similique sunt, ipsam, iusto impedit, ea modi recusandae eaque fuga reiciendis!Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil ipsa quasi explicabo at, reiciendis, odio eum laudantium quaerat iste facilis iure tempore praesentium atque fugit delectus dicta impedit recusandae! Sint vero laudantium eveniet ducimus sit laborum quam voluptates aliquam similique sunt, ipsam, iusto impedit, ea modi recusandae eaque fuga reiciendis!Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil ipsa quasi explicabo at, reiciendis, odio eum laudantium quaerat iste facilis iure tempore praesentium atque fugit delectus dicta impedit recusandae! Sint vero laudantium eveniet ducimus sit laborum quam voluptates aliquam similique sunt, ipsam, iusto impedit, ea modi recusandae eaque fuga reiciendis!</p>
                            <a href="berita.php">baca selanjutnya...</a>
                            @empty
                            @endforelse
                        </li>
                        <?php } ?>
                    </ul> 
                    <div id="list_index" class="box"></div> 

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
        {!! $data->appends(request()->except('page'))->render() !!}
    </div>

    <div class="container-pagination ">
        <div id="pagination-wrapper"></div>
    </div>
</div>