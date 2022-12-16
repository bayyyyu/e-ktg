@extends('backend.template.adminBase')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a>Home</a></li>
                        <li class="breadcrumb-item"><a>Kalender Wisata</a></li>
                        <li class="breadcrumb-item active">Edit Kalender Wisata</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-dark">
                        Edit Kalender Wisata
                        <div class="card-tools">
                            <a href="{{ url('backend/KalenderWisata') }}" type="button" class="btn btn-tool">
                                <i class="fas fa-sign-out-alt"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('backend/KalenderWisata', $kalender_wisata->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="" class="control-label">Nama Event</label>
                                <input type="text" class="form-control" name="nama"
                                    value="{{ $kalender_wisata->nama }}">
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">Tempat</label>
                                <input type="text" class="form-control" name="tempat"
                                    value="{{ $kalender_wisata->tempat }}">
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Tanggal</label>
                                        <input type="date" class="form-control" name="tanggal"
                                            value="{{ $kalender_wisata->tanggal }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="status_member">Bulan</label>
                                        <select class="form-control" id="bulan" name="bulan" required="required">
                                            <option value="" disabled selected>- Pilih -</option>
                                            <option value="Januari">Januari</option>
                                            <option value="Februari">Februari</option>
                                            <option value="Maret">Maret</option>
                                            <option value="Mei">Mei</option>
                                            <option value="Juni">Juni</option>
                                            <option value="Juli">Juli</option>
                                            <option value="Agustus">Agustus</option>
                                            <option value="September">September</option>
                                            <option value="Oktober">Oktober</option>
                                            <option value="November">November</option>
                                            <option value="Desember">Desember</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">Deskripsi</label>
                                <textarea name="isi" id="deskripsi" class="form-control" value="{{ $kalender_wisata->isi }}"></textarea>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="" class="control-label">Foto</label>
                                        <input type="file" class="form-control" name="foto" accept=".jpg"
                                            value="{{ $kalender_wisata->foto }}">
                                    </div>
                                </div>
                            </div>
                            <br>

                            <div class="btn-group float-right">
                                <a href="{{ url('backend/KalenderWisata') }}" class="btn btn-danger"> Batal </a>
                                <button class="btn btn-dark float-right"><i class="fa fa-save "></i> Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
