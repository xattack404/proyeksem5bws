@include('layouts.FrontendNavbar')
<!-- Navbar End -->
<form action="{{ route('frontend.registrasi.store') }}" class="registrasi" id="registrasi" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-box">
        <div class="form-kategori">
            <div class="judulkategori">
                <h1>Informasi Pribadi Santri</h1>
            </div>
            <div class="form-group">
                <label for="nama">Nama Lengkap</label>
                <input id="nama" name="nama" required type="text" placeholder="Isi Data">
            </div>
            <div class="form-group">
                <label for="nisn">NISN</label>
                <input id="nisn" name="nisn" required type="text" placeholder="Isi Data">
            </div>
            <div class="form-group">
                <label for="tempat">Tempat Lahir</label>
                <input id="tempat_lahir" name="tempat_lahir" required type="text" placeholder="Isi Data">
            </div>
            <div class="form-group">
                <label for="tanggal">Tanggal Lahir</label>
                <input id="tanggal" name="tgl_lahir" required type="date" placeholder="Isi Data">
            </div>
            <div class="form-group">
                <label for="kelamin">Jenis Kelamin</label>
                <select name="jenis_kelamin" id="kelamin" required>
                    <option value="">--Tentukan Pilihan--</option>
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label for="telepon">Nomor Telepon</label>
                <input id="telepon" name="no_telp" required type="number" placeholder="Isi Data">
            </div>
            <div class="form-group">
                <label for="telepon">Email</label>
                <input id="email" name="email" type="text" placeholder="Isi jika ada">
            </div>
            <div class="form-group">
                <label for="fotopribadi">Upload Foto Pribadi</label>
                <input id="fotopribadi" name="foto" required type="file" placeholder="Isi Data">
                *ukuran foto 3 x 4, ukuran file maksimal 3MB
            </div>
        </div>
        <div class="form-kategori">
            <div class="judulkategori">
                <h1>Alamat Rumah</h1>
            </div>
            <div class="form-group">
                <label for="provinsi">Provinsi</label>
                <input id="provinsi" name="prov" required type="text" placeholder="Isi Data">
            </div>
            <div class="form-group">
                <label for="kota">Kota/Kabupaten</label>
                <input id="kota" type="text" name="kabkot" required placeholder="Isi Data">
            </div>
            <div class="form-group">
                <label for="kecamatan">Kecamatan</label>
                <input id="kecamatan" type="text" name="kec" required placeholder="Isi Data">
            </div>
            <div class="form-group">
                <label for="desa">Alamat</label>
                <input id="desa" name="alamat" required type="text" placeholder="Isi Data">
            </div>
            <div class="form-group">
                <label for="kodepos">Kode Pos</label>
                <input id="kodepos" name="kode_pos" required type="number" placeholder="Isi Data">
            </div>
        </div>
    </div>


    <div class="form-box">
        <div class="form-kategori">
            <div class="judulkategori">
                <h1>Data Sekolah Sebelum</h1>
            </div>
            <div class="form-group">
                <label for="jenjangpend">Pendidikan Terakhir</label>
                <select name="pend_ter" id="jenjangpend">
                    <option value="">--Tentukan Pilihan--</option>
                    <option value="Tidak Sekolah">Tidak Sekolah</option>
                    <option value="SD">SD</option>
                    <option value="SMP/MTs">SMP/MTs</option>
                    <option value="SMA/SMK/MA">SMA/SMK/MA</option>
                </select>
            </div>
            <div class="form-group">
                <label for="lulus">Asal Sekolah</label>
                <input id="lulus" name="asal_sekolah" type="text" placeholder="Isi Data">
            </div>
            <div class="form-group">
                <label for="lulus">Tahun lulus</label>
                <input id="lulus" name="thn_lulus" type="number" placeholder="Isi Data">
            </div>
            <div class="form-group">
                <label for="ijazah">Scan Ijazah</label>
                <input id="ijazah" name="scan_ijazah" type="file" placeholder="Isi Data">
                *ukuran file maksimal 3MB
            </div>
        </div>
        <div class="form-kategori">
            <div class="judulkategori">
                <h1>Kartu Keluarga</h1>
            </div>
            <div class="form-group">
                <label for="kartukeluarga">Nomor Kartu Keluarga</label>
                <input id="kartukeluarga" name="no_kk" required type="tel" placeholder="Isi Data">
            </div>
            <div class="form-group">
                <label for="kepala">Nomor Kepala Keluarga</label>
                <input id="kepala" name="nkk" required type="text" placeholder="Isi Data">
            </div>
            <div class="form-group">
                <label for="scankartu">Scan Kartu Keluarga</label>
                <input id="scankartu" name="scan_kk" required type="file" placeholder="Isi Data">
                *ukuran file maksimal 3MB
            </div>
        </div>
        <div class="form-kategori">
            <div class="judulkategori">
                <h1>Identitas Ayah Kandung</h1>
            </div>
            <div class="form-group">
                <label for="namaayah">Nama Lengkap</label>
                <input id="namaayah" name="nama_ayah" required type="text" placeholder="Isi Data">
            </div>
            <div class="form-group">
                <label for="statushidupayah">Status Hidup</label>
                <select id="statushidupayah" name="status_ayah" required>
                    <option value="">--Tentukan Pilihan--</option>
                    <option value="Masih Hidup">Masih Hidup</option>
                    <option value="Meninggal">Meninggal</option>
                    <option value="Tidak Diketahui">Tidak diketahui</option>
                </select>
            </div>
            <div class="form-group">
                <label for="pekerjaanayah">Pekerjaan</label>
                <select name="pekerjaan_ayah" required id="pekerjaanayah">
                    <option value="">--Tentukan Pilihan--</option>
                    <option value="Wiraswasta">Wiraswasta</option>
                    <option value="Pedagang">Pedagang</option>
                    <option value="Karyawan Swasta">Karyawan Swasta</option>
                    <option value="PNS">PNS</option>
                    <option value="Pelajar">Pelajar</option>
                    <option value="Tidak memiliki pekerjaan tetap">Tidak memiliki pekerjaan</option>
                </select>
            </div>
        </div>
        <div class="form-kategori">
            <div class="judulkategori">
                <h1>Identitas Ibu Kandung</h1>
            </div>
            <div class="form-group">
                <label for="namaibu">Nama Lengkap</label>
                <input id="namaibu" name="nama_ibu" required type="text" placeholder="Isi Data">
            </div>
            <div class="form-group">
                <label for="statushidupibu">Status Hidup</label>
                <select id="statushidupibu" name="status_ibu" required>
                    <option value="">--Tentukan Pilihan--</option>
                    <option value="Masih Hidup">Masih Hidup</option>
                    <option value="Meninggal">Meninggal</option>
                    <option value="Tidak Diketahui">Tidak diketahui</option>
                </select>
            </div>
            <div class="form-group">
                <label for="pekerjaanibu">Pekerjaan</label>
                <select name="pekerjaan_ibu" id="pekerjaanibu">
                    <option value="">--Tentukan Pilihan--</option>
                    <option value="Wiraswasta">Wiraswasta</option>
                    <option value="Pedagang">Pedagang</option>
                    <option value="Karyawan Swasta">Karyawan Swasta</option>
                    <option value="PNS">PNS</option>
                    <option value="Pelajar">Pelajar</option>
                    <option value="Ibu Rumah Tangga">Ibu Rumah Tangga</option>
                    <option value="Tidak memiliki pekerjaan tetap">Tidak memiliki pekerjaan</option>
                </select>
            </div>
            <div class="form-group">
                <!-- <button type="submit" class="button green">Kirim</button> -->
                <button type="submit" class="button green">SAVE</button>
                <a href="datapendaftaran.php" class="button blue">Cek Data Pendaftaran</a>
            </div>
        </div>
    </div>
</form>

</body>

</html>