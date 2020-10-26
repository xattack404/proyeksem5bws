<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="img/png" href="IMG/Logo.png">
    <title>Al-Djaliel</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
</head>
<body class="bg-registrasi">
<!-- Navbar -->
    <?php include 'navbar.php';?>
<!-- Navbar End -->
    <form action="" class="registrasi">
        <div class="form-box">
            <div class="form-kategori">
                <div class="judulkategori">
                    <h1>Informasi Pribadi Santri</h1>
                </div>
                <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input id="nama" type="text" placeholder="Isi Data">
                </div>
                <div class="form-group">
                    <label for="nisn">NISN</label>
                    <input id="nisn" type="text" placeholder="Isi Data">
                </div>                
                <div class="form-group">
                    <label for="nik">Nomer Identitas(NIK)</label>
                    <input id="nik" type="text" placeholder="Isi Data">
                </div>
                <div class="form-group">
                    <label for="tempat">Tempat Lahir</label>
                    <input id="tempat" type="text" placeholder="Isi Data">
                </div>               
                <div class="form-group">
                    <label for="tanggal">Tanggal Lahir</label>
                    <input id="tanggal" type="date" placeholder="Isi Data">
                </div>
                <div class="form-group">
                    <label for="kelamin">Jenis Kelamin</label>
                    <select name="" id="kelamin">
                        <option value="">--Tentukan Pilihan--</option>
                        <option value="">Laki-Laki</option>
                        <option value="">Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="telepon">Nomor Telepon</label>
                    <input id="telepon" type="tel" placeholder="Isi Data">
                </div>
                <div class="form-group">
                    <label for="fotopribadi">Upload Foto Pribadi</label>
                    <input id="fotopribadi" type="file" placeholder="Isi Data">
                    *ukuran foto 3 x 4, ukuran file maksimal 3MB
                </div>
            </div>
            <div class="form-kategori">
                <div class="judulkategori">
                    <h1>Alamat Rumah</h1>
                </div>
                <div class="form-group">
                    <label for="provinsi">Provinsi</label>
                    <input id="provinsi" type="text" placeholder="Isi Data">
                </div>    
                <div class="form-group">
                    <label for="kota">Kota/Kabupaten</label>
                    <input id="kota" type="text" placeholder="Isi Data">
                </div>           
                <div class="form-group">
                    <label for="kecamatan">Kecamatan</label>
                    <input id="kecamatan" type="text" placeholder="Isi Data">
                </div>
                <div class="form-group">
                    <label for="desa">Desa/Kelurahan</label>
                    <input id="desa" type="text" placeholder="Isi Data">
                </div>
                <div class="form-group">
                    <label for="kodepos">Kode Pos</label>
                    <input id="kodepos" type="text" placeholder="Isi Data">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat Rumah</label>
                    <input id="alamat" type="text" placeholder="Isi Data">
                </div>
            </div>
        </div>


        <div class="form-box">
            <div class="form-kategori">
                <div class="judulkategori">
                    <h1>Data Sekolah Sebelum</h1>
                </div>             
                <div class="form-group">
                    <label for="jenispend">Jenis Pendidikan</label>
                    <select name="" id="jenispend">
                        <option value="">--Tentukan Pilihan--</option>
                        <option value="">Pendidikan Diniyah Formal</option>
                        <option value="">Satuan Muadalah</option>
                        <option value="">PPS Wajar Dikdas</option>
                        <option value="">Pendidika kesetaraan (paket)</option>
                        <option value="">Sekolah Umum</option>
                        <option value="">Madrasah</option>
                    </select>
                </div>             
                <div class="form-group">
                    <label for="jenjangpend">Jenjang Pendidikan</label>
                    <select name="" id="jenjangpend">
                        <option value="">--Tentukan Pilihan--</option>
                        <option value="">MI/SD/ULA</option>
                        <option value="">MTs?SMP/WUSTHA</option>
                        <option value="">MA/SMA/ULYA</option>
                        <option value="">MAK/SMK</option>
                        <option value="">PTKI</option>
                        <option value="">MA'AHAD ALY</option>
                        <option value="">PT. UMUM</option>
                        <option value="">Belum Ada</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="lulus">Tahun lulus</label>
                    <input id="lulus" type="tel" placeholder="Isi Data">
                </div> 
                <div class="form-group">
                    <label for="ijazah">Scan Ijazah</label>
                    <input id="ijazah" type="file" placeholder="Isi Data">
                    *ukuran file maksimal 3MB
                </div> 
            </div>
            <div class="form-kategori">
                <div class="judulkategori">
                    <h1>Kartu Keluarga</h1>
                </div>         
                <div class="form-group">
                    <label for="kartukeluarga">Nomor Kartu Keluarga</label>
                    <input id="kartukeluarga" type="tel" placeholder="Isi Data">
                </div>        
                <div class="form-group">
                    <label for="kepala">Nomor Kepala Keluarga</label>
                    <input id="kepala" type="text"  placeholder="Isi Data">
                </div>      
                <div class="form-group">
                    <label for="scankartu">Scan Kartu Keluarga</label>
                    <input id="scankartu" type="file"  placeholder="Isi Data">
                    *ukuran file maksimal 3MB
                </div> 
            </div>
            <div class="form-kategori">
                <div class="judulkategori">
                    <h1>Identitas Ayah Kandung</h1>
                </div>         
                <div class="form-group">
                    <label for="namaayah">Nama Lengkap</label>
                    <input id="namaayah" type="text" placeholder="Isi Data">
                </div>   
                <div class="form-group">
                    <label for="statushidupayah">Status Hidup</label>
                    <select name="" id="statushidupayah">
                        <option value="">--Tentukan Pilihan--</option>
                        <option value="">Hidup</option>
                        <option value="">Meninggal</option>
                        <option value="">Tidak diketahui</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="pekerjaanayah">Pekerjaan</label>
                    <select name="" id="pekerjaanayah">
                        <option value="">--Tentukan Pilihan--</option>
                        <option value="">Wiraswasta</option>
                        <option value="">Pedagang</option>
                        <option value="">Karyawan Swasta</option>
                        <option value="">PNS</option>
                        <option value="">Pelajar</option>
                        <option value="">Todak memiliki pekerjaan tetap</option>
                    </select>
                </div>
            </div>
            <div class="form-kategori">
                <div class="judulkategori">
                    <h1>Identitas Ibu Kandung</h1>
                </div>         
                <div class="form-group">
                    <label for="namaibu">Nama Lengkap</label>
                    <input id="namaibu" type="text" placeholder="Isi Data">
                </div>   
                <div class="form-group">
                    <label for="statushidupibu">Status Hidup</label>
                    <select name="" id="statushidupibu">
                        <option value="">--Tentukan Pilihan--</option>
                        <option value="">Hidup</option>
                        <option value="">Meninggal</option>
                        <option value="">Tidak diketahui</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="pekerjaanibu">Pekerjaan</label>
                    <select name="" id="pekerjaanibu">
                        <option value="">--Tentukan Pilihan--</option>
                        <option value="">Wiraswasta</option>
                        <option value="">Pedagang</option>
                        <option value="">Karyawan Swasta</option>
                        <option value="">PNS</option>
                        <option value="">Pelajar</option>
                        <option value="">Todak memiliki pekerjaan tetap</option>
                    </select>
                </div>
                <div class="form-group">
                    <!-- <button type="submit" class="button green">Kirim</button> -->
                    <a href="#popup" class="button green">KIRIM</a>
                    <a href="datapendaftaran.php" class="button blue">Cek Data Pendaftaran</a>
                </div>
            </div>
        </div>
    </form>
    <form action="" id="popup">
        <div class="popup-bg">
            <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
            <h1>Data dan Berkas Terkirim <br> Cek Email Anda</h1>
            <a href="#" class="btn-popup red">Tutup</a>
        </div>
    </form>
</body>
</html>