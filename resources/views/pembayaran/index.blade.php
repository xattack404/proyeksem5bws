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
                    <a href="{{ route('pembayaran.index') }}" class="pull-right">
                        <button type="button" class="btn btn-info">All Data</button>
                    </a>
                </div>
                <div class="card-header">

                </div>
                <div class="card-body" style="overflow: scroll">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">No Invoice</th>
                                <th scope="col">NISN</th>
                                <th scope="col">Total Pembayaran</th>
                                <th scope="col">Bukti Pembayaran</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($data as $pembayaran)
                            <tr>
                                <td>{{ $pembayaran->no_invoice }}</td>
                                <td>{{ $pembayaran->nisn }}</td>
                                <td>{{ $pembayaran->total_pembayaran }}</td>
                                <td>{{ $pembayaran->bukti_pembayaran }}</td>
                                <td>{{ $pembayaran->status }}</td>
                                <td>
                                    <a href="">
                                        <button type="button" class="btn btn-sm btn-info">Detail</button>
                                    </a>
                                    <a href="">
                                        <button type="button" class="btn btn-sm btn-info">Proses</button>
                                    </a>
                                    <a href="">
                                        <button type="button" class="btn btn-sm btn-info">Verifikasi</button>
                                    </a>
                                    <a href="" onclick="return confirm('Delete data?');">
                                        <button type="button" class="btn btn-sm btn-danger">Tolak</button>
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