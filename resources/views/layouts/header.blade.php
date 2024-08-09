<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Antariksa | {{ $title }}</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    <style>
        .background-video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
        }
    </style>
</head>
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" style="color:#E0DBD5;" href="{{ route('landing') }}">BEM FMIPA UNRI</a>
        <button class="navbar-toggler" style="background-color:#282846;" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" style="color:#E0DBD5;" href="{{ route('landing') }}">Beranda</a>
                </li>
                <li class="nav-item dropdown">
                    <a style="color:#E0DBD5;" class="nav-link dropdown-toggle" href="#" id="tentangKamiDropdown"
                        role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Tentang Kami
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="tentangKamiDropdown">
                        <li><a class="dropdown-item" href="">Struktur Kepengurusan</a></li>
                        <li><a class="dropdown-item" href="{{ route('visimisi') }}">Visi & Misi</a></li>
                        <li><a class="dropdown-item" href="">Generasi & Logo</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a style="color:#E0DBD5;" class="nav-link dropdown-toggle" href="#" id="profilDropdown"
                        role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Profil
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="profilDropdown">
                        <li><a class="dropdown-item" href="#">Dinas Advokasi Kesejahteraan Mahasiswa dan
                                Sosial Politik</a></li>
                        <li><a class="dropdown-item" href="#">Dinas Manajemen Sumber Daya Mahasiswa</a></li>
                        <li><a class="dropdown-item" href="#">Dinas Sains, Apresisai dan Prestasi</a></li>
                        <li><a class="dropdown-item" href="#">Dinas Komunikasi dan Informasi</a></li>
                        <li><a class="dropdown-item" href="#">Dinas Pemuda, Olahraga dan Kreativitas
                                Mahasiswa</a></li>
                        <li><a class="dropdown-item" href="#">Dinas Sosial dan Masyarakat</a></li>
                        <li><a class="dropdown-item" href="#">Dinas Lingkungan Hidup</a></li>
                        <li><a class="dropdown-item" href="#">Dinas Pemberdayaan Perempuan</a></li>
                        <li><a class="dropdown-item" href="#">Dinas Ekonomi Kreatif</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a style="color:#E0DBD5;" class="nav-link" href="">Kaleidoskop</a></li>
                <li class="nav-item"><a style="color:#E0DBD5;" class="nav-link" href="{{ route('kontak') }}">Kontak</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
