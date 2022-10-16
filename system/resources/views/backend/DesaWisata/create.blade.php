@extends('backend.template.adminBase')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header bg-dark">
                       Tambah Data Desa Wisata
                       <div class="card-tools">
                            <a href="{{url('backend/DesaWisata')}}" type="button" class="btn btn-tool">
                            <i class="fas fa-sign-out-alt"></i> 
                            </a>
                        </div>
                    </div>
                    
                    <div class="card-body">
                        <form action="{{url('backend/DesaWisata')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                    <label for="" class="control-label">Nama Desa Wisata</label>
                                    <input type="text" class="form-control" name="nama_desa_wisata">
                                </div>
                                <div class="form-group">
                                        <label for="" class="control-label">Link Jadesta</label>
                                        <input type="text" class="form-control" name="link_jadesta">
                                </div>
                            <div class="form-group">
                                    <label for="" class="control-label">Deskripsi Singkat</label>
                                    <textarea name="deskripsi" id="deskripsi" class="form-control"></textarea>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="" class="control-label">Foto 1</label>
                                        <input type="file" class="form-control" name="foto_1" accept=".jpg">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="" class="control-label">Foto 2</label>
                                        <input type="file" class="form-control" name="foto_2" accept=".jpg">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="" class="control-label">Foto 3</label>
                                        <input type="file" class="form-control" name="foto_3" accept=".jpg">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="" class="control-label">Foto 4</label>
                                        <input type="file" class="form-control" name="foto_4" accept=".jpg">
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