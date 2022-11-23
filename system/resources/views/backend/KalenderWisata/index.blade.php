
@extends('backend.template.adminBase')

@section('content')

<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Kalender Wisata</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">Kalender Wisata</li>
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
                        Data Kalender Wisata
                        <a href="{{url('backend/KalenderWisata/create')}}" class="btn btn-dark float-right"><i class="fa fa-plus"></i> Tambah Data</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-bordered table-datatable">
                            <thead class="bg-dark">
                                <th width="10">No</th>
                                <th width="50">Aksi</th>
                                <th>Nama Event</th>
                                <th>Tempat</th>
                                <th>Tanggal Event</th>
                            </thead>
                            <tbody>
                               @foreach($list_kalender_wisata as $kalender_wisata)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{url('backend/KalenderWisata', $kalender_wisata->id)}}" class="btn btn-dark"><i class="fa fa-info"></i></a>
                                            <a href="{{url('backend/KalenderWisata', $kalender_wisata->id)}}/edit" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                            @include('backend.template.utils.delete', ['url'=> url('backend/KalenderWisata', $kalender_wisata->id)])
                                        </div>  
                                    </td>
                                    <td>{{$kalender_wisata->nama}}</td>
                                    <td>{{$kalender_wisata->tempat}}</td>
                                    <td>{!!date('d, M Y', strtotime($kalender_wisata->tanggal)) !!}</td>
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


