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
<body class="bg-registrasi2">
<!-- Navbar -->
    <?php include 'navbar.php';?>
<!-- Navbar End -->
    <form action="" class="registrasi2">
        <div class="form-group2">
            <label for="nama">Masukan nomor pendaftaran yang masuk ke alamat email yang anda daftarkan</label>
            <input id="nama" type="text" placeholder="Masukan No Pendaftaran Anda">
            <a href="print.php" class="button green" target="_blank">Cek Data Pendaftaran</a>
            <a href="registrasi.php" class="button blue">Belum Daftar</a>
        </div>
    </form>
    <form action="" id="popup">
        <div class="popup-bg">
            <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
            <h1>Nomor belum terdaftar</h1>
            <a href="#" class="btn-popup red">Tutup</a>
        </div>
    </form>
    <!-- <form action="" id="popup2">
            <div class="print-area" id="printableArea">
                
            </div>
            <button class="btn-close blue" type="button" onclick="printDiv('printableArea')">Print</button>
            <a href="#" class="btn-close red">Tutup</a>
    </form> -->
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