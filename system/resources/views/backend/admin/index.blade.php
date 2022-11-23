@extends('backend.template.Adminbase')

@section('content')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Pengelola</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard" style="color: black">Home</a></li>
              <li class="breadcrumb-item active">Pengelola</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
</section>  
<section class="content">
    <div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                       <h3 class="card-title mt-2">Data Pengelola</h3>
                        <a href="{{url('backend/admin/create')}}" class="btn btn-dark float-right"><i class="fa fa-plus"></i> Tambah Data</a>
                    </div>
                    <div class="card-body">
                        <table id="example2" class="table table table-striped table-bordered table-datatable table-hover">
                            <thead class="bg-dark">
                                <th width="10">No</th>
                                <th width="50">Aksi</th>
                                <th>Nama Lengkap</th>
                                <th>Username</th>
                                <th>Email</th>
                            </thead>
                            <tbody>
                               @foreach($list_admin as $admin)
                                <tr class="odd">
                                    <td>{{$loop->iteration}}</td>
                                    <td class="dtr-control sorting_1">
                                        <div class="btn-group">
                                            <a href="{{url('backend/admin', $admin->id)}}" class="btn btn-dark"><i class="fa fa-info"></i></a>
                                            <a href="{{url('backend/admin', $admin->id)}}/edit" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                            @include('backend.template.utils.delete', ['url'=> url('backend/admin', $admin->id)])
                                        </div>  
                                    </td>
                                    <td>{{$admin->nama_lengkap}}</td>
                                    <td>{{$admin->username}}</td>
                                    <td>{{$admin->email}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

@endsection