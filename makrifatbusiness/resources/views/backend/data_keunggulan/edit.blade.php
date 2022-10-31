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
              <h4 class="page-title">Form Edit Data Keunggulan</h4>
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
                action="{{ route('data_keunggulan.update',$data_keunggulan->id_keunggulan) }}">
                
                {{-- Code untuk menyimpan --}}
                {!! csrf_field() !!}
                {{-- Code untuk cek apakah ada artikel yang dipilih untuk diedit --}}
                {!! isset($data_keunggulan) ? method_field('PUT') : '' !!}

                {{-- Inputtan tak terlihat --}}
                <input type="hidden" name="id_keunggulan" value="{{ isset($data_keunggulan) ? $data_keunggulan->id_keunggulan : '' }}">
                {{-- <input type="hidden" name="tanggal" value="{{ date('Y-m-d') }}"> --}}

                  <div class="card-body">
                    <div class="card-title">
                      <a href="/dashboard">Dashboard / </a>
                      <a href="/data_keunggulan">Data Keunggulan / </a>
                      Edit Data
                    </div>
                    <div class="form-group row">
                      <label
                        for="judul"
                        class="col-sm-3"
                        >Judul</label>
                      <div class="col-sm-13">
                        <input
                          type="text"
                          class="form-control"
                          id="judul" name="judul"
                          placeholder="Masukkan judul yang akan tampil kecil"
                          value="{{ isset($data_keunggulan) ? $data_keunggulan->judul : '' }}"/>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label
                        for="deskripsi"
                        class="col-sm-3"
                        >Deskripsi</label>
                      <div class="col-sm-13">
                        <input
                          type="text"
                          class="form-control"
                          id="deskripsi" name="deskripsi"
                          placeholder="Masukkan jumlah yang akan tampil kecil"
                          value="{{ isset($data_keunggulan) ? $data_keunggulan->deskripsi : '' }}"/>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label
                        for="kompetensi_1"
                        class="col-sm-3"
                        >Kompetensi 1</label>
                      <div class="col-sm-13">
                        <input
                          type="text"
                          class="form-control"
                          id="kompetensi_1" name="kompetensi_1"
                          placeholder="Masukkan jumlah yang akan tampil kecil"
                          value="{{ isset($data_keunggulan) ? $data_keunggulan->kompetensi_1 : '' }}"/>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label
                        for="persentase_1"
                        class="col-sm-3"
                        >Persentase Kompetensi 1</label>
                      <div class="col-sm-13">
                        <input
                          type="text"
                          class="form-control"
                          id="persentase_1" name="persentase_1"
                          placeholder="Masukkan jumlah yang akan tampil kecil"
                          value="{{ isset($data_keunggulan) ? $data_keunggulan->persentase_1 : '' }}"/>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label
                        for="kompetensi_2"
                        class="col-sm-3"
                        >Kompetensi 2</label>
                      <div class="col-sm-13">
                        <input
                          type="text"
                          class="form-control"
                          id="kompetensi_2" name="kompetensi_2"
                          placeholder="Masukkan jumlah yang akan tampil kecil"
                          value="{{ isset($data_keunggulan) ? $data_keunggulan->kompetensi_2 : '' }}"/>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label
                        for="persentase_2"
                        class="col-sm-3"
                        >Persentase Kompetensi 2</label>
                      <div class="col-sm-13">
                        <input
                          type="text"
                          class="form-control"
                          id="persentase_2" name="persentase_2"
                          placeholder="Masukkan jumlah yang akan tampil kecil"
                          value="{{ isset($data_keunggulan) ? $data_keunggulan->persentase_2 : '' }}"/>
                      </div>

                    <div class="form-group row">
                      <label
                        for="kompetensi_3"
                        class="col-sm-3"
                        >Kompetensi 3</label>
                      <div class="col-sm-13">
                        <input
                          type="text"
                          class="form-control"
                          id="kompetensi_3" name="kompetensi_3"
                          placeholder="Masukkan jumlah yang akan tampil kecil"
                          value="{{ isset($data_keunggulan) ? $data_keunggulan->kompetensi_3 : '' }}"/>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label
                        for="persentase_3"
                        class="col-sm-3"
                        >Persentase Kompetensi 3</label>
                      <div class="col-sm-13">
                        <input
                          type="text"
                          class="form-control"
                          id="persentase_3" name="persentase_3"
                          placeholder="Masukkan jumlah yang akan tampil kecil"
                          value="{{ isset($data_keunggulan) ? $data_keunggulan->persentase_3 : '' }}"/>
                      </div>
                    </div>


                    <div class="form-group row">
                      <label class="col-sm-3">
                        Gambar</label>
                      <div class="col-md-13">
                        <div class="custom-file">
                          <input type="hidden" name="nama_gambar" value="{{ isset($data_keunggulan) ? $data_keunggulan->gambar : '' }}">
                          <td><img src="/data/data_keunggulan/{{ isset($data_keunggulan) ? $data_keunggulan->gambar : '' }}" width="200"></td>
                          <input
                            type="file"
                            id_keunggulan="gambar" name="gambar"
                            class="custom-file-input {{ $errors->has('gambar') ? 'is-invalid' : ''}}"
                          />
                          @if ( $errors->has('gambar'))
                            <span class="text-danger small">
                              <p>{{ $errors->first('gambar') }}</p>
                            </span>
                          @endif

                          <div class="invalid-feedback">
                            Example invalid custom file feedback
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="border-top">
                    <div class="card-body float-end">
                      <a href="/data_keunggulan"><button type="button" class="btn btn-secondary">BATAL</button></a>
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

