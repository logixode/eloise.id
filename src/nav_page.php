<nav class="navbar navbar-expand-lg navbar-light bg">
    <!-- <div class="container">  -->
        <!-- <a class="navbar-brand text-uppercase" href="#">Eloise.id</a> -->
        <a class="navbar-brand ml-auto text-white" href="login.php">admin</a>
        <a class="navbar-brand text-white" href="#">logout</a>
        <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Data Penjualan</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Daftar Harga</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Pengaturan</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Data Penjualan
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">PHP</a>
                    <a class="dropdown-item" href="#">ASP</a>
                    <a class="dropdown-item" href="#">AJAX</a>
                    <a class="dropdown-item" href="#">JQuery</a>
                    <a class="dropdown-item" href="#">MySQL</a>
                    <a class="dropdown-item" href="#">CSS</a>
                </div>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Software
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Sublime Text</a>
                    <a class="dropdown-item" href="#">Atom</a>
                    <a class="dropdown-item" href="#">VS Code</a>
                    <a class="dropdown-item" href="#">JetBrains</a>
                    <a class="dropdown-item" href="#">Notepad ++</a>
                    <a class="dropdown-item" href="#">Brackets</a>
                </div>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Contact Us</a>
                </li>
            </ul>
        </div> -->
    <!-- </div> -->
</nav>
<div class="dropdown-divider mb-3 mt-0"></div>
<div class="row">
<aside class="main-sidebar col-md-2 sidebar elevation-4" style="min-height: 923px;">
  <!-- Brand Logo -->
  <div class="text-center">
    <a href="index3.html" class="brand-link">
      <span class="brand-text font-weight-light">Eloise.id</span>
    </a>
  </div>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column">
        <li class="nav-item">
            <a class="nav-link <?= getActiveList('index.php'); ?>" href="add_post.php"><i class="fa fa-home">&nbsp;</i><p>Dashboard</p>
          </a>
        </li>
         <li class="nav-item">
            <a class="nav-link <?= getActiveList('data-penjualan.php'); ?>" href="public/data-penjualan.php"><i class="fa fa-plus-square">&nbsp;</i><p>Tambah Data Penjualan</p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
<div class="col-lg-2"></div>
<div class="col-lg-10 col-md-12">

  <!-- <div class="content-wrapper"> -->