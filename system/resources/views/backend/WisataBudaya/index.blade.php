
@extends('backend.template.adminBase')

@section('content')

<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Wisata Budaya</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">Wisata Budaya</li>
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
                        Data Wisata Budaya
                        <a href="{{url('backend/WisataBudaya/create')}}" class="btn btn-dark float-right"><i class="fa fa-plus"></i> Tambah Data</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-bordered table-datatable">
                            <thead class="bg-dark">
                                <th width="10">No</th>
                                <th width="50">Aksi</th>
                                <th>Kategori</th>
                                <th>Nama Event</th>
                                <th>Hari Buka</th>
                                <th>Jam Buka - Tutup</th>
                            </thead>
                            <tbody>
                               @foreach($list_wisata_budaya as $wisata_budaya)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{url('backend/WisataBudaya', $wisata_budaya->id)}}" class="btn btn-dark"><i class="fa fa-info"></i></a>
                                            <a href="{{url('backend/WisataBudaya', $wisata_budaya->id)}}/edit" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                            @include('backend.template.utils.delete', ['url'=> url('backend/WisataBudaya', $wisata_budaya->id)])
                                        </div>  
                                    </td>
                                    <td>{{$wisata_budaya->kategori}}</td>
                                    <td>{{$wisata_budaya->nama}}</td>
                                    <td>{{$wisata_budaya->hari_start}}</td>
                                    <td>{!!date('H:i', strtotime($wisata_budaya->jam_buka)) !!} - {!!date('H:i', strtotime($wisata_budaya->jam_tutup)) !!}</td>
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


