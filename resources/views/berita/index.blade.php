@extends('layouts.adminmain')
@section('content')
<section class="section">

    <div class="section-header">
        <h1>Manejemen Berita</h1>
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
                    <a href="{{ route('cabangolahraga.index') }}" class="pull-right">
                        <button type="button" class="btn btn-info">All Data</button>
                    </a>
                </div>
                <div class="card-header">
                    <a href="{{ route('cabangolahraga.create') }}">
                        <button type="button" class="btn btn-primary">Tambah Data</button>
                    </a>
                </div>
                <div class="card-body" style="overflow: scroll">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Judul Berita</th>
                                <th scope="col">Foto</th>
                                <th scope="col">Kategori</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($data as $berita)
                            <tr>
                                <td>{{ $berita->judul }}</td>
                                <td><img src="{{ asset('image/'. $berita->foto) }}" width='75' height='75'></td>
                                <td>{{ $berita->kategori }}</td>
                                <td>
                                    <a href="{{ route('berita.edit', ['id' => $berita->id]) }}">
                                        <button type="button" class="btn btn-sm btn-info">Edit</button>
                                    </a>
                                    <a href="{{ route('berita.delete', ['id' => $berita->id]) }}" onclick="return confirm('Delete data?');">
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