@extends('layouts.adminmain')
@section('content')
<section class="section">

  <div class="section-header">
    <h1>Pendaftaran <small>Tambah Data</small></h1>
  </div>

  <div class="section-body">
    <div class="col-12 col-md-6 col-lg-6">
      <div class="card">
        <div class="card-header">
          <a href="{{ route('pendaftaran.index') }}">
            <button type="button" class="btn btn-outline-info">
              <i class="fas fa-arrow-circle-left"></i> Back
            </button>
          </a>
        </div>
        <div class="card-body">
          <form action="{{ route('pendaftaran.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label>Jejang Didik</label>
              <input type="text" name="jejang_didik" class="form-control" value="{{ $data->jejang_didik }}">
            </div>
            <div class="form-group">
              <label>Harga Kitab</label>
              <input type="text" name="harga_kitab" class="form-control" value="{{ $data->harga_kitab }}">
            </div>
            <div class="form-group">
              <label>Harga Seragam</label>
              <input type="text" name="harga_seragam" class="form-control" value="{{ $data->harga_seragam }}">
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