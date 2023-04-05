<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
  <div class="sidebar-brand-icon rotate-n-15">
    <i class="fas fa-cube"></i>
  </div>
  <div class="sidebar-brand-text mx-3">Rekrutmen<sup>App</sup></div>
</a>

<!-- Divider -->
<!-- <hr class="sidebar-divider my-0"> -->

<!-- Nav Item - Dashboard -->


<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
  Interface
</div>

 <!-- Nav Item - Pages Collapse Menu -->
 <li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#user" aria-expanded="true" aria-controls="collapseUtilities">
    <i class="fas fa-users"></i>
    <span>User</span>
  </a>
  <div id="user" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">User</h6>
      <a class="collapse-item" href="user.php">User</a>
      <a class="collapse-item" href="input-user.php">Tambah User</a>
    </div>
  </div>
</li>
<hr class="sidebar-divider">
 <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#outgoing" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-file-alt"></i>
          <span>Kebutuhan Rekrutmen</span>
        </a>
        <div id="outgoing" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="transaksi.php">List Kebutuhan Rekrutmen</a>
            <a class="collapse-item" href="input-transaksi-keluar.php">Input Kebutuhan Rekrutmen</a>
          </div>
        </div>
      </li>
      
      <hr class="sidebar-divider">
      

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#master" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Hasil Rekrutmen</span>
        </a>
        <div id="master" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="master.php">List Data Hasil Rekrutmen</a>
            <a class="collapse-item" href="input-master.php">Input Data Hasil Rekrutmen</a>
          </div>
        </div>
      </li>

<!-- Nav Item - Utilities Collapse Menu -->
 <hr class="sidebar-divider">
<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#OJT" aria-expanded="true" aria-controls="collapseUtilities">
    <i class="fas fa-list"></i>
    <span>OJT</span>
  </a>
  <div id="OJT" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">OJT</h6>
      <a class="collapse-item" href="ojt.php">List Data OJT</a>
    </div>
  </div>
</li>

  <hr class="sidebar-divider">
<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#report" aria-expanded="true" aria-controls="collapseUtilities">
    <i class="fas fa-list"></i>
    <span>Report</span>
  </a>
  <div id="report" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">Report</h6>
      <!-- <a class="collapse-item" href="pekerja_index.php">Report Pekerja</a> -->
      <a class="collapse-item" href="kebutuhan_rekrut.php">Kebutuhan Rekrutmen</a>
      <a class="collapse-item" href="index.php">Stok Calon Pekerja</a>
      <a class="collapse-item" href="ojt_index.php">OJT Pekerja</a>
    </div>
  </div>
</li>

<hr class="sidebar-divider">
<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#report1" aria-expanded="true" aria-controls="collapseUtilities">
    <i class="fas fa-book"></i>
    <span>Export Report</span>
  </a>
  <div id="report1" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">Export Report</h6>
      <a class="collapse-item" href="export_kebutuhan.php">Report Akumulasi</a>
    </div>
  </div>
</li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

<!-- Divider -->
<hr class="sidebar-divider">
</ul>