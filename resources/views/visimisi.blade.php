<body>
    @include('layouts.header')
    <!-- head -->
    <header class="masthead">
        <video autoplay loop muted playsinline class="background-video">
            <source src="{{ asset('assets/vid/branding.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
            <div class="d-flex justify-content-center">
                <div class="text-center">
                    <div class="row">
                        <div class="col-md-12 mb-3 mb-md-0">
                            <div class="card py-4 h-100">
                                <div class="card-body text-center">
                                    <h4 class="text-uppercase m-0" style="color:#282846">Visi & Misi</h4>
                                    <hr class="my-4 mx-auto" />
                                    <p>
                                        Visi dan Misi BEM FMiPA UNRI Kabinet Antariksa
                                    </p>
                                    <h4 class="text-uppercase m-0" style="color:#282846">Visi</h4>
                                    <p>
                                        Bersatu Membangun BEM FMIPA sebagai Lembaga Kolaborator Saintis Pergerakan
                                    </p>
                                    <h4 class="text-uppercase m-0" style="color:#282846">Misi</h4>
                                        <ul class="fa-ul">
                                            <li class="mt-2"><span class="fa-li" style="color:#282846;"><i
                                                        class="fas fa-circle"></i></span>Berkolaborasi bersama lembaga
                                                internal dan
                                                eksternal kampus guna menciptakan keharmonisan yang berkelanjutan</li>
                                            <li class="mt-2"><span class="fa-li" style="color:#282846;"><i
                                                        class="fas fa-circle"></i></span>Mewujudkan saintis yang kritis
                                                dengan
                                                mengedepankan
                                                diskusi dan kajian strategis terhadap isu kampus, daerah maupun nasional
                                            </li>
                                            <li class="mt-2"><span class="fa-li" style="color:#282846;"><i
                                                        class="fas fa-circle"></i></span>Mengoptimalkan sistem
                                                pengelolaan informasi
                                                secara
                                                efektif dan menciptakan wadah pengembangan potensi dan minat bakat para
                                                saintis</li>
                                        </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    {{-- <div class="container px-4 px-lg-5">
                                <div class="row gx-4 gx-lg-5 justify-content-center">
                                    <div class="col-lg-8">
                                        <h2 class="mb-4" style="color:#282846">Visi</h2>
                                        <p>
                                            Bersatu Membangun BEM FMIPA sebagai Lembaga Kolaborator Saintis Pergerakan
                                        </p>
                                    </div>
                                </div>
                                <div class="row gx-4 gx-lg-5 justify-content-center">
                                    <div class="col-lg-8 text-left">
                                        <h2 class="mb-4" style="color:#282846">Misi</h2>
                                        <ul class="fa-ul">
                                            <li class="mt-2"><span class="fa-li" style="color:#282846;"><i
                                                        class="fas fa-circle"></i></span>Berkolaborasi bersama lembaga
                                                internal dan
                                                eksternal kampus guna menciptakan keharmonisan yang berkelanjutan</li>
                                            <li class="mt-2"><span class="fa-li" style="color:#282846;"><i
                                                        class="fas fa-circle"></i></span>Mewujudkan saintis yang kritis
                                                dengan
                                                mengedepankan
                                                diskusi dan kajian strategis terhadap isu kampus, daerah maupun nasional
                                            </li>
                                            <li class="mt-2"><span class="fa-li" style="color:#282846;"><i
                                                        class="fas fa-circle"></i></span>Mengoptimalkan sistem
                                                pengelolaan informasi
                                                secara
                                                efektif dan menciptakan wadah pengembangan potensi dan minat bakat para
                                                saintis</li>
                                        </ul>
                                    </div>
                                </div>
                            </div> --}}
    </header>
    @include('layouts.footer')
