@extends('backend.template.adminBase')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header bg-dark">
                       Tambah Data Pengelola
                       <div class="card-tools">
                            <a href="{{url('backend/admin')}}" type="button" class="btn btn-tool">
                            <i class="fas fa-sign-out-alt"></i> 
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{url('backend/admin')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                    <label for="" class="control-label">Nama Lengkap</label>
                                    <input type="text" class="form-control" name="nama_lengkap">
                            </div>
                            <div class="form-group">
                                    <label for="" class="control-label">Username</label>
                                    <input type="text" class="form-control" name="username">
                            </div>
                            <div class="form-group">
                                    <label for="" class="control-label">Email</label>
                                    <input type="email" class="form-control" name="email">
                            </div> 
                                    <div class="form-group">
                                        <label for="" class="control-label">Password</label>
                                        <input type="password" class="form-control" name="password">
                                    </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="" class="control-label">Foto Profil</label>
                                        <input type="file" class="form-control" name="foto" accept=".jpg">
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