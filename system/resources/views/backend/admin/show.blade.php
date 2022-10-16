@extends('backend.template.adminBase')

@section('content')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Detail</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a>Home</a></li>
              <li class="breadcrumb-item"><a>Pengelola</a></li>
              <li class="breadcrumb-item active">Detail Data Pengelola</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
</section> 
    <div class="container-fluid">
    <div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header bg-dark">
          <h3 class="card-title">Detail Data Desa Wisata</h3>

          <div class="card-tools">
            <a href="{{url('backend/admin')}}" type="button" class="btn btn-tool">
              <i class="fas fa-sign-out-alt"></i> 
            </a>
          </div>
        </div>
            <div class="row">
          <div class="col-md-3 mt-3">

            <!-- Profile Image -->
            <div class="card card-primary ">
              <div class="card-body box-profile">
                <div class="text-center">
                    <p class="text-muted text-center">Foto Profil</p>
                  <img class="profile-user-img img-fluid"
                       src="{{url("public",$admin->foto)}}"
                       alt="User profile picture">
                </div>
                
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->

            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9 mt-3">
            <div class="card">
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <span>Nama : {{$admin->nama_lengkap}}</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <span>Username : {{"@".$admin->username}}</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <span>Email : {{$admin->email}}</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /.col -->
        </div>
        </div>
        
        <!-- /.row -->
      </div>
    </div>
    </div>
@endsection