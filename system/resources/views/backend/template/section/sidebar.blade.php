<aside class="main-sidebar sidebar-light-dark elevation-4">
    <!-- Brand Logo -->
    <a href="dashboard" class="brand-link">
   
      <span class="info font-weight-light"><img src="{{url('public')}}/assets-web/images/logo/logo-black4.png" style="width:230px; height:20px; object-fit: cover" alt=""></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        {{-- <div class="image">
          <img src="{{ url(uth::user()->foto) }}" class="img-circle elevation-2" alt="User Image">
        </div> --}}
        <div class="info ml-5">
          <a class="d-block">
            @if(Auth::check())
                  {{request()->user()->nama_lengkap}}
               @else
                  Silahkan Login
            @endif
          </a>
        </div>
      </div>
      <!-- SidebarSearch Form -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        {{-- <div class="user-panel">
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Admin E-KTG
              </p>
            </a>
          </li>
        </div> --}}
          <li class="nav-item">
            <a href="{{url('backend/dashboard')}}" class="nav-link {{request()->is('backend/dashboard') ? 'active' : ''}}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('backend/admin')}}" class="nav-link {{request()->is('backend/admin') ? 'active' : ''}}">
              <i class="nav-icon fas fa-id-card"></i>
              <p>
                Pengelola
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('backend/DesaWisata')}}" class="nav-link {{request()->is('backend/DesaWisata') ? 'active' : ''}}">
              <i class="nav-icon fas fa-globe-asia"></i>
              <p>
                Desa Wisata
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('backend/AtraksiWisata')}}" class="nav-link {{request()->is('backend/AtraksiWisata') ? 'active' : ''}}">
              <i class="nav-icon fas fa-hiking"></i>
              <p>
                Atraksi Wisata
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('backend/KalenderWisata')}}" class="nav-link {{request()->is('backend/KalenderWisata') ? 'active' : ''}}">
              <i class="nav-icon fas fa-calendar-alt"></i>
              <p>
                Kalender Wisata
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('backend/PetaWisata')}}" class="nav-link ">
              <i class="nav-icon fas fa-map-marked-alt"></i>
              <p>
                Peta Wisata
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pengguna" class="nav-link">
              <i class="nav-icon fas fa-user-friends"></i>
              <p>
                Pengguna
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>