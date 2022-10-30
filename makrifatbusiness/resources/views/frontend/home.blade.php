@extends('frontend/layouts.template')

@section('content')

    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border position-relative text-primary" style="width: 6rem; height: 6rem;" role="status"></div>
        <i class="fa fa-laptop-code fa-2x text-primary position-absolute top-50 start-50 translate-middle"></i>
    </div>
    <!-- Spinner End --> 

    @include('frontend/layouts.navbar')


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1">
                    <img class="img-fluid" src="{{ asset('frontend/carousel/carousel-1.jpg') }}" alt="Image">
                </button>
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="1" aria-label="Slide 2">
                    <img class="img-fluid" src="{{ asset('frontend/carousel/carousel-2.jpg') }}" alt="Image">
                </button>
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="2" aria-label="Slide 3">
                    <img class="img-fluid" src="{{ asset('frontend/carousel/carousel-3.jpg') }}" alt="Image">
                </button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset('frontend/carousel/carousel-1.jpg') }}" alt="Image">
                    <div class="carousel-caption">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-4 animated zoomIn">Satu Rumah Satu Usaha</h4>
                            <h1 class="display-1 text-white mb-0 animated zoomIn">Santri Digital Mencetak Ustad Digital</h1>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('frontend/carousel/carousel-2.jpg') }}" alt="Image">
                    <div class="carousel-caption">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-4 animated zoomIn">Yayasan Pondok Pesantren</h4>
                            <h1 class="display-1 text-white mb-0 animated zoomIn">Entrepreneur Makrifat Digital</h1>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('frontend/carousel/carousel-3.jpg') }}" alt="Image">
                    <div class="carousel-caption">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-4 animated zoomIn">Santri Digital</h4>
                            <h1 class="display-1 text-white mb-0 animated zoomIn">Satu Santri Satu Unit Usaha</h1>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Facts Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="fact-item bg-light rounded text-center h-100 p-5">
                        <i class="fa fa-certificate fa-4x text-primary mb-4"></i>
                        <h5 class="mb-3">Tahun Berdiri</h5>
                        <h1 class="display-5 mb-0" data-toggle="counter-up">2022</h1>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="fact-item bg-light rounded text-center h-100 p-5">
                        <i class="fa fa-users-cog fa-4x text-primary mb-4"></i>
                        <h5 class="mb-3">Ustad Digital</h5>
                        <h1 class="display-5 mb-0" data-toggle="counter-up">10</h1>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="fact-item bg-light rounded text-center h-100 p-5">
                        <i class="fa fa-users fa-4x text-primary mb-4"></i>
                        <h5 class="mb-3">Santri</h5>
                        <h1 class="display-5 mb-0" data-toggle="counter-up">100</h1>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="fact-item bg-light rounded text-center h-100 p-5">
                        <i class="fa fa-check fa-4x text-primary mb-4"></i>
                        <h5 class="mb-3">Artikel</h5>
                        <h1 class="display-5 mb-0" data-toggle="counter-up">7999</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->


    <!-- About Start -->
    @foreach($tk as $itemtk)
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="img-border">
                        <img class="img-fluid" src="data/data_tk/{{ $itemtk->gambar }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h6 class="section-title bg-white text-start text-primary pe-3">Tentang Kami</h6>
                        <h1 class="display-6 mb-4">{{ $itemtk->judul }}</h1>
                        <p>{!! $itemtk->deskripsi !!}</p>
                        <div class="d-flex align-items-center mb-4 pb-2">
                            <img class="flex-shrink-0 rounded-circle" src="data/data_tk/{{ $itemtk->foto_pemilik }}" alt="" style="width: 50px; height: 50px;">
                            <div class="ps-4">
                                <h6>{{ $itemtk->nama_pemilik }}</h6>
                                <small>{{ $itemtk->jabatan }}</small>
                            </div>
                        </div>
                        <a class="btn btn-primary rounded-pill py-3 px-5" href="#">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <!-- About End -->


    <!-- Service / Pelayanan Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="section-title bg-white text-center text-primary px-3">PELAYANAN</h6>
                <h1 class="display-6 mb-4">Kami Fokus Dalam Sektor Penting Era 5.0</h1>
            </div>
            <div class="row g-4">
                @foreach($pelayanan as $itemply)
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <a class="service-item d-block rounded text-center h-100 p-4" href="">
                        <img class="img-fluid rounded mb-4" src="/data/data_pelayanan/{{ $itemply->gambar }}" alt="">
                        <h4 class="mb-0">{{ $itemply->judul }}</h4>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Feature Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="h-100">
                        <h6 class="section-title bg-white text-start text-primary pe-3">MENGAPA HARUS KAMI?</h6>
                        <h1 class="display-6 mb-4">Mengapa Mereka Mempercayai Kami? Baca Disini</h1>
                        <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                        <div class="row g-4">
                            <div class="col-12">
                                <div class="skill">
                                    <div class="d-flex justify-content-between">
                                        <p class="mb-2">Digital Marketing</p>
                                        <p class="mb-2">85%</p>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="skill">
                                    <div class="d-flex justify-content-between">
                                        <p class="mb-2">SEO & Backlinks</p>
                                        <p class="mb-2">90%</p>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="skill">
                                    <div class="d-flex justify-content-between">
                                        <p class="mb-2">Copywriting & Goal Order</p>
                                        <p class="mb-2">95%</p>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
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


    {{-- <!-- Project Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="section-title bg-white text-center text-primary px-3">Our Projects</h6>
                <h1 class="display-6 mb-4">Learn More About Our Complete Projects</h1>
            </div>
            <div class="owl-carousel project-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="project-item border rounded h-100 p-4" data-dot="01">
                    <div class="position-relative mb-4">
                        <img class="img-fluid rounded" src="{{ asset('frontend/img/project-1.jpg') }}" alt="">
                        <a href="/frontend/img/project-1.jpg" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                    </div>
                    <h6>UI / UX Design</h6>
                    <span>Digital agency website design and development</span>
                </div>
                <div class="project-item border rounded h-100 p-4" data-dot="02">
                    <div class="position-relative mb-4">
                        <img class="img-fluid rounded" src="{{ asset('frontend/img/project-2.jpg') }}" alt="">
                        <a href="/frontend/img/project-2.jpg" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                    </div>
                    <h6>UI / UX Design</h6>
                    <span>Digital agency website design and development</span>
                </div>
                <div class="project-item border rounded h-100 p-4" data-dot="03">
                    <div class="position-relative mb-4">
                        <img class="img-fluid rounded" src="{{ asset('frontend/img/project-3.jpg') }}" alt="">
                        <a href="/frontend/img/project-3.jpg" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                    </div>
                    <h6>UI / UX Design</h6>
                    <span>Digital agency website design and development</span>
                </div>
                <div class="project-item border rounded h-100 p-4" data-dot="04">
                    <div class="position-relative mb-4">
                        <img class="img-fluid rounded" src="{{ asset('frontend/img/project-4.jpg') }}" alt="">
                        <a href="/frontend/img/project-4.jpg" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                    </div>
                    <h6>UI / UX Design</h6>
                    <span>Digital agency website design and development</span>
                </div>
                <div class="project-item border rounded h-100 p-4" data-dot="05">
                    <div class="position-relative mb-4">
                        <img class="img-fluid rounded" src="{{ asset('frontend/img/project-5.jpg') }}" alt="">
                        <a href="/frontend/img/project-5.jpg" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                    </div>
                    <h6>UI / UX Design</h6>
                    <span>Digital agency website design and development</span>
                </div>
                <div class="project-item border rounded h-100 p-4" data-dot="06">
                    <div class="position-relative mb-4">
                        <img class="img-fluid rounded" src="{{ asset('frontend/img/project-6.jpg') }}" alt="">
                        <a href="/frontend/img/project-6.jpg" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                    </div>
                    <h6>UI / UX Design</h6>
                    <span>Digital agency website design and development</span>
                </div>
                <div class="project-item border rounded h-100 p-4" data-dot="07">
                    <div class="position-relative mb-4">
                        <img class="img-fluid rounded" src="{{ asset('frontend/img/project-7.jpg') }}" alt="">
                        <a href="/frontend/img/project-7.jpg" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                    </div>
                    <h6>UI / UX Design</h6>
                    <span>Digital agency website design and development</span>
                </div>
                <div class="project-item border rounded h-100 p-4" data-dot="08">
                    <div class="position-relative mb-4">
                        <img class="img-fluid rounded" src="{{ asset('frontend/img/project-8.jpg') }}" alt="">
                        <a href="/frontend/img/project-8.jpg" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                    </div>
                    <h6>UI / UX Design</h6>
                    <span>Digital agency website design and development</span>
                </div>
                <div class="project-item border rounded h-100 p-4" data-dot="09">
                    <div class="position-relative mb-4">
                        <img class="img-fluid rounded" src="{{ asset('frontend/img/project-9.jpg') }}" alt="">
                        <a href="/frontend/img/project-9.jpg" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                    </div>
                    <h6>UI / UX Design</h6>
                    <span>Digital agency website design and development</span>
                </div>
                <div class="project-item border rounded h-100 p-4" data-dot="10">
                    <div class="position-relative mb-4">
                        <img class="img-fluid rounded" src="{{ asset('frontend/img/project-10.jpg') }}" alt="">
                        <a href="/frontend/img/project-10.jpg" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                    </div>
                    <h6>UI / UX Design</h6>
                    <span>Digital agency website design and development</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Project End --> --}}

    <!-- News Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="section-title bg-white text-center text-primary px-3">Berita</h6>
                <h1 class="display-6 mb-4">Berita dan Artikel Terkini</h1>
            </div>
            <div class="row g-4">
                @foreach($artikel as $itemartikel)
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <a class="service-item d-block rounded text-center h-100 p-4" href="{{ route('artikel.detail',$itemartikel->id_artikel) }}">
                        <img class="img-fluid rounded" src="data/data_artikel/{{ $itemartikel->gambar }}" alt="">
                        <div class="box1">
                            <b>{{ $itemartikel->penulis }}</b> | <span>{{ $itemartikel->tanggal }}</span>
                        </div>
                        <h5>{{ $itemartikel->judul }} </h5>
                        <button type="button" class="btn btn-outline-primary" onclick="">Read More</button>
                        
                    </a>
                </div>
                @endforeach
            </div>
            <br>
            <div class="row">
                <nav class="blog-pagination justify-content-center d-flex">
                {{-- Pagination --}}
                <ul class="pagination">
                    {{ $artikel->links()}}
                </ul>
                </nav>
            </div>
        </div>
    </div>
    <!-- News End -->


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="section-title bg-white text-center text-primary px-3">TIM KAMI</h6>
                <h1 class="display-6 mb-4">Kami adalah Tim Tepat Untuk Mimpi Hebat Anda</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item text-center p-4">
                        <img class="img-fluid border rounded-circle w-75 p-2 mb-4" src="{{ asset('frontend/img/team-1.jpg') }}" alt="">
                        <div class="team-text">
                            <div class="team-title">
                                <h5>Full Name</h5>
                                <span>Designation</span>
                            </div>
                            <div class="team-social">
                                <a class="btn btn-square btn-primary rounded-circle" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item text-center p-4">
                        <img class="img-fluid border rounded-circle w-75 p-2 mb-4" src="{{ asset('frontend/img/team-2.jpg') }}" alt="">
                        <div class="team-text">
                            <div class="team-title">
                                <h5>Full Name</h5>
                                <span>Designation</span>
                            </div>
                            <div class="team-social">
                                <a class="btn btn-square btn-primary rounded-circle" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item text-center p-4">
                        <img class="img-fluid border rounded-circle w-75 p-2 mb-4" src="{{ asset('frontend/img/team-3.jpg') }}" alt="">
                        <div class="team-text">
                            <div class="team-title">
                                <h5>Full Name</h5>
                                <span>Designation</span>
                            </div>
                            <div class="team-social">
                                <a class="btn btn-square btn-primary rounded-circle" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    {{-- <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="section-title bg-white text-center text-primary px-3">Testimonial</h6>
                <h1 class="display-6 mb-4">What Our Clients Say!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item bg-light rounded p-4">
                    <div class="d-flex align-items-center mb-4">
                        <img class="flex-shrink-0 rounded-circle border p-1" src="{{ asset('frontend/img/testimonial-1.jpg') }}" alt="">
                        <div class="ms-4">
                            <h5 class="mb-1">Client Name</h5>
                            <span>Profession</span>
                        </div>
                    </div>
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                </div>
                <div class="testimonial-item bg-light rounded p-4">
                    <div class="d-flex align-items-center mb-4">
                        <img class="flex-shrink-0 rounded-circle border p-1" src="{{ asset('frontend/img/testimonial-2.jpg') }}" alt="">
                        <div class="ms-4">
                            <h5 class="mb-1">Client Name</h5>
                            <span>Profession</span>
                        </div>
                    </div>
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                </div>
                <div class="testimonial-item bg-light rounded p-4">
                    <div class="d-flex align-items-center mb-4">
                        <img class="flex-shrink-0 rounded-circle border p-1" src="{{ asset('frontend/img/testimonial-3.jpg') }}" alt="">
                        <div class="ms-4">
                            <h5 class="mb-1">Client Name</h5>
                            <span>Profession</span>
                        </div>
                    </div>
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                </div>
                <div class="testimonial-item bg-light rounded p-4">
                    <div class="d-flex align-items-center mb-4">
                        <img class="flex-shrink-0 rounded-circle border p-1" src="{{ asset('frontend/img/testimonial-4.jpg') }}" alt="">
                        <div class="ms-4">
                            <h5 class="mb-1">Client Name</h5>
                            <span>Profession</span>
                        </div>
                    </div>
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End --> --}}

    <!-- ======= Contact Section ======= -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="section-title bg-white text-center text-primary px-3">KONTAK KAMI</h6>
                <h1 class="display-6 mb-4">Kami Selalu Siap Melayani Anda! Hubungi Segera</h1>
            </div>
            <div id="contact" class="contact-area">
                <div class="contact-inner area-padding">
                <div class="contact-overly"></div>
                <div class="container ">
                    <div class="row">
                    <!-- Start contact icon column -->
                    <div class="col-md-4">
                        <div class="contact-icon text-center">
                        <div class="single-icon">
                            <i class="fa fa-phone text-primary"></i>
                            <p>
                            Telpon: <a href="https://wa.me/628123489038" target="_blank">+62 812-3489-038</a><br>
                            <span>Setiap Hari (24 Jam)</span>
                            </p>
                        </div>
                        </div>
                    </div>
                    <!-- Start contact icon column -->
                    <div class="col-md-4">
                        <div class="contact-icon text-center">
                        <div class="single-icon">
                            <i class="far fa-envelope text-primary"></i>
                            <p>
                            Email: imronpribadi1972@gmail.com<br>
                            <span>Web: <a href="https://www.makrifatbusiness.co.id" target="_blank">www.makrifatbusiness.co.id</a></span>
                            </p>
                        </div>
                        </div>
                    </div>
                    <!-- Start contact icon column -->
                    <div class="col-md-4">
                        <div class="contact-icon text-center">
                        <div class="single-icon">
                            <i class="bi bi-geo-alt text-primary"></i>
                            <p>
                            Location: Krajan Tutul, Balung, Jember<br>
                            <span>Jawa Timur 68161, ID</span>
                            </p>
                        </div>
                        </div>
                    </div>
                    </div>
                    <br>
                    <div class="row">
        
                    <!-- Start Google Map -->
                    <div class="col-md-6">
                        <!-- Start Map -->
                        {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22864.11283411948!2d-73.96468908098944!3d40.630720240038435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbg!4v1540447494452" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe> --}}
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15792.677875059704!2d113.520269!3d-8.285927!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb813151d081d5d45!2sMAKRIFAT%20BUSINESS%20-%20KAMPUNG%20WISATA%20CRAFT%20JEMBER!5e0!3m2!1sid!2sid!4v1666421083120!5m2!1sid!2sid" width="100%" height="380" frameborder="0" style="border:0;" allowfullscreen></iframe>
                        <!-- End Map -->
                    </div>
                    <!-- End Google Map -->
        
                    <!-- Start  contact -->
                    <div class="col-md-6">
                        <div class="form contact-form">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                            </div>
                            <div class="form-group mt-3">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                            </div>
                            <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                            </div>
                            <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                            </div>
                            <br>
                            <div class="text-center"><button type="submit" class="btn btn-primary rounded-pill py-3 px-5">Send Message</button></div>
                        </form>
                        </div>
                    </div>
                    <!-- End Left contact -->
                    </div>
                </div>
                </div>
            </div><!-- End Contact Section -->
        </div>
    </div>

    
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