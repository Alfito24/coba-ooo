{{-- @if (Auth::user()->peran==2) --}}
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Oasis</title>
  <link rel="icon" href="{{ asset('admintemplate/') }}/dist/img/Trinity.png">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('admintemplate/') }}/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('admintemplate/') }}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('admintemplate/') }}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('admintemplate/') }}/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('admintemplate/') }}/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('admintemplate/') }}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('admintemplate/') }}/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('admintemplate/') }}/plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
   <!-- Line Chart -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js"
   integrity="sha512-QSkVNOCYLtj73J4hbmVoOV6KVZuMluZlioC+trLpewV8qMjsWqlIQvkn1KGX2StWvPMdWGBqim1xlC8krl1EKQ=="
   crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="index3.html" class="nav-link">Home</a>
        </li>
      </ul>

      <!-- SEARCH FORM -->


      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto" <!-- Messages Dropdown Menu -->

        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
            <form action="logout" method="POST">
                @csrf
                <button type="submit">
                    Logout
                </button>
            </form>

        </li>

      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index.html" class="brand-link">
        <img src="{{ asset('admintemplate/') }}/dist/img/Trinity.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
          style="opacity: .8">
        <span class="brand-text font-weight-light">Oasis</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="{{ asset('admintemplate/') }}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="profil.html" class="d-block">Nama Mitra</a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="/mitra" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                </p>
              </a>

            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fas fas fa-cart-arrow-down"></i>
                <p>
                  Produk
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="/tambahproduk" class="nav-link">
                    <i class="nav-icon fas fas fa-cart-plus"></i>
                    <p>Tambah Produk</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/daftarproduk" class="nav-link">
                    <i class="nav-icon fas fas fas fas fa-list"></i>
                    <p>Daftar Produk</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item has-treeview">
              <a href="/profil" class="nav-link">
                <i class="nav-icon fas fa-user"></i>
                <p>
                  Profil
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
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="db-title m-0 text-dark" style="font-size: 25px; font-weight:600;">Online Visitor</h1>
            </div>
        </div>
        <div class="row">
            <div class="card" style="width: 100vw;">
                <div class="card-header border-0">
                    <div class="d-flex justify-content-between">
                        <p class="d-flex flex-column">
                            <span class="text-bold text-lg">820</span>
                            <span>Visitors Over Time</span>
                        </p>
                    </div>
                </div>
                <div class="card-body">
                    <div class="position-relative mb-4">
                        <canvas id="myChart" width="1000" height="200"></canvas>
                        <script>
                            const labels = [
                                'Jan',
                                'Feb',
                                'Mar',
                                'Apr',
                                'May',
                                'Jun',
                                'Jul',
                                'Aug',
                                'Sep',
                                'Oct',
                                'Nov',
                                'Des',
                            ];

                            const data = {
                                labels: labels,
                                datasets: [{
                                    label: 'Visitor 2022',
                                    backgroundColor: 'rgb(255, 99, 132)',
                                    borderColor: 'rgb(255, 99, 132)',
                                    data: [0, 10, 5, 2, 20, 30, 45, 50, 20, 55, 40, 25, ],
                                }]
                            };

                            const config = {
                                type: 'line',
                                data: data,
                                options: {}
                            };
                            const myChart = new Chart(
                                document.getElementById('myChart'),
                                config
                            );
                        </script>
                    </div>

                </div>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="db-title m-0 text-dark " style="font-size: 25px;font-weight:600;">Feedback</h1>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-md-3 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Jonathan</h5>
                        <div class="card-body bg-transparent">
                            <br>
                            <div class="row rating" style="font-weight: 1000; font-size:large;">
                                <div class="col-sm-6">
                                    Overall
                                </div>
                                <div class="col-sm-6">
                                    4/5
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    Kerapihan
                                </div>
                                <div class="col-sm-6">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star"></i>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    Kebersihan
                                </div>
                                <div class="col-sm-6">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star"></i>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    Pelayanan
                                </div>
                                <div class="col-sm-6">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Jonathan</h5>
                        <br>
                        <div class="card-body bg-transparent">
                            <div class="row rating" style="font-weight: 1000; font-size:large;">
                                <div class="col-sm-6">
                                    Overall
                                </div>
                                <div class="col-sm-6">
                                    4/5
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    Kerapihan
                                </div>
                                <div class="col-sm-6">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star"></i>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    Kebersihan
                                </div>
                                <div class="col-sm-6">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star"></i>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    Pelayanan
                                </div>
                                <div class="col-sm-6">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Jonathan</h5>
                        <br>
                        <div class="card-body bg-transparent">
                            <div class="row rating" style="font-weight: 1000; font-size:large;">
                                <div class="col-sm-6">
                                    Overall
                                </div>
                                <div class="col-sm-6">
                                    4/5
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    Kerapihan
                                </div>
                                <div class="col-sm-6">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star"></i>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    Kebersihan
                                </div>
                                <div class="col-sm-6">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star"></i>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    Pelayanan
                                </div>
                                <div class="col-sm-6">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Jonathan</h5>
                        <br>
                        <div class="card-body bg-transparent">
                            <div class="row rating" style="font-weight: 1000; font-size:large;">
                                <div class="col-sm-6">
                                    Overall
                                </div>
                                <div class="col-sm-6">
                                    4/5
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    Kerapihan
                                </div>
                                <div class="col-sm-6">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star"></i>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    Kebersihan
                                </div>
                                <div class="col-sm-6">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star"></i>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    Pelayanan
                                </div>
                                <div class="col-sm-6">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="db-title m-0 text-dark " style="font-size: 25px;font-weight:600;">Produk Oleh-Oleh Mitra
                    Jaya Favorit Customer</h1>
            </div>
        </div>
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-md-3 mb-3">
                <div class="card h-100">
                    <img class="img-fluid" alt="100%x280"
                        src=https://cdn.discordapp.com/attachments/906163180328325130/914060163638505542/AlmondCrispyCheese_1.jpg>
                    <div class="card-body">
                        <h5 class="card-title">Almond Crispy Cheese</h5>
                        <br>
                        <h6 class="card-title">50 pcs</h6>
                        <div style='z-index: 2; position: relative;'>
                            <a class="card-text bi bi-geo-alt text-decoration-none" href="/filter/daerah/Surabaya"
                                style='color: inherit;'>

                            </a>
                        </div>
                        <div class="card-footer bg-transparent">
                            Rp. 20.000
                        </div>
                        <a href="/varianoleh/21" class="stretched-link"></a>
                    </div>
                    <div class="card-footer bg-transparent">
                        <p class="card-text bi bi-heart-fill">
                            10 Orang Menyukai ini</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card h-100">
                    <img class="img-fluid" alt="100%x280"
                        src=https://cdn.discordapp.com/attachments/906163180328325130/916964212767621130/CokelatTempe.jpg>
                    <div class="card-body">
                        <h5 class="card-title">Cokelat Tempe</h5>
                        <br>
                        <h6 class="card-title">50 pcs</h6>
                        <div style='z-index: 2; position: relative;'>
                            <a class="card-text bi bi-geo-alt text-decoration-none" href="/filter/daerah/Malang"
                                style='color: inherit;'>

                            </a>
                        </div>
                        <div class="card-footer bg-transparent">
                            Rp. 20.000
                        </div>
                        <a href="/varianoleh/22" class="stretched-link"></a>
                    </div>
                    <div class="card-footer bg-transparent">
                        <p class="card-text bi bi-heart-fill">
                            10 Orang Menyukai ini</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card h-100">
                    <img class="img-fluid" alt="100%x280"
                        src=https://cdn.discordapp.com/attachments/906163180328325130/916964212767621130/CokelatTempe.jpg>
                    <div class="card-body">
                        <h5 class="card-title">Cokelat Tempe</h5>
                        <br>
                        <h6 class="card-title">50 pcs</h6>
                        <div style='z-index: 2; position: relative;'>
                            <a class="card-text bi bi-geo-alt text-decoration-none" href="/filter/daerah/Malang"
                                style='color: inherit;'>

                            </a>
                        </div>
                        <div class="card-footer bg-transparent">
                            Rp. 20.000
                        </div>

                        <a href="/varianoleh/22" class="stretched-link"></a>
                    </div>
                    <div class="card-footer bg-transparent">
                        <p class="card-text bi bi-heart-fill">
                            10 Orang Menyukai ini</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card h-100">
                    <img class="img-fluid" alt="100%x280"
                        src=https://cdn.discordapp.com/attachments/906163180328325130/916962624820879431/PiaMalang_2.jpg>
                    <div class="card-body">
                        <h5 class="card-title">Bakpia Khas Malang</h5>
                        <br>
                        <h6 class="card-title">50 pcs</h6>
                        <div style='z-index: 2; position: relative;'>
                            <a class="card-text bi bi-geo-alt text-decoration-none" href="/filter/daerah/Malang"
                                style='color: inherit;'>

                            </a>
                        </div>
                        <div class="card-footer bg-transparent">
                            Rp. 20.000
                        </div>
                        <a href="/varianoleh/24" class="stretched-link"></a>
                    </div>
                    <div class="card-footer bg-transparent">
                        <p class="card-text bi bi-heart-fill">
                            10 Orang Menyukai ini</p>
                    </div>
                </div>
            </div>
        </div>
          <!-- /.row -->
          <!-- Main row -->

        </div>
        <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2022 <a href="http://adminlte.io">Oasis</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">

    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="{{ asset('admintemplate/') }}/plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="{{ asset('admintemplate/') }}/plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="{{ asset('admintemplate/') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="{{ asset('admintemplate/') }}/plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="{{ asset('admintemplate/') }}/plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="{{ asset('admintemplate/') }}/plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="{{ asset('admintemplate/') }}/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="{{ asset('admintemplate/') }}/plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="{{ asset('admintemplate/') }}/plugins/moment/moment.min.js"></script>
  <script src="{{ asset('admintemplate/') }}/plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="{{ asset('admintemplate/') }}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="{{ asset('admintemplate/') }}/plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="{{ asset('admintemplate/') }}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="{{ asset('admintemplate/') }}/dist/js/adminlte.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="{{ asset('admintemplate/') }}/dist/js/pages/dashboard.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="{{ asset('admintemplate/') }}/dist/js/demo.js"></script>
</body>

</html>
{{-- @elseif (Auth::user()->peran==1) --}}
<h1>Halo</h1>
{{-- @endif --}}
