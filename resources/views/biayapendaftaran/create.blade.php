@extends('layouts.adminmain')
@section('content')
<section class="section">

  <div class="section-header">
    <h1> Biaya Pendaftaran <small>Tambah Data</small></h1>
  </div>

  <div class="section-body">
    <div class="col-12 col-md-6 col-lg-6">
      <div class="card">
        <div class="card-header">
          <a href="{{ route('biayapendaftaran.index') }}">
            <button type="button" class="btn btn-outline-info">
              <i class="fas fa-arrow-circle-left"></i> Back
            </button>
          </a>
        </div>
        <div class="card-body">
          <form action="{{ route('biayapendaftaran.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label>Jejang Didik</label>
              <input type="text" name="jejang_didik" class="form-control">
            </div>
            <div class="form-group">
              <label>Harga Kitab</label>
              <input type="varchar" name="harga_kitab" class="form-control">
            </div>
            <div class="form-group">
              <label>Harga Seragam</label>
              <input type="varchar" name="harga_seragam" class="form-control">
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