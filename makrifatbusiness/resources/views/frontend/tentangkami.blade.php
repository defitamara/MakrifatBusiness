@extends('frontend/layouts.template')

@section('content')

    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border position-relative text-primary" style="width: 6rem; height: 6rem;" role="status"></div>
        <i class="fa fa-laptop-code fa-2x text-primary position-absolute top-50 start-50 translate-middle"></i>
    </div>
    <!-- Spinner End --> 

    @include('frontend/layouts.navbar')


    <!-- About Start -->
    @foreach($tk as $itemtk)
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="img-border">
                        <img class="img-fluid" src="/data/data_tk/{{ $itemtk->gambar }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h6 class="section-title bg-white text-start text-primary pe-3">Tentang Kami</h6>
                        <h1 class="display-6 mb-4">{{ $itemtk->judul }}</h1>
                        <p>{!! $itemtk->deskripsi !!}</p>
                        <div class="d-flex align-items-center mb-4 pb-2">
                            <img class="flex-shrink-0 rounded-circle" src="/data/data_tk/{{ $itemtk->foto_pemilik }}" alt="" style="width: 50px; height: 50px;">
                            <div class="ps-4">
                                <h6>{{ $itemtk->nama_pemilik }}</h6>
                                <small>{{ $itemtk->jabatan }}</small>
                            </div>
                        </div>
                        {{-- <a class="btn btn-primary rounded-pill py-3 px-5" href="#">Read More</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <!-- About End -->

    <!-- Feature Start / Keunggulan -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="h-100">
                        @foreach($keunggulan as $itemku)
                        <h6 class="section-title bg-white text-start text-primary pe-3">MENGAPA HARUS KAMI?</h6>
                        <h1 class="display-6 mb-4">{{ $itemku->judul }}</h1>
                        <p class="mb-4">{{ $itemku->deskripsi }}</p>
                        <div class="row g-4">
                            <div class="col-12">
                                <div class="skill">
                                    <div class="d-flex justify-content-between">
                                        <p class="mb-2">{{ $itemku->kompetensi_1 }}</p>
                                        <p class="mb-2">{{ $itemku->persentase_1 }}%</p>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="{{ $itemku->persentase_1 }}" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="skill">
                                    <div class="d-flex justify-content-between">
                                        <p class="mb-2">{{ $itemku->kompetensi_2 }}</p>
                                        <p class="mb-2">{{ $itemku->persentase_2 }}%</p>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="{{ $itemku->persentase_2 }}" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="skill">
                                    <div class="d-flex justify-content-between">
                                        <p class="mb-2">{{ $itemku->kompetensi_3 }}</p>
                                        <p class="mb-2">{{ $itemku->persentase_3 }}%</p>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="{{ $itemku->persentase_3 }}" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="img-border">
                        <img class="img-fluid" src="{{ asset('frontend/img/feature.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->

    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="section-title bg-white text-center text-primary px-3">TIM KAMI</h6>
                <h1 class="display-6 mb-4">Kami adalah Tim Tepat Untuk Mimpi Hebat Anda</h1>
            </div>
            <div class="row g-4">
                @foreach($tim as $itemtim)
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item text-center p-4">
                        <img class="img-fluid border rounded-circle w-75 p-2 mb-4" src="/data/data_tim/{{ $itemtim->foto }}" alt="">
                        <div class="team-text">
                            <div class="team-title">
                                <h5>{{ $itemtim->nama }}</h5>
                                <span>{{ $itemtim->jabatan }}</span>
                            </div>
                            <div class="team-social">
                                <a class="btn btn-square btn-primary rounded-circle" href="{{ $itemtim->link_facebook }}"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle" href="{{ $itemtim->link_twitter }}"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle" href="{{ $itemtim->link_instagram }}"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Team End -->

    
    @include('frontend/layouts.footer')

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('frontend/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('frontend/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('frontend/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('frontend/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('frontend/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/lib/lightbox/js/lightbox.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('frontend/js/main.js') }}"></script>
    

@endsection