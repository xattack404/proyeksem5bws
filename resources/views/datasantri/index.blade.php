@extends('layouts.adminmain')
@section('content')
<section class="section">

    <div class="section-header">
        <h1>Kategori</h1>
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
                    <a href="{{ route('datasantri.index') }}" class="pull-right">
                        <button type="button" class="btn btn-info">All Data</button>
                    </a>
                </div>
                <div class="card-body" style="overflow: scroll">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">NISN</th>
                                <th scope="col">Nama Santri</th>
                                <th scope="col">Tempat Lahir</th>
                                <th scope="col">Tanggal Lahir</th>
                                <th scope="col">Nama Orangtua</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($data['santri_aktif'] as $santri)
                            <tr>
                                <td>{{ $santri->nisn_santri }}</td>
                                <td>{{ $santri->relasi->nama }}</td>
                                <td>{{ $santri->relasi->tempat_lahir }}</td>
                                <td>{{ $santri->relasi->tgl_lahir }}</td>
                                <td>{{ $santri->relasi->relasidetail->nama_ayah }}</td>
                                <td>{{ $santri->relasi->alamat }}</td>
                                <td>
                                    <a href="">
                                        <button type="button" class="btn btn-sm btn-info">Detail</button>

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
                        {!! $data['santri_aktif']->appends(request()->except('page'))->render() !!}
                    </nav>
                </div>
            </div>
        </div>
    </div>

</section>
@endsection()