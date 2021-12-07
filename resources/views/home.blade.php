<!-- Navbar -->
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Home</title>
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

  <!-- content home -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
            <h5>Selamat Datang di Sistem Pendataan Buku</h5>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title"><i class="fa fa-bookmark" aria-hidden="true"></i> Informasi Website / Artikel </h3>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-sm-6">
              <div class="card">
               <div class="card-body">
               <h5 class="card-title">Seputar Website</h5>
                <p class="card-text">Website ini merupakan Website Sistem Pendataan Buku yang dimana didalamnya itu terdapat fitur untuk mengsetting kategori buku, lalu ada menginput buku untuk di data, ada juga fitur buku, fitur user (untuk menambahkan user (register)) dan yang terakhir ada fitur About Me (Mengetahui seputar Developed)</p>
               </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Seputar Artikel Terkait</h5>
                 <p class="card-text">Untuk mewujudkan budaya baca membutuhkan proses & proses itu dimulai sejak dini. Peran dan fungsi perpustakaan sekolah sangat dibutuhkan selain sebagai sumber belajar warga sekolah juga sebagai peletak dasar tumbuhnya kegemaran membaca.</p>
                <a href="https://baktinews.bakti.or.id/artikel/sentuh-pustaka-semua-membantu-menghidupkan-perpustakaan" class="btn btn-primary">Kunjungi</a>
              </div>
            </div>
          </div>
          </div>
        </div>
        <!-- /.card-body -->

        <!-- /.card-footer-->
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

