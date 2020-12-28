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
                                    <a href="#detaildatasantri">
                                        <button type="button" onclick="LoadData('{{ $santri->nisn_santri }}')" class="btn btn-sm btn-info">Detail</button>

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
<div id="detaildatasantri">
    <div class="detailcontent">
        <a href="#" class="tutup">close</a>
        <h1 class="text-white">Informasi Pribadi</h1>
        <table class="table table-bordered" border="1">
            <thead class="bg-success text-white">
                <tr>
                    <td>Nama lengkap</td>
                    <td>NISN</td>
                    <td>Tempat Lahir</td>
                    <td>Tanggal Lahir</td>
                    <td>Nomor Telepon</td>
                    <td>Email</td>
                    <td>Upload Foto Pribadi</td>
                </tr>
            </thead>
            <tbody class="bg-whitesmoke">
                <tr>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td><a href=""><img src="" alt=""></a></td>
                </tr>
            </tbody>
        </table>


        <h1 class="text-white">Alamat Rumah</h1>
        <table class="table table-bordered" border="1">
            <thead class="bg-success text-white">
                <tr>
                    <td>Provinsi</td>
                    <td>Kota/Kabupaten</td>
                    <td>Kecamatan</td>
                    <td>Alamat</td>
                    <td>Kode Pos</td>
                </tr>
            </thead>
            <tbody class="bg-whitesmoke">
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>

        <h1 class="text-white">Data Sekolah Sebelum</h1>
        <table class="table table-bordered" border="1">
            <thead class="bg-success text-white">
                <tr>
                    <td>Pendidikan Terakhir</td>
                    <td>Asal Sekolah</td>
                    <td>Tahun lulus</td>
                    <td>Scan Ijazah</td>
                </tr>
            </thead>
            <tbody class="bg-whitesmoke">
                <tr>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-<a href=""><img src="" alt=""></a></td>
                </tr>
            </tbody>
        </table>

        <h1 class="text-white">Kartu Keluarga</h1>
        <table class="table table-bordered" border="1">
            <thead class="bg-success text-white">
                <tr>
                    <td>Nomor Kartu Keluarga</td>
                    <td>NIK Kepala Keluarga</td>
                    <td>Scan Kartu Keluarga</td>
                </tr>
            </thead>
            <tbody class="bg-whitesmoke">
                <tr>
                    <td>-</td>
                    <td>-</td>
                    <td>-<a href=""><img src="" alt=""></a></td>
                </tr>
            </tbody>
        </table>

        <h1 class="text-white">Identitas Ayah Kandung</h1>
        <table class="table table-bordered" border="1">
            <thead class="bg-success text-white">
                <tr>
                    <td>Nama lengkap</td>
                    <td>Status Hidup</td>
                    <td>Pekerjaan</td>
                </tr>
            </thead>
            <tbody class="bg-whitesmoke">
                <tr>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
            </tbody>
        </table>

        <h1 class="text-white">Identitas Ibu Kandung</h1>
        <table class="table table-bordered" border="1">
            <thead class="bg-success text-white">
                <tr>
                    <td>Nama lengkap</td>
                    <td>Status Hidup</td>
                    <td>Pekerjaan</td>
                </tr>
            </thead>
            <tbody class="bg-whitesmoke">
                <tr>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
            </tbody>
        </table>
        <script src="{{ asset('/js/jquery-3.5.1.min.js') }}"></script>
        <script type="text/javascript">
            function LoadData(nisn_santri) {
                $.ajax({
                    url: "{{ url('panel/datasantri/form/') }}/" + nisn_santri,
                    type: "GET",
                    success: function(data) {
                        $('#detaildatasantri').html(data);
                    }
                });
            }
        </script>
    </div>
</div>
@endsection()