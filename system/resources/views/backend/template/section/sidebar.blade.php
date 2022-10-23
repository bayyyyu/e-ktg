<aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="dashboard" class="brand-link">
   
      <span class="info ml-4 font-weight-light">Ketapang Travel Guide</span>
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
            <a href="dashboard" class="nav-link {{request()->is('backend/dashboard') ? 'active' : ''}}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="admin" class="nav-link {{request()->is('backend/admin') ? 'active' : ''}}">
              <i class="nav-icon fas fa-id-card"></i>
              <p>
                Pengelola
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="DesaWisata" class="nav-link {{request()->is('backend/DesaWisata') ? 'active' : ''}}">
              <i class="nav-icon fas fa-globe-asia"></i>
              <p>
                Desa Wisata
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="#" class="nav-link  {{request()->is('backend/WisataBahari') ? 'active' : ''}} {{request()->is('backend/WisataBudaya') ? 'active' : ''}}  {{request()->is('backend/WisataKuliner') ? 'active' : ''}}
                                         {{request()->is('backend/WisataRimba') ? 'active' : ''}}  {{request()->is('backend/WisataKota') ? 'active' : ''}}
                                          {{request()->is('backend/WisataReligi') ? 'active' : ''}}">
              <i class="nav-icon fas fa-hiking"></i>
              <p>
                Atraksi Wisata
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="WisataBahari" class="nav-link {{request()->is('backend/WisataBahari') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Wisata Bahari</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="WisataBudaya" class="nav-link {{request()->is('backend/WisataBudaya') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Wisata Budaya</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="WisataKuliner" class="nav-link {{request()->is('backend/WisataKuliner') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Wisata Kuliner</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="WisataRimba" class="nav-link {{request()->is('backend/WisataRimba') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Wisata Rimba</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="WisataKota" class="nav-link {{request()->is('backend/WisataKota') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Wisata Kota</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="WisataReligi" class="nav-link {{request()->is('backend/WisataReligi') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Wisata Religi</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="KalenderWisata" class="nav-link ">
              <i class="nav-icon fas fa-calendar-alt"></i>
              <p>
                Kalender Wisata
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="PetaWisata" class="nav-link">
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