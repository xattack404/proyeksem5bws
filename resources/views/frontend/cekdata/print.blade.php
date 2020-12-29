<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="img/png" href="IMG/Logo.png">
    <title>Al-Djaliel</title>
    <link rel="stylesheet" href="{{ asset('assets_frontend/CSS/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_frontend/fontawesome/css/all.min.css') }}">
</head>

<body class="body-print">
    <!-- Navbar End -->
    <form class="print-area" id="printableArea">
        <div class="judul">
            <h1>bukti daftar ulang santri baru <br> pondok pesantren al-djaliel</h1>
            <img src="{{ asset('assets_frontend/IMG/Logo.png')}}" alt="">
        </div> <br> <br> <br>
        <div class="konten">
            <div class="form-bio">
                <p><span>Nomor Pendaftaran</span> <span>:</span><span>{{ $data->no_invoice }}</span></p>
                <p><span>NISN</span> <span>:</span><span>{{ $data->nisn }}</span></p>
                <p><span>Nama</span> <span>:</span><span>{{ $data->registrasi->nama }}</span></p>
                <p><span>Jenis Kelamin</span> <span>:</span><span>{{ $data->registrasi->jenis_kelamin }}</span></p>
                <p><span>Jenjang Pendidikan Terakhir</span> <span>:</span><span>{{ $data->registrasi->jejang->jejang_didik }}</span></p>
                <p><span>Tahun Lulus</span> <span>:</span><span>{{ $data->registrasi->tahun_lulus }}</span></p>
                <p></p>
                <p>*Silahkan Datang Ke Pondok Pesantren Al-Djaliel Jenggawah Jember, dengan membawa bukti pendaftaran dan berkas lainnya</p>
            </div>
            <div class="form-bio">
                <td><img src="{{ asset('foto_santri/'. $data->registrasi->foto) }}" width='75' height='170'></td>
                <div class="tandatangan">
                    <p>Tanda Tangan Santri</p>
                    <br><br><br><br><br><br><br>
                    <p>({{ $data->registrasi->nama }})</p>
                </div>
            </div>
            <button class="" type="button-print" onclick="printDiv('printableArea')">Print</button>
        </div>

    </form>
    <script>
        function printDiv(divName) {
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;

            window.print();

            document.body.innerHTML = originalContents;
        }
    </script>
</body>

</html>