@extends('backend.template.adminBase')

@section('content')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Detail</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a>Home</a></li>
              <li class="breadcrumb-item"><a>Desa Wisata</a></li>
              <li class="breadcrumb-item active">Detail Data Desa Wisata</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
</section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header bg-dark">
          <h3 class="card-title">Detail Data Desa Wisata</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <a href="{{url('backend/DesaWisata')}}" type="button" class="btn btn-tool">
              <i class="fas fa-sign-out-alt"></i> 
            </a>
          </div>
        </div>
        <div class="card-body">
            <hr>
            <h3 class="text-center">Detail</h3>
              <hr>
              <div class="row">
                <div class="col-12 col-sm-3">
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                        <p class="text-center">Nama Desa Wisata</p>
                     <strong class="text-center">{{$desa_wisata->nama_desa_wisata}}</strong>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-3">
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                        <p class="text-center">Deskripsi Singkat</p>
                     <strong class="text-center">{{$desa_wisata->deskripsi}}</strong>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-6">
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                        <p class="text-center">Link Jadesta
                        <a href="{{$desa_wisata->link_jadesta}}" target="_blank">
                          <br>
                     <strong class="text-center">{{$desa_wisata->link_jadesta}}</strong>
                        </a>
                        </p>
                    </div>
                  </div>
                </div>
              </div>
              <hr>
            <h3 class="text-center">foto</h3>
            <hr>
          <div class="row">
            <div class="col-12 col-md-12 order-2 order-md-1">
              <div class="row">
                <div class="col-12 col-sm-6">
                  <div class="info-box bg-light">
                    <div class="info-box-content">            
                      <img src="{{url("public", $desa_wisata->foto_1)}}" style="width:500px; height:300px; object-fit: cover" alt="desa wisata picture">
                      </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                      <img src="{{url("public", $desa_wisata->foto_2)}}" style="width:500px; height:300px; object-fit: cover" alt="desa wisata picture">
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-6">
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                      <img src="{{url("public", $desa_wisata->foto_3)}}" style="width:500px; height:300px; object-fit: cover" alt="desa wisata picture">
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-6">
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                     <img src="{{url("public", $desa_wisata->foto_4)}}" style="width:500px; height:300px; object-fit: cover" alt="desa wisata picture">
                    </div>
                  </div>
                </div>
              </div>
              <hr>
              
            </div>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
@endsection