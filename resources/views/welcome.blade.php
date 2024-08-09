<body>
    <!-- Navigation-->
    @include('layouts.header')
    <!-- Masthead-->
    <header class="masthead">
        <video autoplay loop muted playsinline class="background-video">
            <source src="{{ asset('assets/vid/branding.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
            <div class="d-flex justify-content-center">
                <div class="text-center">
                    <h1 class="mx-auto my-0 text-uppercase">ANTARIKSA</h1>
                    <h2 class="text-white-50 mx-auto mt-2 mb-5">Selamat Datang di Website Resmi BEM Fakultas Matematika
                        dan Ilmu Pengetahuan Alam Universitas Riau</h2>
                    <a class="btn btn-primary" href="https://instagram.com/bemfmipaunri" target="_blank">MORE
                        INFO</a>
                </div>
            </div>
        </div>
    </header>
    @include('layouts.footer')
