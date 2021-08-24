<!-- Sidebar -->
<ul class="navbar-nav bg-dark sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('index_tampilan_admin/index'); ?>">
        <div class="sidebar-brand-icon ">
            <bu class="fas fa-user"></bu>
        </div>
        <div class="sidebar-brand-text mx-3">Prediksi Stroke</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Admin
    </div>
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('index_artikel/index'); ?>">
            <i class="fas fa-fw fa-pager"></i>
            <span>Artikel</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Heading -->
    <div class="sidebar-heading">
        Pengguna
    </div>

    <!-- Nav Item -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('index_tampilan_admin/myprofile'); ?>">
            <i class="fas fa-fw fa-user"></i>
            <span>Profil Saya</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url(); ?>index_tampilan_admin/editprofile">
            <i class="fas fa-fw fa-user"></i>
            <span>Edit Profil</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Heading -->
    <div class="sidebar-heading">
        Data
    </div>

    <!-- Nav Item -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url() ?>data_tim_medis/index">
            <i class="fas fa-fw fa-table"></i>
            <span>Data Tim Medis</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url() ?>data/index">
            <i class="fas fa-fw fa-table"></i>
            <span>Data Training</span></a>
    </li>

    <!-- Nav Item -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url() ?>predik_masyarakat/tampildata">
            <i class="fas fa-fw fa-table"></i>
            <span>Data Prediksi</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    <!-- Heading -->

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('login/logout'); ?>">
            <i class="fas fa-fw fa-sign-out-alt"></i>
            <span>Keluar</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->