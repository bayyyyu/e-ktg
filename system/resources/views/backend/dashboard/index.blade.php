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
          <div class="col-md-3">
            <div class="small-box bg-gradient-success">
              <div class="inner ml-3">
                <h3>44</h3>
                <p>Uploads Desa Wisata</p>
              </div>
              <div class="icon">
                <i class="fas fa-globe-asia"></i>
              </div>
              <a href="" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <div class="col-md-3">
            <div class="small-box bg-gradient-warning">
              <div class="inner ml-3">
                <h3>44</h3>
                <p>Uploads Atraksi Wisata</p>
              </div>
              <div class="icon">
                <i class="fas fa-hiking"></i>
              </div>
              <a href="" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <div class="col-md-3">
            <div class="small-box bg-gradient-info">
              <div class="inner ml-3">
                <h3>44</h3>
                <p>Uploads Kalender Wisata</p>
              </div>
              <div class="icon">
                <i class="fas fa-calendar-alt"></i>
              </div>
              <a href="" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
                    
@endsection