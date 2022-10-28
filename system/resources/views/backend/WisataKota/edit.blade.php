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
              <li class="breadcrumb-item"><a>Wisata Bahari</a></li>
              <li class="breadcrumb-item active">Edit Atraksi Wisata Kota</li>
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
                       Edit Atraksi Wisata Kota
                       <div class="card-tools">
                            <a href="{{url('backend/WisataKota')}}" type="button" class="btn btn-tool">
                            <i class="fas fa-sign-out-alt"></i> 
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{url('backend/WisataKota', $wisata_kota->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method("PUT")
                            <div class="form-group">
                                    <label for="" class="control-label">Kategori Atraksi Wisata</label>
                                    <input type="text" class="form-control" name="kategori" value="{{$wisata_kota->kategori}}">
                            </div>
                            <div class="form-group">
                                    <label for="" class="control-label">Nama Atraksi Wisata</label>
                                    <input type="text" class="form-control" name="nama" value="{{$wisata_kota->nama}}">
                            </div>
                            <div class="form-group">
                                    <label for="" class="control-label">Deskripsi</label>
                                    <textarea name="deskripsi" id="deskripsi" class="form-control" value="{{$wisata_kota->deskripsi}}"></textarea> 
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="" class="control-label">Foto</label>
                                        <input type="file" class="form-control" name="foto" accept=".jpg" value="{{$wisata_kota->foto}}">
                                    </div>
                                </div>
                            </div>
                            <br>
                           
                        <div class="btn-group float-right">
                        <a href="{{url('backend/WisataKota')}}" class="btn btn-danger"> Batal </a>
                       <button class="btn btn-dark float-right"><i class="fa fa-save "></i> Simpan</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection