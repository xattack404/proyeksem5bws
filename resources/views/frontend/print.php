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
<body class="">
<!-- Navbar -->
    <?php include 'navbar.php';?>
<!-- Navbar End -->
            <form class="print-area" id="printableArea">
                <div class="judul">
                    <h1>bukti daftar ulang santri baru <br> pondok pesantren al-djaliel</h1>
                    <img src="IMG/Logo.png" alt="">
                </div>
                <div class="konten">
                    <div class="form-bio">
                        <p><span>Nama</span> <span>:</span><span>Tahajjudin Fajri</span></p>
                        <p><span>Nomor Pendaftaran</span> <span>:</span><span>191192001101910</span></p>                        
                        <p><span>Jenis Kelamin</span> <span>:</span><span>Laki-Laki</span></p>
                        <p><span>Jenjang Pendidikan Terakhir</span> <span>:</span><span>MA/SMA/ULYA</span></p>
                        <p><span>Tahun Lulus</span> <span>:</span><span>2020</span></p>
                    </div>
                    <div class="form-bio">
                        <img src="IMG/tahaj.jpg" alt="">
                        <div class="tandatangan">
                            <p>Jember, 27-08-2020</p>
                            <p>Tanda Tangan Santri</p>
                            <br><br><br><br><br><br><br>
                            <p>(Tahajjudin Fajri)</p>
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