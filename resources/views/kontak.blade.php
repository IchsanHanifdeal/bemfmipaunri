<body>
    @include('layouts.header')
    <!-- Contact-->
    <header class="masthead">
        <video autoplay loop muted playsinline class="background-video">
            <source src="{{ asset('assets/vid/branding.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
            <div class="d-flex justify-content-center">
                <div class="text-center">
                    <div class="row">
                        <div class="col-md-4 mb-3 mb-md-0">
                            <div class="card py-4 h-100">
                                <div class="card-body text-center">
                                    <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                                    <h4 class="text-uppercase m-0">Line</h4>
                                    <hr class="my-4 mx-auto" />
                                    <div class="small text-black-50">4923 Market Street, Orlando FL</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3 mb-md-0">
                            <div class="card py-4 h-100">
                                <div class="card-body text-center">
                                    <i class="fas fa-envelope text-primary mb-2"></i>
                                    <h4 class="text-uppercase m-0">Twitter</h4>
                                    <hr class="my-4 mx-auto" />
                                    <div class="small text-black-50"><a href="#!">hello@yourdomain.com</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3 mb-md-0">
                            <div class="card py-4 h-100">
                                <div class="card-body text-center">
                                    <i class="fas fa-mobile-alt text-primary mb-2"></i>
                                    <h4 class="text-uppercase m-0">Email</h4>
                                    <hr class="my-4 mx-auto" />
                                    <div class="small text-black-50">+1 (555) 902-8832</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    @include('layouts.footer')
</body>

</html>
