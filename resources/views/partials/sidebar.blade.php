<ul class="navbar-nav bg-gradient-grey sidebar sidebar-grey accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-meh-blank"></i>
        </div>
        <div class="sidebar-brand-text mx-3">RMHA <sup>admin</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.dashboard.index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <li class="nav-item active">
        <a class="nav-link" href="{{ route('cars.index') }}">
            <i class="fas fa-fw fa-car"></i>
            <span>Daftar Mobil</span></a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('messages.index') }}">
            <i class="fas fa-envelope fa-fw"></i>
            <span>Detail pesan</span></a>
    </li>
</ul>