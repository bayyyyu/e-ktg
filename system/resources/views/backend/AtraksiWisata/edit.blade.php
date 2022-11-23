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
              <li class="breadcrumb-item"><a href="{{url('backend/dashboard')}}" style="color: black">Home</a></li>
              <li class="breadcrumb-item"><a href="{{url('backend/AtraksiWisata')}}" style="color: black">Atraksi Wisata</a></li>
              <li class="breadcrumb-item active">Edit Atraksi Wisata</li>
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
                       Edit Atraksi Wisata 
                       <div class="card-tools">
                            <a href="{{url('backend/AtraksiWisata')}}" type="button" class="btn btn-tool">
                            <i class="fas fa-sign-out-alt"></i> 
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{url('backend/AtraksiWisata', $atraksi_wisata->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method("PUT")
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="" class="control-label">Kategori</label>
                                        <input type="text" class="form-control" name="kategori" value="{{$atraksi_wisata->kategori}}">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="" class="control-label">Nama Atraksi Wisata</label>
                                        <input type="text" class="form-control" name="nama" value="{{$atraksi_wisata->nama}}">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="" class="control-label">Nama Pengelola</label>
                                        <input type="text" class="form-control" name="nama_pengelola" value="{{$atraksi_wisata->nama_pengelola}}">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="" class="control-label">Nomor Pengelola</label>
                                        <input type="text" class="form-control" name="no_pengelola" value="{{$atraksi_wisata->no_pengelola}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                   <div class="form-group">
                                        <label for="" class="control-label">Hari Buka</label>
                                        <input type="text" class="form-control" name="hari_buka" style="text-align: center" value="{{$atraksi_wisata->hari_buka}}">
                                    </div> 
                                    
                                </div>
                                <div class="col-md-2">
                                   <div class="form-group">
                                        <label for="" class="control-label">Jam Buka</label>
                                        <input type="time" class="form-control" name="jam_buka" value="{{$atraksi_wisata->jam_buka}}">
                                    </div> 
                                </div>
                                <div class="col-md-2">
                                   <div class="form-group">
                                        <label for="" class="control-label">Jam Tutup</label>
                                        <input type="time" class="form-control" name="jam_tutup" value="{{$atraksi_wisata->jam_tutup}}">
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
                        <a href="{{url('backend/AtraksiWisata')}}" class="btn btn-danger"> Batal </a>
                       <button class="btn btn-dark float-right"><i class="fa fa-save "></i> Simpan</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection