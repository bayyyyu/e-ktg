@extends('backend.template.adminBase')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header bg-dark">
                       Tambah Data Atraksi Wisata Rimba
                       <div class="card-tools">
                            <a href="{{url('backend/KalenderWisata')}}" type="button" class="btn btn-tool">
                            <i class="fas fa-sign-out-alt"></i> 
                            </a>
                        </div>
                    </div>
                    
                    <div class="card-body">
                        <form action="{{url('backend/KalenderWisata')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                    <label for="" class="control-label">Nama Event</label>
                                    <input type="text" class="form-control" name="nama">
                            </div>
                            <div class="form-group">
                                    <label for="" class="control-label">Tempat</label>
                                    <input type="text" class="form-control" name="tempat">
                            </div>
                            <div class="form-group">
                                    <label for="" class="control-label">Tanggal</label>
                                    <input type="date" class="form-control" name="tanggal">
                            </div>
                            <div class="form-group">
                                    <label for="" class="control-label">Isi</label>
                                    <textarea name="isi" id="deskripsi" class="form-control"></textarea>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="" class="control-label">Foto</label>
                                        <input type="file" class="form-control" name="foto" accept=".jpg">
                                    </div>
                                </div>
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