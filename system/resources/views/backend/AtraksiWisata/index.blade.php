@extends('backend.template.adminBase')

@section('content')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Atraksi Wisata</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard" style="color: black" >Home</a></li>
              <li class="breadcrumb-item active">Atraksi Wisata</li>
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
                        Data Atraksi Atraksi Wisata
                        <a href="{{url('backend/AtraksiWisata/create')}}" class="btn btn-dark float-right mr-2"><i class="fa fa-plus"></i> Tambah Atraksi Wisata</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-bordered table-datatable">
                            <thead class="bg-dark">
                                <th>No</th>
                                <th>Aksi</th>
                                <th>Kategori Atraksi Wisata</th>
                                <th>Nama Atraksi Wisata</th>
                            </thead>
                            <tbody>
                               @foreach($list_atraksi_wisata as $atraksi_wisata)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{url('backend/AtraksiWisata', $atraksi_wisata->id)}}" class="btn btn-dark"><i class="fa fa-info"></i></a>
                                            <a href="{{url('backend/AtraksiWisata', $atraksi_wisata->id)}}/edit" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                            @include('backend.template.utils.delete', ['url'=> url('backend/AtraksiWisata', $atraksi_wisata->id)])
                                        </div>  
                                    </td>
                                    <td>{{$atraksi_wisata->kategori}}</td>
                                    <td>{{$atraksi_wisata->nama}}</td>
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