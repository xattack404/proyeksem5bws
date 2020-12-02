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

<body>
    <nav>
        <input type="checkbox" name="" id="ribbon">
        <ul>
            <li><a href="index.php">Halaman Utama</a></li>
            <li><a href="tentangpondok.php">Tentang Al-Djaliel</a></li>
            <li><a href="profilpengurus.php">Profil Pengurus</a></li>
            <li><a href="pembelajaransantri.php">Pembelajaran Santri</a></li>
            <li><a href="registrasi.php">Pendaftaran Santri Baru</a></li>            
            <li><a href="datapendaftaran.php">Cek Data Pendaftaran</a></li>
        </ul>
        <label class="tie" for="ribbon"></label>
    </nav>