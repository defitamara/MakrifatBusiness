@extends('frontend/layouts.template')

@section('content')

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>News HTML-5 Template </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/assets/img/favicon.png') }}">
    <!-- Place favicon.ico in the root directory -->
    
  <!-- CSS here -->
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/slicknav.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.min.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/magnific-popup.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/fontawesome-all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/themify-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/themify-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/slick.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/nice-select.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive.css') }}">
</head>

<body>

    @include('frontend/layouts.navbar2')
    
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{ asset('frontend/logo/logo-ponpes-250px.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start-->

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h2 class="display-4 text-white animated slideInDown mb-3">Berita Terkini</h2>
        </div>
    </div>
    <!-- Page Header End -->

    <!--================Blog Area =================-->
    <section class="blog_area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                        @foreach($artikel as $item)
                        <article class="blog_item">
                            <div class="blog_item_img">
                                <img class="card-img rounded-0" src="/data/data_artikel/{{ $item->gambar }}" alt="">
                                <a href="#" class="blog_item_date">
                                    <h3>{{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('d') }}</h3>
                                    <p>{{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('F') }}</p>
                                </a>
                            </div>

                            <div class="blog_details">
                                <a class="d-inline-block" href="/frontend/artikel/{{ $item->id_artikel }}/detail">
                                    <h2>{{ $item->judul }}</h2>
                                </a>
                                <p>{!! \Illuminate\Support\Str::limit($item->isi , 300) !!}<a href="/frontend/artikel/{{ $item->id_artikel }}/detail" class="more-btn"><strong> Read more » </strong></a></p>
                                <ul class="blog-info-link">
                                    <li><a href="#"><i class="fa fa-user"></i>{{ $item->penulis }}</a></li>
                                    <li><a href="#"><i class="fa fa-calendar"></i> {{ $item->tanggal }}</a></li>
                                </ul>
                            </div>
                        </article>
                        @endforeach

                        {{-- <nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Previous">
                                        <i class="ti-angle-left"></i>
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link">1</a>
                                </li>
                                <li class="page-item active">
                                    <a href="#" class="page-link">2</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Next">
                                        <i class="ti-angle-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav> --}}

                        <nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                                {{ $artikel->links()}}
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget search_widget">
                            <form action="/frontend/artikel/cari" method="GET">
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder='Search Keyword'
                                            onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'Search Keyword'" name="cari" value="{{ old('cari') }}">
                                        <div class="input-group-append">
                                            <button class="btns" type="submit"><i class="ti-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                                {{-- <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                                    type="submit">Search</button> --}}
                            </form>
                        </aside>

                        <aside class="single_sidebar_widget post_category_widget">
                            <h4 class="widget_title">Kategori</h4>
                            <ul class="list cat-list">
                                @foreach($kategori as $item3)
                                <li>
                                   <a href="#" class="d-flex">
                                      <p>{{ $item3->kategori_artikel }}</p>
                                      {{-- <p> ({{ $kategori2  }})</p> --}}
                                      {{-- Count belum berdasarkan tiap kategori --}}
                                   </a>
                                </li>
                                @endforeach
                            </ul>
                        </aside>

                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Postingan Lainnya</h3>
                            @foreach($artikel2 as $item2)
                            <div class="media post_item">
                               <img src="/data/data_artikel/{{ $item2->gambar }}" alt="post" width="30%">
                               <div class="media-body">
                                  <a href="/frontend/artikel/{{ $item2->id_artikel }}/detail">
                                     <h3>{{ $item2->judul }}</h3>
                                  </a>
                                  <p>{{ $item2->tanggal }}</p>
                               </div>
                            </div>
                            @endforeach
                         </aside>
                        <aside class="single_sidebar_widget tag_cloud_widget">
                            <h4 class="widget_title">Tag Clouds</h4>
                            <ul class="list">
                                <li>
                                    <a href="#">project</a>
                                </li>
                                <li>
                                    <a href="#">love</a>
                                </li>
                                <li>
                                    <a href="#">technology</a>
                                </li>
                                <li>
                                    <a href="#">travel</a>
                                </li>
                                <li>
                                    <a href="#">restaurant</a>
                                </li>
                                <li>
                                    <a href="#">life style</a>
                                </li>
                                <li>
                                    <a href="#">design</a>
                                </li>
                                <li>
                                    <a href="#">illustration</a>
                                </li>
                            </ul>
                        </aside>


                        <aside class="single_sidebar_widget instagram_feeds">
                            <h4 class="widget_title">Instagram Feeds</h4>
                            <ul class="instagram_row flex-wrap">
                                <li>
                                    <a href="#">
                                        <img class="img-fluid" src="{{ asset('frontend/assets/img/post/post_5.png') }}" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="img-fluid" src="{{ asset('frontend/assets/img/post/post_6.png') }}" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="img-fluid" src="{{ asset('frontend/assets/img/post/post_7.png') }}" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="img-fluid" src="{{ asset('frontend/assets/img/post/post_8.png') }}" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="img-fluid" src="{{ asset('frontend/assets/img/post/post_9.png') }}" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="img-fluid" src="{{ asset('frontend/assets/img/post/post_10.png') }}" alt="">
                                    </a>
                                </li>
                            </ul>
                        </aside>


                        <aside class="single_sidebar_widget newsletter_widget">
                            <h4 class="widget_title">Newsletter</h4>

                            <form action="#">
                                <div class="form-group">
                                    <input type="email" class="form-control" onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Enter email'" placeholder='Enter email' required>
                                </div>
                                <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                                    type="submit">Subscribe</button>
                            </form>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->

    {{-- @include('frontend/layouts.footer') --}}

    <!-- JS here -->

		<!-- All JS Custom Plugins Link Here here -->
        <script src="{{ asset('frontend/assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
		<!-- Jquery, Popper, Bootstrap -->
		<script src="{{ asset('frontend/assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/popper.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="{{ asset('frontend/assets/js/main.js') }}"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/slick.min.js') }}"></script>

		<!-- One Page, Animated-HeadLin -->
        <script src="{{ asset('frontend/assets/js/wow.min.js') }}"></script>
		<script src="{{ asset('frontend/assets/js/animated.headline.js') }}"></script>
		
		<!-- Scrollup, nice-select, sticky -->
        <script src="{{ asset('frontend/assets/js/jquery.scrollUp.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/jquery.nice-select.min.js') }}"></script>
		<script src="{{ asset('frontend/assets/js/jquery.sticky.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/jquery.magnific-popup.js') }}"></script>

        <!-- contact js -->
        <script src="{{ asset('frontend/assets/js/contact.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/jquery.form.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/jquery.validate.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/mail-script.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/jquery.ajaxchimp.min.js') }}"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="{{ asset('frontend/assets/js/plugins.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/main.js') }}"></script>

</body>
</html>
@endsection