@extends('backend.template.Adminbase')

@section('content')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Atraksi Wisata</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
              <li class="breadcrumb-item">Atraksi Wisata</li>
               <li class="breadcrumb-item active">Wisata Kuliner</li>
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
                        Data Atraksi Wisata Kuliner
                        <a href="{{url('backend/WisataKuliner/create')}}" class="btn btn-dark float-right"><i class="fa fa-plus"></i> Tambah Data</a>
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
                               @foreach($list_wisata_kuliner as $wisata_kuliner)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{url('backend/WisataKuliner', $wisata_kuliner->id)}}" class="btn btn-dark"><i class="fa fa-info"></i></a>
                                            <a href="{{url('backend/WisataKuliner', $wisata_kuliner->id)}}/edit" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                            @include('backend.template.utils.delete', ['url'=> url('backend/WisataKuliner', $wisata_kuliner->id)])
                                        </div>  
                                    </td>
                                    <td>{{$wisata_kuliner->kategori}}</td>
                                    <td>{{$wisata_kuliner->nama}}</td>
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