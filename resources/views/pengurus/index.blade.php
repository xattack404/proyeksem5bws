@extends('layouts.adminmain')
@section('content')
<section class="section">

  <div class="section-header">
    <h1>Pengurus</h1>
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
          <a href="{{ route('pengurus.index') }}" class="pull-right">
            <button type="button" class="btn btn-info">All Data</button>
          </a>
        </div>
        <div class="card-header">
          <a href="{{ route('pengurus.create') }}">
            <button type="button" class="btn btn-primary">Tambah Data</button>
          </a>
        </div>
        <div class="card-body" style="overflow: scroll">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">Nama Pengurus</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @forelse($data as $pengurus)
              <tr>
                <td>{{ $pengurus->nama_pengurus }}</td>
                <td>
                  <a href="{{ route('pengurus.edit', ['id' => $pengurus->id]) }}">
                    <button type="button" class="btn btn-sm btn-info">Edit</button>
                  </a>
                  <a href="{{ route('pengurus.delete', ['id' => $pengurus->id]) }}" onclick="return confirm('Delete data?');">
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