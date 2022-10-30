<!-- Footer Start -->
<div class="container-fluid bg-dark text-body footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h5 class="text-light mb-4">Alamat</h5>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Jember, Jawa Timur, Indonesia</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i><a href="https://wa.me/628123489038" target="_blank">+62 812-3489-038</a></p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>imronpribadi1972@gmail.com</p>
                <div class="d-flex pt-2">
                    <a class="btn btn-square btn-outline-secondary rounded-circle me-1" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-square btn-outline-secondary rounded-circle me-1" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square btn-outline-secondary rounded-circle me-1" href=""><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-square btn-outline-secondary rounded-circle me-0" href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-light mb-4">Link Pintasan</h5>
                <a class="btn btn-link" href="">Tentang Kami</a>
                <a class="btn btn-link" href="">Kontak Kami</a>
                <a class="btn btn-link" href="">Pelayanan</a>
                <a class="btn btn-link" href="">Syarat & Ketentuan</a>
                <a class="btn btn-link" href="">Lainnya</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-light mb-4">Galeri</h5>
                <div class="row g-2">
                    @foreach($galeri as $itemgaleri)
                    <div class="col-4">
                        <img class="img-fluid rounded" src="/data/data_galeri/{{ $itemgaleri->gambar }}" alt="Image">
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-light mb-4">Newsletter</h5>
                <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                <div class="position-relative mx-auto" style="max-width: 400px;">
                    <input class="form-control bg-transparent border-secondary w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                    <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a href="#">Pondok Pesantren Entrepreneur Makrifat Digital</a>, All Right Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    Designed By <a href="#">MB Team</a>
                    {{-- <br>Distributed By: <a class="border-bottom" href="https://themewagon.com" target="_blank">ThemeWagon</a> --}}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->