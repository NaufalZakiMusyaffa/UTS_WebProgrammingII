  <!-- Navbar -->
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Buku</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('/dist/css/adminlte.min.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item d-none d-sm-inline-block">
        <a href="" class="nav-link">Logout</a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <span class="brand-text font-weight-light">Sistem Pendataan Buku</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-header"></li>
          <li class="nav-header">Informasi</li>
          <li class="nav-item">
            <a href="{{ url('home') }}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-header">Data</li>
          <li class="nav-item">
            <a href="{{ url('kategori') }}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Kategori
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('buku') }}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Buku
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('user') }}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                User
              </p>
            </a>
          </li>
          <li class="nav-header">Tambahan</li>
          <li class="nav-item">
            <a href="{{ url('about') }}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Tentang Saya
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h5>Tentang Saya</h5>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Hello</h3>
        </div>
       <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle" src="{{ asset('/dist/img/uclube.png') }}" alt="User profile picture">
                </div>
                <h3 class="profile-username text-center">@Naufal Zaki Musyaffa</h3>

                <p class="text-muted text-center">Web Programming II</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                   <strong><i class="fas fa-map-marker-alt mr-1"></i> Lokasi</strong>
                 <a class="float-right"> Bandung</a>
                  </li>
                  <li class="list-group-item">
                    <strong><i class="fas fa-pencil-alt mr-1"></i> Kelas</strong>
                 <a class="float-right"> TIF RM 18 CIDB </a>
                  </li>
                  <li class="list-group-item">
                    <strong><i class="fas fa-pencil-alt mr-1"></i> Npm</strong>
                 <a class="float-right"> 19552011155 </a>
                  </li>
                  <li class="list-group-item">
                    <strong><i class="fas fa-pencil-alt mr-1"></i> Asal Kampus</strong>
                 <a class="float-right"> Sekolah Tinggi Teknologi Bandung </a>
                  </li>
                  <li class="list-group-item">
                    <strong><i class="fas fa-pencil-alt mr-1"></i> Contact</strong>
                    <a href="https://www.facebook.com/nouval.zaki.9" class="float-right"><i class="fab fa-facebook-f text-blue mr-4"></i></a>
                            <a href="https://line.me/ti/p/JiiZx78dRp" class="float-right"><i class="fab fa-line text-green mr-4"></i></a>
                            <a href="https://github.com/NaufalZakiMusyaffa" class="float-right"><i class="fab fa-github text-grey mr-4"></i></a>
                  </li>    
                </ul>
              </div>
        <!-- /.card-body --> 
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    Developed By Naufal Zaki &copy; <strong>Sistem Pendataan Buku 
  </footer>

</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('/plugins/jquery/jquery.min.js') }}" ></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('/plugins/bootstrap/js/bootstrap.bundle.min.js') }}" ></script>
<!-- AdminLTE App -->
<script src="{{ asset('/dist/js/adminlte.min.js') }}" ></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('/dist/js/demo.js') }}" ></script>
</body>
</html>

