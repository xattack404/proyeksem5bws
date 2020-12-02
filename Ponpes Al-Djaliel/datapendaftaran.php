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
            <a href="#popup2" class="button green" target="">Cek Data Pendaftaran</a>
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


    <form action="" id="popup2">
        <div class="popup-bg2">
            <h1>
                Selamat Data dan Berkas Anda Diterima
            </h1>
            <div class="registrasi inputan">
                <div class="form-box">
                    <div class="form-group">
                            <label for="invoice">Nomer Pendaftaran</label>
                            <input id="invoice" type="text" placeholder="Isi Data">
                    </div>
                    <div class="form-group">
                            <label for="nama">Nama Lengkap</label>
                            <input id="nama" type="text" placeholder="Isi Data">
                    </div>
                </div>
                <div class="form-box">
                    <div class="form-group">
                        <label for="kelamin">Jenis Kelamin</label>
                        <select name="" id="kelamin">
                            <option value="">--Tentukan Pilihan--</option>
                            <option value="">Laki-Laki</option>
                            <option value="">Perempuan</option>
                        </select>
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
                    <td>Rp. 175.000</td>
                    <td>Belum Membayar</td>
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
                            <input id="fotopribadi" type="file" placeholder="Isi Data">
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