@extends('dashboard.layouts.mainDashboard')

@section('container')
<div class="main-pages">
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-700">Monitoring Trayek</h1>
        </div>              

        <div class="row g-1">
            <div class="col-xl-10 col-lg-12">
                <div class="card shadow mb-4">
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="chart-area">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15795.150877782327!2d114.3563626!3d-8.2240908!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9852707256a22fd3!2sDinas%20Perhubungan%20Kab.%20Banyuwangi!5e0!3m2!1sid!2sid!4v1639379848013!5m2!1sid!2sid" width="850" height="400" style="border:0;" loading="lazy"></iframe>
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