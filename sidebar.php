<!-- Sidebar -->
<ul class="navbar-nav bg-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
    <div class="sidebar-brand-icon">
      <i class="fas fa-boxes"></i>
    </div>
    <div class="sidebar-brand-text mx-3">DATAYASA</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Nav Item - Halaman Utama -->
  <li class="nav-item active">
    <a class="nav-link" href="index.php">
      <i class="fas fa-fw fa-home"></i>
      <span>HALAMAN UTAMA</span></a>
  </li>

  <!-- Nav Item - Master Data -->
  <li class="nav-item active">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseMaster" aria-expanded="true" aria-controls="collapseMaster">
      <i class="fas fa-fw fa-cog"></i>
      <span>MASTER DATA</span>
    </a>
    <div id="collapseMaster" class="collapse" aria-labelledby="headingMaster" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item" href="index.php?page=users">Karyawan</a>
        <a class="collapse-item" href="index.php?page=items">Barang</a>
        <a class="collapse-item" href="index.php?page=items_category">Kategori Barang</a>
        <a class="collapse-item" href="index.php?page=division">Divisi</a>
        <a class="collapse-item" href="index.php?page=bank">Bank</a>
      </div>
    </div>
  </li>

  <!-- Nav Item - Partner -->
  <li class="nav-item active">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePartner" aria-expanded="true" aria-controls="collapsePartner">
      <i class="fas fa-fw fa-user-plus"></i>
      <span>PARTNER</span>
    </a>
    <div id="collapsePartner" class="collapse" aria-labelledby="headingPartner" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item" href="index.php?page=supplier">Distributor</a>
        <a class="collapse-item" href="index.php?page=service_center">Service Center</a>
      </div>
    </div>
  </li>

  <!-- Nav Item - Service -->
  <li class="nav-item active">
    <a class="nav-link" href="index.php?page=service">
      <i class="fas fa-fw fa-cogs"></i>
      <span>SERVICE</span></a>
  </li>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>
<!-- End of Sidebar -->