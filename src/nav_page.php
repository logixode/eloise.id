<nav class="navbar navbar-expand-lg navbar-light bg">
  <a class="navbar-brand text-white text-uppercase" href="<?= $base_url ?>/">Eloise.id</a>
  <a class="navbar-brand ml-auto text-white" href="login.php"><?= $_SESSION['username'] ?></a>
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
    <nav class="mt-3">
      <ul class="nav nav-pills nav-sidebar flex-column">
        <li class="nav-item">
            <a class="nav-link <?= getActiveList('index.php'); ?>" href="<?= $base_url ?>/"><i class="fa fa-home">&nbsp;</i><p>Dashboard</p>
          </a>
        </li>
         <li class="nav-item">
            <a class="nav-link <?= getActiveList('input-data-penjualan.php'); ?>" href="<?= $base_url ?>/public/input-data-penjualan.php"><i class="fa fa-plus-square">&nbsp;</i><p>Tambah Data Penjualan</p>
          </a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?= getActiveList('daftar-harga.php'); ?>" href="<?= $base_url ?>/public/daftar-harga.php"><i class="fa fa-sign-out-alt">&nbsp;</i><p>Daftar Harga</p>
          </a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?= getActiveList('kelola-user.php'); ?>" href="<?= $base_url ?>/public/kelola_user.php"><i class="fa fa-sign-out-alt">&nbsp;</i><p>Kelola User</p>
          </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= $base_url ?>/src/logout.php"><i class="fa fa-sign-out-alt">&nbsp;</i><p>Logout</p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
<div class="col-lg-2"></div>
<div class="col-lg-10 col-md-12 mt-5 pt-2">

  <!-- <div class="content-wrapper"> -->