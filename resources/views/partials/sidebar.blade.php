<ul class="navbar-nav bg-gradient-light sidebar sidebar-danger accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center bg-gradient-light justify-content-center " href="{{ route('admin.dashboard.index') }}">
        <div class="sidebar-brand-icon rotate-n-10">
            <i class="fas fas fa-fw fa-car"></i>
        </div>
        <div class="sidebar-brand-text mx-3 text-primary">RMHA <sup>admin</sup></div>
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
    <li class="nav-item active">
        <a class="nav-link" onclick="document.getElementById('logout-form').submit()" href="#">
            <i class="fas fa-logout fa-fw"></i>
            <span>Logout</span></a>
            <form id="logout-form" action="{{ route('logout') }}" method="post">
                @csrf
            </form>
    </li>
</ul>