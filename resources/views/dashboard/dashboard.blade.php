@extends('dashboard.layouts.mainDashboard')

@section('container')
<div class="main-pages">
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-700">Dashboard</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
        </div>

        <div class="row">
            <!-- tracking data-->
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-primary shadow ">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Data Tracking</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">100</div>
                            </div>
                            <div class="col-auto">
                                <i class="fa-solid fa-car-side fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Penumpang-->
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-success shadow">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Data Penumpang</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">100</div>
                            </div>
                            <div class="col-auto">
                                <i class="fa-solid fa-address-card fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Users -->
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-info shadow">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Users
                                </div>
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">100</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-user-group fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>              

        <div class="row g-2">
            <div class="col-xl-6 col-lg-6">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Earnings Overview</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="chart-area">
                            <canvas id="myChartOne"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div
                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Revenue Sources</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="chart-pie">
                            <canvas id="myChartTwo"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            
        </div>
    </div>

    <!-- Footer -->
    <footer class="sticky-footer mt-4">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>&copy; 2022 Layanan Angkutan Perkotaan Kabupaten Banyuwangi</span>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->
</div>


@endsection