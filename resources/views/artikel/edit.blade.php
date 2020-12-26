@extends('layouts.adminmain')
@section('content')
<section class="section">

  <div class="section-header">
    <h1>Artikel <small>Tambah Data</small></h1>
  </div>

  <div class="section-body">
    <div class="col-12 col-md-6 col-lg-6">
      <div class="card">
        <div class="card-header">
          <a href="{{ route('artikel.index') }}">
            <button type="button" class="btn btn-outline-info">
              <i class="fas fa-arrow-circle-left"></i> Back
            </button>
          </a>
        </div>
        <div class="card-body">
          <form action="{{ route('artikel.update', ['id' => $data->id]) }}" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_method" value="PUT">
            @csrf
            <div class="form-group">
              <label>Judul</label>
              <input type="text" name="judul" class="form-control" value="{{ $data->judul }}">
            </div>
            <div class="form-group">
              <label>Seo</label>
              <input type="text" name="seo" class="form-control" value="{{ $data->seo }}">
            </div>
            <div class="form-group">
              <label>Isi</label>
              <input type="text" name="isi" class="form-control" value="{{ $data->isi }}">
            </div>
            <div class="form-group">
              <label>Gambar Sebelumnya</label><br />
              <img src="{{ asset('img_artikel/'. $data->foto) }}" width='150' height='150'>
            </div>
            <div class="form-group">
              <label>* Foto Baru</label> <br>
              <input type="file" name="foto" id="foto" onchange="tampilkanPreview(this,'preview')" />
            </div>

            <div class="form-group">
              <b>Preview Gambar</><br>
                <img id="preview" src="" alt="" width="35%" />
            </div>
            <div class="form-group">
              <label>Video</label>
              <input type="text" name="video" class="form-control" value="{{ $data->video }}">
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

  <script>
    function tampilkanPreview(foto, idpreview) { //membuat objek gambar
      var gb = foto.files;
      //loop untuk merender gambar
      for (var i = 0; i < gb.length; i++) { //bikin variabel
        var gbPreview = gb[i];
        var imageType = /image.*/;
        var preview = document.getElementById(idpreview);
        var reader = new FileReader();
        if (gbPreview.type.match(imageType)) { //jika tipe data sesuai
          preview.file = gbPreview;
          reader.onload = (function(element) {
            return function(e) {
              element.src = e.target.result;
            };
          })(preview);
          //membaca data URL gambar
          reader.readAsDataURL(gbPreview);
        } else { //jika tipe data tidak sesuai
          alert("Tipe file tidak sesuai. Gambar harus bertipe .png, .gif atau .jpg.");
        }
      }
    }
  </script>
</section>
@endsection()