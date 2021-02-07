<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="img/png" href="{{ asset('assets_frontend/IMG/Logo.png') }}">
    <title>Al-Djaliel</title>
    <link rel="stylesheet" href="{{ asset('assets_frontend/CSS/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_frontend/fontawesome/css/all.min.css') }}">
    <script src="{{ asset('assets_frontend/JS/pagination.js') }}"></script>
</head>

@include('layouts.FrontendNavbar')

<body class="bg-registrasi2">
    <!-- Navbar -->
    <!-- Navbar End -->
    <form action="" class="registrasi2">
        <div class="form-group2">
            <input id="nisn" name="nisn" type="text" placeholder="Masukan No NISN Anda">
            <a href="#popup2" onclick="LoadData()" class="button green" target="">Cek Data Pendaftaran</a>
            <a href="{{ route('frontend.registrasi.index')}}" class="button blue">Belum Daftar</a>
        </div>
    </form>


    <form id="popup2" action="{{ route('frontend.cekdata.submit') }}" enctype="multipart/form-data" method="POST">
        <div class="popup-bg">
            <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
            <h1>Masukan no NISN yang sudah anda daftarkan</h1>
            <a href="#" class="btn-popup red">Tutup</a>
        </div>
    </form>


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