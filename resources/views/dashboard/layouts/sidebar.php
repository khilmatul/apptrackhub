<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <div class="rounded mx-auto d-block pt-4 pb-3">
        <img src="{{ asset('img/logo.png') }}" alt="user" class="slider-img-user mb-2" style="width: 70px; heigth:70px;">
    </div>
    <hr class="sidebar-divider my-0">
    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link {{ Request::is('/dashboard') ? 'active' : '' }}" href="/dashboard"><span>Dashboard</span></a>
    </li>
    <hr class="sidebar-divider"> 
    <li class="nav-item">
        <a class="nav-link {{ Request::is('monitoring') ? 'active' : '' }}" href="/monitoring"><span>Monitoring Trayek</span></a>
    </li>
    <hr class="sidebar-divider"> 
    <li class="nav-item">
        <a class="nav-link {{ Request::is('rekapitulasi') ? 'active' : '' }}" href="/rekapitulasi"><span>Rekapitulasi Penumpang</span></a>
    </li>
    <hr class="sidebar-divider"> 
    <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard/penumpang*') ? 'active' : '' }}" href="/penumpang"><span>Data Penumpang</span></a>
    </li>
    <hr class="sidebar-divider"> 
    <li class="nav-item">
        <a class="nav-link {{ Request::is('trayek') ? 'active' : '' }}" href="/trayek"><span>Data Trayek</span></a>
    </li>
    <hr class="sidebar-divider"> 
    <li class="nav-item">
        <a class="nav-link {{ Request::is('dtAngkutan') ? 'active' : '' }}" href="/Angkutan"><span>Data Angkutan</span></a>
    </li>
    <hr class="sidebar-divider"> 
    <li class="nav-item">
        <a class="nav-link {{ Request::is('user') ? 'active' : '' }}" href="/user"><span>User</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>