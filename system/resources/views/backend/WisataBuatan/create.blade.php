@extends('backend.template.adminBase')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header bg-dark">
                       Tambah Data Atraksi Wisata Buatan
                       <div class="card-tools">
                            <a href="{{url('backend/WisataBuatan')}}" type="button" class="btn btn-tool">
                            <i class="fas fa-sign-out-alt"></i> 
                            </a>
                        </div>
                    </div>
                    
                    <div class="card-body">
                        <form action="{{url('backend/WisataBuatan')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="" class="control-label">Kategori</label>
                                        <input type="text" class="form-control" name="kategori">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="" class="control-label">Nama Atraksi Wisata</label>
                                        <input type="text" class="form-control" name="nama" >
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="" class="control-label">Nama Pengelola</label>
                                        <input type="text" class="form-control" name="nama_pengelola">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="" class="control-label">Nomor Pengelola</label>
                                        <input type="text" class="form-control" name="no_pengelola">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                   <div class="form-group">
                                        <label for="" class="control-label">Hari Buka</label>
                                        <input type="text" class="form-control" name="hari_start" placeholder="...      s/d      ..." style="text-align: center" aria-label="... s/d ...">
                                    </div> 
                                </div>
                                <div class="col-md-2">
                                   <div class="form-group">
                                        <label for="" class="control-label">Jam Buka</label>
                                        <input type="time" class="form-control" name="jam_buka" placeholder="Search" aria-label="Search" >
                                    </div> 
                                </div>
                                <div class="col-md-2">
                                   <div class="form-group">
                                        <label for="" class="control-label">Jam Tutup</label>
                                        <input type="time" class="form-control" name="jam_tutup">
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
                            <button class="btn btn-dark float-right"><i class="fa fa-save "></i> Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection