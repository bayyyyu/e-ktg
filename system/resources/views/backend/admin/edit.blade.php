@extends('backend.template.adminBase')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header bg-dark">
                       Edit Data Admin
                    </div>
                    <div class="card-body">
                        <form action="{{url('backend/admin', $admin->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method("PUT")
                            <div class="form-group">
                                    <label for="" class="control-label">Nama</label>
                                    <input type="text" class="form-control" name="nama_lengkap" value="{{$admin->nama_lengkap}}">
                            </div>
                           
                            <div class="form-group">
                                <label for="" class="control-label">Username</label>
                                <input type="text" class="form-control" name="username" value="{{$admin->username}}">
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">Email</label>
                                <input type="text" class="form-control" name="email" value="{{$admin->email}}">
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">Password</label>
                                <input type="password" class="form-control" name="password">
                            </div>                             
                                    <div class="form-group">
                                        <label for="" class="control-label">Foto Profil</label>
                                        <input type="file" class="form-control" name="foto" accept=".jpg">
                                    </div> 
                                <br>
                        <div class="btn-group float-right">
                        <a href="{{url('backend/admin')}}" class="btn btn-danger"> Batal </a>
                       <button class="btn btn-dark float-right"><i class="fa fa-save "></i> Simpan</button>
                        </div>
                       </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection