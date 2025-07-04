@extends('Kadis/TemplateDashboard/main')

@section('content')
<main class="app-main">
    <div class="app-content-header bg-gradient-primary py-4 shadow-sm mb-4 rounded-4">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <h3 class="mb-0 fw-bold text-white">
                        <i class="bi bi-speedometer2 me-2"></i> Dashboard
                    </h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end bg-transparent mb-0">
                        <li class="breadcrumb-item">
                            <a href="#" class="text-decoration-none text-light">Home</a>
                        </li>
                        <li class="breadcrumb-item active text-white" aria-current="page">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="app-content">
        <div class="container-fluid">
            <div class="row g-4 mb-4">
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-gradient-primary shadow rounded-4 border-0 position-relative overflow-hidden">
                        <div class="inner">
                            <h3 class="fw-bold">150</h3>
                            <p class="mb-0">New Orders</p>
                        </div>
                        <div class="position-absolute top-0 end-0 p-2 opacity-25">
                            <i class="bi bi-bag-fill display-4"></i>
                        </div>
                        <a href="#" class="small-box-footer link-light text-decoration-none d-block py-2 fw-semibold">
                            More info <i class="bi bi-arrow-right-circle"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-gradient-success shadow rounded-4 border-0 position-relative overflow-hidden">
                        <div class="inner">
                            <h3 class="fw-bold">53<sup class="fs-5">%</sup></h3>
                            <p class="mb-0">Bounce Rate</p>
                        </div>
                        <div class="position-absolute top-0 end-0 p-2 opacity-25">
                            <i class="bi bi-bar-chart-fill display-4"></i>
                        </div>
                        <a href="#" class="small-box-footer link-light text-decoration-none d-block py-2 fw-semibold">
                            More info <i class="bi bi-arrow-right-circle"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-gradient-warning shadow rounded-4 border-0 position-relative overflow-hidden">
                        <div class="inner">
                            <h3 class="fw-bold">44</h3>
                            <p class="mb-0">User Registrations</p>
                        </div>
                        <div class="position-absolute top-0 end-0 p-2 opacity-25">
                            <i class="bi bi-person-plus-fill display-4"></i>
                        </div>
                        <a href="#" class="small-box-footer link-dark text-decoration-none d-block py-2 fw-semibold">
                            More info <i class="bi bi-arrow-right-circle"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-gradient-danger shadow rounded-4 border-0 position-relative overflow-hidden">
                        <div class="inner">
                            <h3 class="fw-bold">65</h3>
                            <p class="mb-0">Unique Visitors</p>
                        </div>
                        <div class="position-absolute top-0 end-0 p-2 opacity-25">
                            <i class="bi bi-people-fill display-4"></i>
                        </div>
                        <a href="#" class="small-box-footer link-light text-decoration-none d-block py-2 fw-semibold">
                            More info <i class="bi bi-arrow-right-circle"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card shadow rounded-4 border-0">
                        <div class="card-header bg-gradient-info border-0 rounded-top-4">
                            <h3 class="card-title mb-0">
                                <a href="/approvalAlat" class="text-white text-decoration-none fw-bold"
                                    onmouseover="this.style.textDecoration='underline'"
                                    onmouseout="this.style.textDecoration='none'">
                                    <i class="bi bi-clipboard-check me-2"></i>Persetujuan Reservasi
                                </a>
                            </h3>
                        </div>
                        <div class="card-body bg-light rounded-bottom-4">
                            <table class="table table-hover table-bordered align-middle rounded-3 overflow-hidden shadow-sm">
                                <thead class="table-primary">
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>NIM</th>
                                        <th>Email</th>
                                        <th>Program Studi</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @for($i=1; $i<=5; $i++)
                                    <tr>
                                        <td>{{ $i }}.</td>
                                        <td>Muhammad Syarifudin Hidayat</td>
                                        <td>232080960032</td>
                                        <td>232080960032@student.walisongo.ac.id</td>
                                        <td>Teknologi Informasi</td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <a href="#" class="badge bg-success text-decoration-none px-3 py-2 fs-6 shadow-sm">
                                                    <i class="bi bi-check-circle me-1"></i> Approve
                                                </a>
                                                <a href="#" class="badge bg-danger text-decoration-none px-3 py-2 fs-6 shadow-sm">
                                                    <i class="bi bi-trash me-1"></i> Delete
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    @endfor
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer bg-white border-0 rounded-bottom-4 clearfix">
                            <ul class="pagination pagination-sm m-0 float-end">
                                <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                                <li class="page-item active"><a class="page-link bg-primary text-white border-primary" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<style>
    .bg-gradient-primary {
        background: linear-gradient(90deg, #4e73df 0%, #224abe 100%) !important;
    }
    .bg-gradient-success {
        background: linear-gradient(90deg, #1cc88a 0%, #17a673 100%) !important;
    }
    .bg-gradient-warning {
        background: linear-gradient(90deg, #f6c23e 0%, #dda20a 100%) !important;
    }
    .bg-gradient-danger {
        background: linear-gradient(90deg, #e74a3b 0%, #be2617 100%) !important;
    }
    .bg-gradient-info {
        background: linear-gradient(90deg, #36b9cc 0%, #258fa7 100%) !important;
    }
    .small-box {
        transition: transform 0.2s, box-shadow 0.2s;
    }
    .small-box:hover {
        transform: translateY(-5px) scale(1.03);
        box-shadow: 0 8px 24px rgba(0,0,0,0.15);
        z-index: 2;
    }
    .card-title a:hover {
        color: #224abe !important;
    }
</style>
@endsection
