@extends('backend.template.adminBase')

@section('content')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Desa Wisata</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard" style="color: black">Home</a></li>
              <li class="breadcrumb-item active">Desa Wisata</li>
            </ol>
          </div>
        </div>

      </div><!-- /.container-fluid -->
</section> 
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Data Desa Wisata
                        <a href="{{url('backend/DesaWisata/create')}}" class="btn btn-dark float-right"><i class="fa fa-plus"></i> Tambah Data</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-bordered table-datatable">
                            <thead class="bg-dark">
                                <th width="10">No</th>
                                <th width="50">Aksi</th>
                                <th>Nama Desa Wisata</th>
                                <th>Deskripsi Singkat</th>
                            </thead>
                            <tbody>
                               @foreach($list_desa_wisata as $desa_wisata)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{url('backend/DesaWisata', $desa_wisata->id)}}" class="btn btn-dark"><i class="fa fa-info"></i></a>
                                            <a href="{{url('backend/DesaWisata', $desa_wisata->id)}}/edit" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                            @include('backend.template.utils.delete', ['url'=> url('backend/DesaWisata', $desa_wisata->id)])
                                        </div>  
                                    </td>
                                    <td>{{$desa_wisata->nama_desa_wisata}}</td>
                                    <td>{{$desa_wisata->deskripsi}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection