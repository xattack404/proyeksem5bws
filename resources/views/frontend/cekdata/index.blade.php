<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="img/png" href="{{ asset('assets_frontend/IMG/Logo.png') }}">
    <title>Al-Djaliel</title>
    <link rel="stylesheet" href="{{ asset('assets_frontend/CSS/style.css') }}">
    <script src="{{ asset('assets_frontend/JS/pagination.js') }}"></script>
</head>

@include('layouts.FrontendNavbar')

<body class="bg-registrasi2">
    <!-- Navbar -->
    <!-- Navbar End -->
    <form action="" class="registrasi2">
        <div class="form-group2">
            <label for="nama">Masukan nomor pendaftaran yang masuk ke alamat email yang anda daftarkan</label>
            <input id="nisn" name="nisn" type="text" placeholder="Masukan No Pendaftaran Anda">
            <a href="#popup2" onclick="LoadData()" class="button green" target="">Cek Data Pendaftaran</a>
            <a href="registrasi.php" class="button blue">Belum Daftar</a>
        </div>
    </form>


    <form action="" id="popup">
        <div class="popup-bg">
            <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
            <h1>Data dan Berkas Dalam Proses Pengecekan <br> Silahkan Cek Kembali dalam 1 x 24 Jam</h1>
            <a href="#" class="btn-popup red">Tutup</a>
        </div>
    </form>


    <div id="popup2">
        <div class="popup-bg2">
        </div>
    </div>
    <script src="{{ asset('/js/jquery-3.5.1.min.js') }}"></script>
    <script>
        function printDiv(divName) {
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;

            window.print();

            document.body.innerHTML = originalContents;
        }
    </script>
    <script type="text/javascript">
        function LoadData() {
            var nisn = $('#nisn').val();
            $.ajax({
                url: "{{ url('cekdata/form') }}/" + nisn,
                type: "GET",
                success: function(data) {
                    $('#popup2').html(data);
                }
            });
        }
    </script>
</body>

</html>