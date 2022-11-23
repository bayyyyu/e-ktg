@extends('backend.template.adminBase')

@section('content') 
 <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Dashboard</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Home</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
      <hr>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="container">
        <div class="row">
          <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title text-center">Jumlah Upload Atraksi Wisata</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0"> 
                <ul class="products-list product-list-in-card pl-2 pr-2">
                  <li class="item">
                    <div class="product-img">
                      <img src="{{url('public')}}/assets-admin/bahari.svg" alt="Product Image" style="object-fit:cover; width:30px; height:30px;">
                    </div>
                    <div class="product-info">
                      <a href="WisataBahari"class="product-title" style="color:black">Wisata Bahari
                        {{-- <span class="badge badge-warning float-right">{{$wisata_bahari}}</span></a> --}}
                    </div>
                  </li>
                  <!-- /.item -->
                  <li class="item">
                    <div class="product-img">
                      <img src="{{url('public')}}/assets-admin/budaya.svg" alt="Product Image" style="object-fit:cover; width:30px; height:30px;">
                    </div>
                    <div class="product-info">
                      <a href="WisataBudaya" class="product-title" style="color:black">Wisata Budaya
                        {{-- <span class="badge badge-info float-right">{{$wisata_budaya}}</span></a> --}}
                    </div>
                  </li>
                  <!-- /.item -->
                  <li class="item">
                    <div class="product-img">
                      <img src="{{url('public')}}/assets-admin/food.svg" alt="Product Image" style="object-fit:cover; width:30px; height:30px;">
                    </div>
                    <div class="product-info">
                      <a href="WisataKuliner" class="product-title" style="color:black">Wisata Kuliner
                        {{-- <span class="badge badge-danger float-right">{{$wisata_kuliner}}</span> --}}
                      </a>
                    </div>
                  </li>
                  <!-- /.item -->
                  <li class="item">
                    <div class="product-img">
                      <img src="{{url('public')}}/assets-admin/rimba.svg" alt="Product Image" style="object-fit:cover; width:30px; height:30px;">
                    </div>
                    <div class="product-info">
                      <a href="WisataRimba" class="product-title" style="color:black">Wisata Rimba
                        {{-- <span class="badge badge-success float-right">{{$wisata_rimba}}</span> --}}
                      </a>
                    </div>
                  </li>
                  <li class="item">
                    <div class="product-img">
                      <img src="{{url('public')}}/assets-admin/kota.svg" alt="Product Image" style="object-fit:cover; width:30px; height:30px;">
                    </div>
                    <div class="product-info">
                      <a href="WisataKota"class="product-title" style="color:black">Wisata Kota
                        {{-- <span class="badge badge-dark float-right">{{$wisata_kota}}</span> --}}
                      </a>
                    </div>
                  </li>
                  <li class="item">
                    <div class="product-img">
                      <img src="{{url('public')}}/assets-admin/religi.svg" alt="Product Image" style="object-fit:cover; width:30px; height:30px;">
                    </div>
                    <div class="product-info">
                      <a href="WisataReligi"class="product-title" style="color:black">Wisata Religi 
                        {{-- <span class="badge badge-warning float-right">{{$wisata_religi}}</span> --}}
                      </a>
                    </div>
                  </li>
                  <!-- /.item -->
                </ul>
              </div>
              <!-- /.card-body -->
              <!-- /.card-footer -->
          </div>
          <div class="col-md-3">
            <div class="small-box bg-gradient-success">
              <div class="inner ml-3">
                <h3>{{$desa_wisata}}</h3>
                <p>Desa Wisata</p>
              </div>
              <div class="icon">
                <i class="fas fa-globe-asia"></i>
              </div>
              <a href="DesaWisata" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          
            <div class="col-md-3">
              <div class="small-box bg-gradient-info">
                <div class="inner ml-3">
                  <h3>{{$kalender_wisata}}</h3>
                  <p>Uploads Kalender Wisata</p>
                </div>
                <div class="icon">
                  <i class="fas fa-calendar-alt"></i>
                </div>
                <a href="KalenderWisata" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>
              </div>
            </div>
        </div>
      
      </div>
    </section>
                    
@endsection