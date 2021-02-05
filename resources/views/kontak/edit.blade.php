@extends('layouts.adminmain')
@section('content')
<section class="section">

  <div class="section-header">
    <h1>Kontak <small>Tambah Data</small></h1>
  </div>

  <div class="section-body">
    <div class="col-12 col-md-6 col-lg-6">
      <div class="card">
        <div class="card-header">
          <a href="{{ route('kontak.index') }}">
            <button type="button" class="btn btn-outline-info">
              <i class="fas fa-arrow-circle-left"></i> Back
            </button>
          </a>
        </div>
        <div class="card-body">
        <form action="{{ route('kontak.update', ['id' => $data->id]) }}" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_method" value="PUT">
            @csrf
            <div class="form-group">
              <label>Nama</label>
              <input type="text" name="nama" class="form-control" value="{{ $data->nama }}">
            </div>
            <div class="form-group">
              <label>Alamat</label>
              <input type="text" name="alamat" class="form-control" value="{{ $data->alamat }}">
            </div>
            <div class="form-group">
              <label>No Telepon</label>
              <input type="number" name="no_telp" class="form-control" value="{{ $data->no_telp }}">
            </div>
            <div class="form-group">
              <label>Email</label>
              <input type="email" name="email" class="form-control" value="{{ $data->email }}">
            </div>
            <div class="form-group">
              <label>Rekening</label>
              <input type="number" name="rekening" class="form-control" value="{{ $data->rekening }}">
            </div>
            <div class="form-group">
              <label>Nama Bank</label>
              <select id="nama_bank" name="nama_bank"  class="form-control" required>
                        <option value="{{ $data->nama_bank }}">--Tentukan Pilihan--</option>
                        <option value="bca">BCA</option>
                        <option value="bri">BRI</option>
                        <option value="bni">BNI</option>
                    </select>
            </div>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary">SAVE</button>
        </div>
        </form>
      </div>
    </div>
  </div>
  </div>
</section>
@endsection()