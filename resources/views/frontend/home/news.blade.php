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
                @forelse($data as $news)
                <h1>{{ $news->judul }}</h1>
                <img src="{{ asset('foto/'. $news->gambar) }}" alt="">

                @empty
                <h2>belum ada</h2>
                @endforelse
            </div>
        </table>
        {!! $data->appends(request()->except('page'))->render() !!}
    </div>

    <div class="container-pagination ">
        <div id="pagination-wrapper"></div>
    </div>
</div>