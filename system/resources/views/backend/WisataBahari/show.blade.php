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
              <li class="breadcrumb-item"><a>Atraksi Wisata</a></li>
              <li class="breadcrumb-item"><a>Wisata Bahari</a></li>
              <li class="breadcrumb-item active">Detail Atraksi Wisata Bahari</li>
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
          <h3 class="card-title">Detail  Atraksi Wisata Bahari</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <a href="{{url('backend/WisataBahari')}}" type="button" class="btn btn-tool">
              <i class="fas fa-sign-out-alt"></i> 
            </a>
          </div>
        </div>
        <div class="card-body">
            <hr>
            <h3 class="text-center">Detail</h3>
              <hr>
              <div class="row">
                <div class="col-12 col-sm-6">
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                        <p class="text-center">Kategori Atraksi Wisata</p>
                     <strong class="text-center">{{$wisata_bahari->kategori}}</strong>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-6">
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                        <p class="text-center">Nama Atraksi Wisata</p>
                     <strong class="text-center">{{$wisata_bahari->nama}}</strong>
                    </div>
                  </div>
                </div>
              </div> 
                <div class="col-12 col-sm-12">
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                        <p class="text-center">Deskripsi</p>
                     <strong class="text-center">{!!nl2br ($wisata_bahari->deskripsi) !!}</strong>
                    </div>
                  </div>
                </div>
              
              <hr>
            <h3 class="text-center">foto</h3>
            <hr>
          <div class="row">
            <div class="col-12 col-md-12 order-2 order-md-1">
              <div class="row">
                <div class="col-12 col-sm-12">
                  <div class="info-box bg-light">
                    <div class="info-box-content">            
                      <img src="{{url("public", $wisata_bahari->foto)}}" alt="desa wisata picture">
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