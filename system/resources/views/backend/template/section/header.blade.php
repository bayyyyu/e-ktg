<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>E-KTG Admin</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{url('public')}}/assets-admin/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{url('public')}}/assets-admin/dist/css/adminlte.min.css">


  <link rel="stylesheet" href="{{url('public')}}/assets-admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="{{url('public')}}/assets-admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="{{url('public')}}/assets-admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('front-view/DesaWisata')}}" role="button">Visitor Page</a>
      </li>
      {{-- <li class="nav-item d-none d-sm-inline-block">
        <a href="dashboard" class="nav-link">Home</a>
      </li> --}}
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto mr-3">
      <!-- Navbar Search -->
       <div class="d-flex align-items-center mr-3">
              <div class="float-left p-r-10 fs-10 font-heading d-lg-block d-none mr-3 mt-1">
                  <span class="semi-bold" style="font:Segue Ui;">
                      @if (auth()->check())
                      {{ auth()->user()->nama_lengkap }}
                      @endif
                  </span>
              </div>
              <div class="dropdown pull-right">
                <li aria-expanded="false" aria-haspopup="true" class="profile-dropdown-toggle" style="display:table-cell; vertical-align:middle; text-align:center" data-toggle="dropdown">
                    <span class="thumbnail-wrapper d32 circular inline">
                        @if (auth()->check())
                        <img height="33" width="33" src="{{ url("public",auth()->user()->foto) }}" style="object-fit: cover; object-position: 0px 10%;" class="img-circle">
                        @else
                        <img height="33" width="33" src="{{url("public")}}/images/user.jpg" style="object-fit: cover; object-position: 0px 10%;">
                        @endif
                    </span>
                  </li>
                <div class="dropdown-menu dropdown-menu-right profile-dropdown" role="menu" x-placement="top-end" style="position: absolute; transform: translate3d(-1px, 38px, 0px); top: 0px; left: 0px; will-change: transform;">
                    <div class="dropdown-item dropdown-profile-pic" href="#" style="display:table-cell; vertical-align:middle; text-align:center">
                        @if (Auth::check())
                        <img src="{{ url("public",auth()->user()->foto) }}"  style="width:150px; height:150px; object-fit: cover" class="img-circle mb-2">
                        @else
                        <img src="{{url("public")}}/images/user.jpg" height="150px" width="150px" class="img-circle mb-2">
                        @endif
                        <p class="text-center m-t-10 m-b-20">{{ auth()->user()->nama_lengkap }}</p>
                    </div>
                    {{-- <a class="dropdown-item" href="{{ url('backend/profil') }}">
                        <span class="pull-left">Profile</span>
                        <span class="float-right"><i class="fas fa-user"></i></span>
                    </a> --}}
                    <a class="clearfix bg-master-lighter dropdown-item mt-2" href="{{url('auth/logout')}}">
                        <span class="pull-left">Logout</span>
                        <span class="float-right"><i class="fas fa-power-off"></i></span>
                    </a>
                </div>
            </div>


      <!-- Messages Dropdown Menu -->
      <!-- Notifications Dropdown Menu -->
      {{-- <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <span class="dropdown-header">
            @if(Auth::check())
                  {{request()->user()->nama_lengkap}}
               @else
                  Silahkan Login
            @endif
             
            <i class="far fa-user"></i>
          </span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-cog"></i> Settings
          </a>
          <div class="dropdown-divider"></div>
          <a href="{{url('backend/logout')}}" class="dropdown-item">
            <i class="fas fa-sign-out-alt"></i> Log Out
          </a>
          <div class="dropdown-divider"></div>
        </div>
      </li> --}}
       </div>
    </ul>
  </nav>
  <div class="dropdown-menu dropdown-menu-right::before"></div>