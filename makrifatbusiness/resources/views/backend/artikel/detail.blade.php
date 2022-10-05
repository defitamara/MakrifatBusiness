@extends('../backend/layouts.template')

@section('content')
      <!-- ============================================================== -->
      <!-- Page wrapper  -->
      <!-- ============================================================== -->
      <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
          <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
              <h4 class="page-title">Detail Artikel</h4>
              <div class="ms-auto text-end">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                      Library
                    </li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
          <!-- ============================================================== -->
          <!-- Start Page Content -->
          <!-- ============================================================== -->
          {{-- <div class="row"> --}}
            {{-- <div class="col-md-6"> --}}
              <div class="card">
                @foreach ($artikel as $item)
                  <div class="card-body">
                    <div class="card-title">
                      <a href="/dashboard">Dashboard / </a>
                      <a href="/artikel">Artikel / </a>
                      {{ $item->judul }}
                    </div>
                    <div class="d-flex flex-row comment-row mt-0">
                      <div class="p-2">
                        <img
                          src="{{ asset('backend/assets/images/users/1.jpg') }}"
                          alt="user"
                          width="50"
                          class="rounded-circle"
                        />
                      </div>
                      <div class="comment-text w-100">
                        <img src="/data/data_artikel/{{ $item->gambar }}" alt="" width="500"><br><br>
                        <h6 class="font-medium">{{ $item->penulis }} | 
                        {{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('l, d F Y') }}
                        | {{ $item->kategori_artikel }} </h6>
                        {{-- <span class="text-muted float-end">{{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('l, d F Y') }}</span> --}}
                        <span class="mb-3 d-block"
                          >{!! $item->isi !!}
                        </span>
                        <div class="comment-footer float-end">
                          <a href="{{ route('artikel.index') }}"><button
                            type="button"
                            class="btn btn-success btn-sm text-white">
                            Kembali
                          </button></a>
                          <a href="{{ route('artikel.edit',$item->id_artikel) }}"><button
                            type="button"
                            class="btn btn-cyan btn-sm text-white">
                            Edit
                          </button></a>
                          {{-- <button
                            type="button"
                            class="btn btn-danger btn-sm text-white">
                            Delete
                          </button> --}} 
                        </div>
                      </div>
                    </div>
                  </div>
                @endforeach
              </div>
      {{-- </div>         --}}
      <!-- ============================================================== -->
      <!-- End Page wrapper  -->
      <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->


    @endsection

