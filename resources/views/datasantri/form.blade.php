<div id="detaildatasantri2">
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
                @php
                $santri = $data['santri_aktif'];
                @endphp
                <tr>
                    <td>{{ $santri->relasi->nama }}</td>
                    <td>{{ $santri->nisn_santri }}</td>
                    <td>{{ $santri->relasi->tempat_lahir }}</td>
                    <td>{{ $santri->relasi->tgl_lahir }}</td>
                    <td>{{ $santri->relasi->no_telp }}</td>
                    <td>{{ $santri->relasi->email }}</td>
                    <td><img src="{{ asset('foto_santri/'. $santri->relasi->foto) }}" width='100' height='120'></td>
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
                    <td>{{ $santri->relasi->provinsi }}</td>
                    <td>{{ $santri->relasi->kabupaten_kota }}</td>
                    <td>{{ $santri->relasi->kecamatan }}</td>
                    <td>{{ $santri->relasi->alamat }}</td>
                    <td>{{ $santri->relasi->kode_pos }}</td>
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
                    <td>{{ $santri->relasi->jejang->jejang_didik }}</td>
                    <td>{{ $santri->relasi->asal_sekolah }}</td>
                    <td>{{ $santri->relasi->tahun_lulus }}</td>
                    <td><img src="{{ asset('scn_ijz/'. $santri->relasi->file_ijazah) }}" width='100' height='120'></td>
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
                    <td>{{ $santri->relasi->relasidetail->no_kk }}</td>
                    <td>{{ $santri->relasi->relasidetail->nik_kepala_keluarga }}</td>
                    <td><img src="{{ asset('scn_kk/'. $santri->relasi->relasidetail->scan_kk) }}" width='100' height='120'></td>
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
                    <td>{{ $santri->relasi->relasidetail->nama_ayah }}</td>
                    <td>{{ $santri->relasi->relasidetail->status_ayah }}</td>
                    <td>{{ $santri->relasi->relasidetail->pekerjaan_ayah }}</td>
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
                    <td>{{ $santri->relasi->relasidetail->nama_ibu }}</td>
                    <td>{{ $santri->relasi->relasidetail->status_ibu }}</td>
                    <td>{{ $santri->relasi->relasidetail->pekerjaan_ibu }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>