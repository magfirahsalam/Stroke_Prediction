<!-- Sidebar -->
<ul class="navbar-nav bg-dark sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('index_medis/index'); ?>">
        <div class="sidebar-brand-icon ">
            <i class="fas fa-user"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Prediksi Stroke</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Pengguna
    </div>

    <!-- Nav Item -->
    <li class="nav-item">
        <a class="nav-link" href="myprofile">
            <i class="fas fa-fw fa-user"></i>
            <span>Profil Saya</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="editprofile">
            <i class="fas fa-fw fa-user"></i>
            <span>Edit Profil</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    <!-- Heading -->
    <div class="sidebar-heading">
        Prediksi
    </div>

    <!-- Nav Item -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url() ?>prediksi_tim_medis/tampildatatm">
            <i class="fas fa-fw fa-table"></i>
            <span>Data Prediksi Saya</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url() ?>prediksi_tim_medis/prediksitm">
            <i class="fas fa-fw fa-table"></i>
            <span>Mulai Prediksi</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

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