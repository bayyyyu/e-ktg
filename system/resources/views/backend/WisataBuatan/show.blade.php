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
              <li class="breadcrumb-item"><a>Wisata Buatan</a></li>
              <li class="breadcrumb-item active">Detail Atraksi Wisata Buatan</li>
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
          <h3 class="card-title">Detail  Atraksi Wisata Buatan</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <a href="{{url('backend/WisataBuatan')}}" type="button" class="btn btn-tool">
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
                     <strong class="text-center">{{$wisata_buatan->kategori}}</strong>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-6">
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                        <p class="text-center">Nama Atraksi Wisata</p>
                     <strong class="text-center">{{$wisata_buatan->nama}}</strong>
                    </div>
                  </div>
                </div>
              </div> 

              <div class="row">
                <div class="col-12 col-sm-3">
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                        <p class="text-center">Nama Pengelola</p>
                     <strong class="text-center">{{$wisata_buatan->nama_pengelola}}</strong>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-3">
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                        <p class="text-center">Nomor Pengelola</p>
                     <strong class="text-center">{{$wisata_buatan->no_pengelola}}</strong>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-3">
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                        <p class="text-center">Jam Buka - Tutup</p>
                     <strong class="text-center">{!!date('H:i', strtotime($wisata_buatan->jam_buka)) !!} - {!!date('H:i', strtotime($wisata_buatan->jam_tutup)) !!}</strong>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-3">
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                        <p class="text-center">Hari Buka</p>
                     <strong class="text-center">{{$wisata_buatan->hari_start}}</strong>
                    </div>
                  </div>
                </div>
              </div> 

                <div class="col-12 col-sm-12">
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                        <p class="text-center">Deskripsi</p>
                     <strong class="text-center">{!!nl2br ($wisata_buatan->deskripsi) !!}</strong>
                    </div>
                  </div>
                </div>
              
              {{-- <hr>
            <h3 class="text-center">foto</h3> --}}
            <hr>
          <div class="row">
            <div class="col-md-12">
            <!-- Line chart -->
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title ">
                  <i class="far fa-image"></i>
                  Foto
                </h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <img src="{{url("public/$wisata_buatan->foto")}}" style="width:1000px; height:500px; object-fit: cover" alt="wisata bahari picture">
              </div>
              <!-- /.card-body-->
            </div>
            <!-- /.card -->

            <!-- Area chart -->
            <!-- /.card -->

            </div>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
@endsection