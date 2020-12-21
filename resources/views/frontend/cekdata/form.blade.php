<form id="popup2" action="{{ route('frontend.cekdata.submit', ['nisn' => $data->nisn]) }}" enctype="multipart/form-data" method="POST">
    <input type="hidden" name="_method" value="PUT">
    @csrf
    <div class="popup-bg2">
        <h1>
            Selamat Data dan Berkas Anda Diterima
        </h1>
        @php
        $cekdata = $data->registrasi;
        @endphp
        <div class="registrasi inputan">
            <div class="form-box">
                <div class="form-group">
                    <label for="invoice">Nomer Pendaftaran</label>
                    <input id="invoice" type="text" value="{{ $data->no_invoice }}">
                </div>
                <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input id="nama" type="text" value="{{ $cekdata->nama }}">
                </div>
                <div class="form-group">
                    <label for="nama">Tempat Lahir</label>
                    <input id="nama" type="text" value="{{ $cekdata->tempat_lahir }}">
                </div>
            </div>
            <div class="form-box">
                <div class="form-group">
                    <label for="nama">NISN</label>
                    <input id="nama" type="text" value="{{ $cekdata->nisn }}">
                </div>
                <div class="form-group">
                    <label for="nama">Jenis Kelamin</label>
                    <input id="nama" type="text" value="{{ $cekdata->jenis_kelamin }}">
                </div>
                <div class="form-group">
                    <label for="nama">Tangal Lahir</label>
                    <input id="nama" type="text" value="{{ $cekdata->tgl_lahir }}">
                </div>

            </div>
        </div>
        <p>
            Alhamdulillah anda diterima di Pondok Pesantren Syariah Al Djaliel. Tahap selanjutnya adalah melakukan pembayaran Kitab dan seragam untuk keperluan santri. Kitab dan seragam tersebut sebagai barang yang digunakan dalam kegiatan sehari-hari Pondok Pesantren Syariah Al Djaliel.
        </p>
        <table border="" cellpadding="5" cellspacing="1">
            <tr>
                <th>Harga Seragam</th>
                <th>Harga Kitab</th>
            </tr>
            <tr>
                <td>Rp. 100000</td>
                <td>Rp. 75000</td>
            </tr>
            <tr>
                <th style="background-color: #D4213E;">Total yang harus dibayara</th>
                <th style="background-color: #21D44B;">Status Pembayara</th>
            </tr>
            <tr>
                <td>{{ $data->total_pembayaran }}</td>
                <td>{{ $data->status }}</td>
            </tr>
        </table>
        <p>
            Pembayaran dapat dilakukan melalu via transfer rekening atau melalui teller bank :
        </p>
        <table border="" cellpadding="5" cellspacing="1">
            <tr>
                <th>Nama Bank</th>
                <th>No rekening</th>
                <th>Atas Nama</th>
            </tr>
            <tr>
                <td>BNI</td>
                <td>8950299399999</td>
                <td>Tahajjudin Fajri</td>
            </tr>
            <tr>
                <td>BCA</td>
                <td>8950299399999</td>
                <td>Tahajjudin Fajri</td>
            </tr>
            <tr>
                <td>MANDIRI</td>
                <td>8950299399999</td>
                <td>Tahajjudin Fajri</td>
            </tr>
            <tr>
                <td>BRI</td>
                <td>8950299399999</td>
                <td>Tahajjudin Fajri</td>
            </tr>
        </table>
        <div class="registrasi inputan">

            <div class="form-box">
                <div class="form-group">
                    <label for="fotopribadi">Upload Bukti Pembayaran</label>
                    <input id="foto" name="foto" type="file" placeholder="Isi Data">
                    *ukuran file maksimal 3MB
                </div>
                <div class="form-group">
                    <button type="submit" class="button green">Simpan</button>
                    <a href="print.php" class="button blue" target="_blank">Cetak Data Pendaftaran</a>
                    <a href="#" class="button red">tutup</a>
                </div>
            </div>
        </div>

    </div>
</form>