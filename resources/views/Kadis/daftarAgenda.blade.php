@extends('Kadis/TemplateDashboard/main')

@section('content')
<main class="app-main bg-gradient-to-br from-slate-50 to-indigo-100 min-vh-100">
    <div class="app-content-header">
        <div class="container-fluid">
            <div class="row align-items-center mb-4">
                <div class="col-sm-6">
                    <h3 class="mb-0 fw-bold text-capitalize text-primary">Daftar Agenda</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end bg-white rounded px-3 py-2 shadow-sm">
                        <li class="breadcrumb-item"><a href="#" class="text-decoration-none text-primary">Dashboard</a></li>
                        <li class="breadcrumb-item active text-secondary" aria-current="page">Daftar Mahasiswa</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="app-content">
            <div class="container-fluid mb-4">
                <div class="row g-3">
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box rounded shadow-lg border-0 bg-gradient-primary" style="background: linear-gradient(135deg, #6366f1 0%, #818cf8 100%);">
                            <span class="info-box-icon text-bg-primary shadow-sm rounded-circle border border-white border-3">
                                <i class="bi bi-gear-fill fs-3"></i>
                            </span>
                            <div class="info-box-content">
                                <span class="info-box-text fw-semibold text-white">Jumlah Mahasiswa</span>
                                <span class="info-box-number fs-5 text-white">
                                    10 <small>%</small>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box rounded shadow-lg border-0" style="background: linear-gradient(135deg, #f87171 0%, #fbbf24 100%);">
                            <span class="info-box-icon text-bg-danger shadow-sm rounded-circle border border-white border-3">
                                <i class="bi bi-hand-thumbs-up-fill fs-3"></i>
                            </span>
                            <div class="info-box-content">
                                <span class="info-box-text fw-semibold text-white">Sedang Meminjam</span>
                                <span class="info-box-number fs-5 text-white">41,410</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box rounded shadow-lg border-0" style="background: linear-gradient(135deg, #34d399 0%, #60a5fa 100%);">
                            <span class="info-box-icon text-bg-success shadow-sm rounded-circle border border-white border-3">
                                <i class="bi bi-cart-fill fs-3"></i>
                            </span>
                            <div class="info-box-content">
                                <span class="info-box-text fw-semibold text-white">Pernah Meminjam</span>
                                <span class="info-box-number fs-5 text-white">760</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box rounded shadow-lg border-0" style="background: linear-gradient(135deg, #fbbf24 0%, #f472b6 100%);">
                            <span class="info-box-icon text-bg-warning shadow-sm rounded-circle border border-white border-3">
                                <i class="bi bi-people-fill fs-3"></i>
                            </span>
                            <div class="info-box-content">
                                <span class="info-box-text fw-semibold text-white">Belum Pernah Meminjam</span>
                                <span class="info-box-number fs-5 text-white">2,000</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @php
                $tables = [
                    ['title' => 'Sedang Meminjam'],
                    ['title' => 'Pernah Meminjam'],
                    ['title' => 'Belum Pernah Meminjam'],
                ];
            @endphp

            @foreach($tables as $table)
            <div class="container-fluid mb-5">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card rounded shadow-lg border-0">
                            <div class="card-header bg-gradient-primary text-white rounded-top" style="background: linear-gradient(90deg, #6366f1 0%, #818cf8 100%);">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h3 class="card-title mb-0 fw-bold">{{ $table['title'] }}</h3>
                                    <div>
                                        <input type="text" class="form-control form-control-sm d-inline-block w-auto me-2" placeholder="Cari...">
                                        <select class="form-select form-select-sm d-inline-block w-auto">
                                            <option>Status</option>
                                            <option>Disetujui</option>
                                            <option>Ditolak</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body bg-light rounded-bottom">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped table-hover align-middle shadow-sm">
                                        <thead class="table-primary">
                                            <tr>
                                                <th>No</th>
                                                <th>Name</th>
                                                <th>NIM</th>
                                                <th>Email</th>
                                                <th>Program Studi</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="table-row-hover">
                                                <td>1.</td>
                                                <td>Muhammad Syarifudin Hidayat</td>
                                                <td>232080960032</td>
                                                <td>232080960032@student.walisongo.ac.id</td>
                                                <td>Teknologi Informasi</td>
                                                <td>
                                                    <span class="badge bg-gradient-primary px-3 py-2 rounded-pill" style="background: linear-gradient(90deg, #34d399 0%, #60a5fa 100%);">
                                                        <i class="bi bi-check-circle me-1"></i> Disetujui
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr class="table-row-hover">
                                                <td>2.</td>
                                                <td>Muhammad Syarifudin Hidayat</td>
                                                <td>232080960032</td>
                                                <td>232080960032@student.walisongo.ac.id</td>
                                                <td>Teknologi Informasi</td>
                                                <td>
                                                    <span class="badge bg-gradient-danger px-3 py-2 rounded-pill" style="background: linear-gradient(90deg, #f87171 0%, #fbbf24 100%);">
                                                        <i class="bi bi-x-circle me-1"></i> Ditolak
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr class="table-row-hover">
                                                <td>3.</td>
                                                <td>Muhammad Syarifudin Hidayat</td>
                                                <td>232080960032</td>
                                                <td>232080960032@student.walisongo.ac.id</td>
                                                <td>Teknologi Informasi</td>
                                                <td>
                                                    <span class="badge bg-gradient-danger px-3 py-2 rounded-pill" style="background: linear-gradient(90deg, #f87171 0%, #fbbf24 100%);">
                                                        <i class="bi bi-x-circle me-1"></i> Ditolak
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr class="table-row-hover">
                                                <td>4.</td>
                                                <td>Muhammad Syarifudin Hidayat</td>
                                                <td>232080960032</td>
                                                <td>232080960032@student.walisongo.ac.id</td>
                                                <td>Teknologi Informasi</td>
                                                <td>
                                                    <span class="badge bg-gradient-primary px-3 py-2 rounded-pill" style="background: linear-gradient(90deg, #34d399 0%, #60a5fa 100%);">
                                                        <i class="bi bi-check-circle me-1"></i> Disetujui
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr class="table-row-hover">
                                                <td>5.</td>
                                                <td>Muhammad Syarifudin Hidayat</td>
                                                <td>232080960032</td>
                                                <td>232080960032@student.walisongo.ac.id</td>
                                                <td>Teknologi Informasi</td>
                                                <td>
                                                    <span class="badge bg-gradient-danger px-3 py-2 rounded-pill" style="background: linear-gradient(90deg, #f87171 0%, #fbbf24 100%);">
                                                        <i class="bi bi-x-circle me-1"></i> Ditolak
                                                    </span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer bg-white rounded-bottom border-0">
                                <nav>
                                    <ul class="pagination pagination-sm m-0 float-end">
                                        <li class="page-item"><a class="page-link rounded-circle" href="#">&laquo;</a></li>
                                        <li class="page-item active"><a class="page-link rounded-circle" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link rounded-circle" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link rounded-circle" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link rounded-circle" href="#">&raquo;</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</main>
<style>
    .table-row-hover:hover {
        background: #f1f5f9 !important;
        transition: background 0.2s;
    }
    .bg-gradient-primary {
        background: linear-gradient(90deg, #6366f1 0%, #818cf8 100%) !important;
    }
    .bg-gradient-danger {
        background: linear-gradient(90deg, #f87171 0%, #fbbf24 100%) !important;
    }
</style>
@endsection
