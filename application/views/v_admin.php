<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Ribon House | Admin</title>
  <!-- Bootstrap core CSS-->
  <link href="assets/admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="assets/admin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="assets/admin/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="assets/admin/css/sb-admin.css" rel="stylesheet">
  <link rel="shortcut icon" href="assets/icon/iconrb16.ico">

</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
<!--VV AWAL UNTUK KODINGAN SAMA SIDEBAR VV-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.php">Dasboard Admin</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  <!--VV KODINGAN SIDEBAR SAMA NAVBAR VV-->
    <div class="collapse navbar-collapse" id="navbarResponsive">
       <!--vv awal codingan ul menu sidebar vv-->
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="index.php">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>    
        
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">Setting</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a href="index.php?p=profile">profile</a>
            </li>
            
          </ul>
        </li>
        <!--^^ akhir codingan menu sidebar ^^-->
      </ul>
    <!--^^ akhir codingan ul menu sidebar ^^-->

    <!--vv awal codingan ul menu navbar vv-->
      <!--vv awal codingan untuk munimize menu sidebar vv-->
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <!--^^ akhir codingan untuk munimize menu sidebar^^-->
      <ul class="navbar-nav ml-auto">     
        <!--vv awal codingan untuk  menu logout vv-->
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
        <!--^^ akhir codingan untuk  menu logout ^^-->
      </ul>
      <!--^^ akhir codingan ul menu navbar ^^-->
    </div>
  </nav>
  <!--^^ akhir codingan untuk navbart ^^-->
<!--^^ AKHIR UNTUK KODINGAN SAMA SIDEBAR ^^-->

  <!--vv awal codingan untuk  isi conten vv-->
  <div class="content-wrapper">
      <!-- Icon Cards-->
       <!--- disini skripnya php pemanggilan halaman -->
           
            
           
    <!-- ^^akhir skrip phpnya^^  -->
      <!-- ^^akhir codingan untuk  isi konten^^-->
    </div>    
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Ribonhouse 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!--awal Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="index.php?aksi=logout">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- akhir Logout Modal-->

    <!-- Bootstrap core JavaScript-->
    <script src="assets/admin/vendor/jquery/jquery.min.js"></script>
    <script src="assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="assets/admin/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="assets/admin/vendor/chart.js/Chart.min.js"></script>
    <script src="assets/admin/vendor/datatables/jquery.dataTables.js"></script>
    <script src="assets/admin/vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="assets/admin/js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="assets/admin/js/sb-admin-datatables.min.js"></script>
    <script src="assets/admin/js/sb-admin-charts.min.js"></script>
  </div>
</body>

</html>
