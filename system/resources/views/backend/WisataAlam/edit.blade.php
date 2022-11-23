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
              <li class="breadcrumb-item"><a>Atraksi Wisata</a></li>
              <li class="breadcrumb-item"><a>Wisata Alam</a></li>
              <li class="breadcrumb-item active">Edit Wisata Alam</li>
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
                       Edit Wisata Alam 
                       <div class="card-tools">
                            <a href="{{url('backend/WisataAlam')}}" type="button" class="btn btn-tool">
                            <i class="fas fa-sign-out-alt"></i> 
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{url('backend/WisataAlam', $wisata_alam->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method("PUT")
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="" class="control-label">Kategori</label>
                                        <input type="text" class="form-control" name="kategori" value="{{$wisata_alam->kategori}}">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="" class="control-label">Nama Atraksi Wisata</label>
                                        <input type="text" class="form-control" name="nama" value="{{$wisata_alam->nama}}">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="" class="control-label">Nama Pengelola</label>
                                        <input type="text" class="form-control" name="nama_pengelola" value="{{$wisata_alam->nama_pengelola}}">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="" class="control-label">Nomor Pengelola</label>
                                        <input type="text" class="form-control" name="no_pengelola" value="{{$wisata_alam->no_pengelola}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                   <div class="form-group">
                                        <label for="" class="control-label">Hari Buka</label>
                                        <input type="text" class="form-control" name="hari_start" style="text-align: center" value="{{$wisata_alam->hari_start}}">
                                    </div> 
                                    
                                </div>
                                <div class="col-md-2">
                                   <div class="form-group">
                                        <label for="" class="control-label">Jam Buka</label>
                                        <input type="time" class="form-control" name="jam_buka" value="{{$wisata_alam->jam_buka}}">
                                    </div> 
                                </div>
                                <div class="col-md-2">
                                   <div class="form-group">
                                        <label for="" class="control-label">Jam Tutup</label>
                                        <input type="time" class="form-control" name="jam_tutup" value="{{$wisata_alam->jam_tutup}}">
                                    </div> 
                                </div>
                                <div class="col-md-4">
                                   <div class="form-group">
                                        <label for="" class="control-label">foto</label>
                                        <input type="file" class="form-control" name="foto" accept=".jpg">
                                    </div> 
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">Deskripsi</label>
                                <textarea name="deskripsi" id="deskripsi" class="form-control"></textarea>
                            </div> 
                            <br>
                           
                        <div class="btn-group float-right">
                        <a href="{{url('backend/WisataAlam')}}" class="btn btn-danger"> Batal </a>
                       <button class="btn btn-dark float-right"><i class="fa fa-save "></i> Simpan</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection