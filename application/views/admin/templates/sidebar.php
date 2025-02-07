<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
            <i class="fa-solid fa-laptop-code"></i>
        </div>
        <div class="sidebar-brand-text mx-3"><?= $title; ?></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('dashboard'); ?>">
            <i class="fa-solid fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <!-- Portfolio Category -->
    <div class="sidebar-heading">Portfolio</div>
    <li class="nav-item">
        <a class="nav-link pb-0" href="<?= base_url('portfolio/game'); ?>">
            <i class="fa-solid fa-gamepad"></i>
            <span>Game</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link pb-0" href="<?= base_url('portfolio/website'); ?>">
            <i class="fa-solid fa-globe"></i>
            <span>Website</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link pb-0" href="<?= base_url('portfolio/desain'); ?>">
            <i class="fa-solid fa-paint-brush"></i>
            <span>Desain</span>
        </a>
    </li>

    <!-- Sidebar Toggler -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
<!-- End of Sidebar -->
