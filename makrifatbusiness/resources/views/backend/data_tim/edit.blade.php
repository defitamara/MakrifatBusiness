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
              <h4 class="page-title">Form Edit Data Tim</h4>
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
                <form class="form-validate form-horizontal" method="POST" enctype="multipart/form-data"
                action="{{ route('data_tim.update',$tim->id) }}">
                
                {{-- Code untuk menyimpan --}}
                {!! csrf_field() !!}
                {{-- Code untuk cek apakah ada artikel yang dipilih untuk diedit --}}
                {!! isset($tim) ? method_field('PUT') : '' !!}

                {{-- Inputtan tak terlihat --}}
                <input type="hidden" name="id" value="{{ isset($tim) ? $tim->id : '' }}">
                {{-- <input type="hidden" name="tanggal" value="{{ date('Y-m-d') }}"> --}}

                  <div class="card-body">
                    <div class="card-title">
                      <a href="/dashboard">Dashboard / </a>
                      <a href="/data_tim">Tim / </a>
                      Edit Data
                    </div>
                    <div class="form-group row">
                      <label
                        for="nama"
                        class="col-sm-3"
                        >Nama</label>
                      <div class="col-sm-13">
                        <input
                          type="text"
                          class="form-control"
                          id="nama" name="nama"
                          placeholder="Masukkan nama yang akan tampil kecil"
                          value="{{ isset($tim) ? $tim->nama : '' }}"/>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label
                        for="jabatan"
                        class="col-sm-3"
                        >Jabatan</label>
                      <div class="col-sm-13">
                        <input
                          type="text"
                          class="form-control"
                          id="jabatan" name="jabatan"
                          placeholder="Masukkan jabatan yang akan tampil kecil"
                          value="{{ isset($tim) ? $tim->jabatan : '' }}"/>
                      </div>
                    </div>
            
                    <div class="form-group row">
                      <label class="col-sm-3">
                        Foto</label>
                      <div class="col-md-13">
                        <div class="custom-file">
                          <input type="hidden" name="nama_foto" value="{{ isset($tim) ? $tim->foto : '' }}">
                          <td><img src="/data/data_tim/{{ isset($tim) ? $tim->foto : '' }}" width="200"></td>
                          <input
                            type="file"
                            id="foto" name="foto"
                            class="custom-file-input {{ $errors->has('foto') ? 'is-invalid' : ''}}"
                          />
                          @if ( $errors->has('foto'))
                            <span class="text-danger small">
                              <p>{{ $errors->first('foto') }}</p>
                            </span>
                          @endif

                          <div class="invalid-feedback">
                            Example invalid custom file feedback
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="form-group row">
                      <label
                        for="link_facebook"
                        class="col-sm-3"
                        >Link Facebook</label>
                      <div class="col-sm-13">
                        <input
                          type="text"
                          class="form-control"
                          id="link_facebook" name="link_facebook"
                          placeholder="Masukkan link facebook yang akan tampil kecil"
                          value="{{ isset($tim) ? $tim->link_facebook : '' }}"/>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label
                        for="link_twitter"
                        class="col-sm-3"
                        >Link Twitter</label>
                      <div class="col-sm-13">
                        <input
                          type="text"
                          class="form-control"
                          id="link_twitter" name="link_twitter"
                          placeholder="Masukkan link twitter yang akan tampil kecil"
                          value="{{ isset($tim) ? $tim->link_twitter : '' }}"/>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label
                        for="link_instagram"
                        class="col-sm-3"
                        >Link Instagram</label>
                      <div class="col-sm-13">
                        <input
                          type="text"
                          class="form-control"
                          id="link_instagram" name="link_instagram"
                          placeholder="Masukkan link instagram yang akan tampil kecil"
                          value="{{ isset($tim) ? $tim->link_instagram : '' }}"/>
                      </div>
                    </div>

                  <div class="border-top">
                    <div class="card-body float-end">
                      <a href="/data_tim"><button type="button" class="btn btn-secondary">BATAL</button></a>
                      <button type="submit" class="btn btn-primary">
                        SIMPAN
                      </button>
                    </div>
                  </div>
                </form>
              </div>
      {{-- </div>         --}}
      <!-- ============================================================== -->
      <!-- End Page wrapper  -->
      <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->

    

    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{ ('backend/assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ ('backend/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{ ('backend/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ ('backend/assets/extra-libs/sparkline/sparkline.js') }}"></script>
    <!--Wave Effects -->
    <script src="{{ ('backend/dist/js/waves.js') }}"></script>
    <!--Menu sidebar -->
    <script src="{{ ('backend/dist/js/sidebarmenu.js') }}"></script>
    <!--Custom JavaScript -->
    <script src="{{ ('backend/dist/js/custom.min.js') }}"></script>
    <!-- This Page JS -->
    <script src="{{ ('backend/assets/libs/inputmask/dist/min/jquery.inputmask.bundle.min.js') }}"></script>
    <script src="{{ ('backend/dist/js/pages/mask/mask.init.js') }}"></script>
    <script src="{{ ('backend/assets/libs/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ ('backend/assets/libs/select2/dist/js/select2.min.js') }}"></script>
    <script src="{{ ('backend/assets/libs/jquery-asColor/dist/jquery-asColor.min.js') }}"></script>
    <script src="{{ ('backend/assets/libs/jquery-asGradient/dist/jquery-asGradient.js') }}"></script>
    <script src="{{ ('backend/assets/libs/jquery-asColorPicker/dist/jquery-asColorPicker.min.js') }}"></script>
    <script src="{{ ('backend/assets/libs/jquery-minicolors/jquery.minicolors.min.js') }}"></script>
    <script src="{{ ('backend/assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ ('backend/assets/libs/quill/dist/quill.min.js') }}"></script>
    <script>
      //***********************************//
      // For select 2
      //***********************************//
      $(".select2").select2();

      /*colorpicker*/
      $(".demo").each(function () {
        //
        // Dear reader, it's actually very easy to initialize MiniColors. For example:
        //
        //  $(selector).minicolors();
        //
        // The way I've done it below is just for the demo, so don't get confused
        // by it. Also, data- attributes aren't supported at this time...they're
        // only used for this demo.
        //
        $(this).minicolors({
          control: $(this).attr("data-control") || "hue",
          position: $(this).attr("data-position") || "bottom left",

          change: function (value, opacity) {
            if (!value) return;
            if (opacity) value += ", " + opacity;
            if (typeof console === "object") {
              console.log(value);
            }
          },
          theme: "bootstrap",
        });
      });
      /*datwpicker*/
      jQuery(".mydatepicker").datepicker();
      jQuery("#datepicker-autoclose").datepicker({
        autoclose: true,
        todayHighlight: true,
      });
      var quill = new Quill("#editor", {
        theme: "snow",
      });
    </script>

    <!-- Link Js CkEditor -->
    <script type="text/javascript" src="{{ asset('ckeditor/ckeditor.js')}}"></script>

    @endsection

