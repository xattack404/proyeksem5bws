@extends('layouts.adminmain')
@section('content')
<section class="section">

  <div class="section-header">
    <h1>Artikel</h1>
  </div>

  <div class="section-body">
    <div class="col-12 col-md-12 col-lg-12">
      <div class="card">
        <div class="card-header">
          <form method="GET" class="form-inline">
            <div class="form-group">
              <input type="text" name="search" class="form-control" placeholder="Search" value="{{ request()->get('search') }}">
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary">Search</button>
            </div>
          </form>
          <a href="{{ route('artikel.index') }}" class="pull-right">
            <button type="button" class="btn btn-info">All Data</button>
          </a>
        </div>
        <div class="card-header">
          <a href="{{ route('artikel.create') }}">
            <button type="button" class="btn btn-primary">Tambah Data</button>
          </a>
        </div>
        <div class="card-body" style="overflow: scroll">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">Judul</th>
                <th scope="col">Seo</th>
                <th scope="col">Isi</th>
                <th scope="col">Gambar</th>
                <th scope="col">Video</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @forelse($data as $artikel)
              <tr>
                <td>{{ $artikel->judul }}</td>
                <td>{{ $artikel->seo }}</td>
                <td>{{ $artikel->isi }}</td>
                <td>{{ $artikel->gambar }}</td>
                <td>{{ $artikel->video }}</td>
                <td>
                  <a href="{{ route('artikel.edit', ['id' => $artikel->id]) }}">
                    <button type="button" class="btn btn-sm btn-info">Edit</button>
                  </a>
                  <a href="{{ route('artikel.delete', ['id' => $artikel->id]) }}" onclick="return confirm('Delete data?');">
                    <button type="button" class="btn btn-sm btn-danger">Hapus</button>
                  </a>
                </td>
              </tr>
              @empty
              <tr>
                <td colspan="3">
                  <center>Data kosong</center>
                </td>
              </tr>
              @endforelse
            </tbody>
          </table>
        </div>
        <div class="card-footer text-right">
          <nav class="d-inline-block">
            {!! $data->appends(request()->except('page'))->render() !!}
          </nav>
        </div>
      </div>
    </div>
  </div>

</section>
@endsection()