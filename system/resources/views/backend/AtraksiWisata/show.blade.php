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
                        <li class="breadcrumb-item"><a href="{{ url('backend/dashboard') }}" style="color: black">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ url('backend/AtraksiWisata') }}" style="color: black">Atraksi
                                Wisata</a></li>
                        <li class="breadcrumb-item active">Detail Atraksi Wisata</li>
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
                <h3 class="card-title">Detail Atraksi Wisata Buatan</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <a href="{{ url('backend/AtraksiWisata') }}" type="button" class="btn btn-tool">
                        <i class="fas fa-sign-out-alt"></i>
                    </a>
                </div>
            </div>
            <div class="card-body">
                <hr>
                <h3 class="text-center">Detail</h3>
                <hr>
                <div class="row">
                    <div class="col-12 col-sm-4">
                        <div class="info-box bg-light">
                            <div class="info-box-content">
                                <p class="text-center">Kategori Atraksi Wisata</p>
                                <strong class="text-center">{{ $atraksi_wisata->kategori }}</strong>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-4">
                        <div class="info-box bg-light">
                            <div class="info-box-content">
                                <p class="text-center">Nama Destinasi</p>
                                <strong class="text-center">{{ $atraksi_wisata->nama }}</strong>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-4">
                        <div class="info-box bg-light">
                            <div class="info-box-content">
                                <p class="text-center">Atraksi</p>
                                <strong class="text-center">{{ $atraksi_wisata->atraksi }}</strong>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-sm-3">
                        <div class="info-box bg-light">
                            <div class="info-box-content">
                                <p class="text-center">Nama Pengelola</p>
                                <strong class="text-center">{{ $atraksi_wisata->nama_pengelola }}</strong>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-3">
                        <div class="info-box bg-light">
                            <div class="info-box-content">
                                <p class="text-center">Nomor Pengelola</p>
                                <strong class="text-center">{{ $atraksi_wisata->no_pengelola }}</strong>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-3">
                        <div class="info-box bg-light">
                            <div class="info-box-content">
                                <p class="text-center">Jam Buka - Tutup</p>
                                <strong class="text-center">{!! date('H:i', strtotime($atraksi_wisata->jam_buka)) !!} - {!! date('H:i', strtotime($atraksi_wisata->jam_tutup)) !!}</strong>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-3">
                        <div class="info-box bg-light">
                            <div class="info-box-content">
                                <p class="text-center">Hari Buka</p>
                                <strong class="text-center">{{ $atraksi_wisata->hari_buka }}</strong>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-12">
                    <div class="info-box bg-light">
                        <div class="info-box-content">
                            <p class="text-center">Alamat</p>
                            <strong class="text-center">{{$atraksi_wisata->alamat}}</strong>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12">
                    <div class="info-box bg-light">
                        <div class="info-box-content">
                            <p class="text-center">Deskripsi</p>
                            <strong class="text-center">{!! nl2br($atraksi_wisata->deskripsi) !!}</strong>
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
                                <img src="{{ url("public/$atraksi_wisata->foto") }}"
                                    style="width:100%; height:auto; object-fit: cover" alt="wisata bahari picture">
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
