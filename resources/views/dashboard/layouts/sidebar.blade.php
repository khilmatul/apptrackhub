<div class="slider" id="sliders">
    <div class="slider-head">
        <div class="d-block pt-4 pb-3 px-5 ">
            <img src="{{ asset('img/logo.png') }}" alt="user" class="slider-img-user mb-2">
            <!-- <p class="fw-bold mb-0 lh-1 text-white">YourName</p> -->
        </div>
    </div>
    <div class="slider-body px-1">
        <nav class="nav flex-column">
            <a class="nav-link px-3 {{ Request::is('/dashboard') ? 'active' : '' }}" href="/dashboard">
                <i class="fa fa-gauge fa-lg box-icon" aria-hidden="true"></i>Dashboard
            </a>
            <a class="nav-link px-3 {{ Request::is('dashboard/monitoring*') ? 'active' : '' }}" href="/monitoring">
                <i class="fa-solid fa-chart-simple fa-lg box-icon" aria-hidden="true"></i>Monitoring Trayek
            </a>
            <a class="nav-link px-3 {{ Request::is('rekapitulasi') ? 'active' : '' }}" href="/rekapitulasi">
                <i class="fa-solid fa-file-lines fa-lg box-icon" aria-hidden="true"></i>Rekapitulasi Penumpang
            </a>
            <a class="nav-link px-3 {{ Request::is('dashboard/penumpang*') ? 'active' : '' }}" href="/penumpang">
                <i class="fa-solid fa-address-card fa-lg box-icon" aria-hidden="true"></i>Data Penumpang
            </a>
            <a class="nav-link px-3 {{ Request::is('dashboard/trayek*') ? 'active' : '' }}" href="/trayek">
                <i class="fa-solid fa-route fa-lg box-icon" aria-hidden="true"></i>Data Trayek
            </a>
            <a class="nav-link px-3 {{ Request::is('dashboard/angkutan*') ? 'active' : '' }}" href="/angkutan">
                <i class="fa-solid fa-car-side fa-lg box-icon" aria-hidden="true"></i>Data Angkutan
            </a>
            <a class="nav-link px-3 {{ Request::is('user') ? 'active' : '' }}" href="/user">
                <i class="fa-solid fa-users fa-lg box-icon" aria-hidden="true"></i>User
            </a>
        </nav>
    </div>
</div>