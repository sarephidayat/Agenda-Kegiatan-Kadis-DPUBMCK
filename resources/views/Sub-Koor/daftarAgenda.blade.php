@extends('Sub-Koor/TemplateDashboard/main')

@section('content')
<!--begin::App Main-->
<main class="app-main">
    <!--begin::App Content Header-->
    <div class="app-content-header">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Daftar Mahasiswa</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Daftar Mahasiswa</li>
                    </ol>
                </div>
            </div>
            <!--end::Row-->
        </div>
        <div class="app-content">
            <!--begin::Container-->
            <div class="container-fluid">
                <!-- Info boxes -->
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box">
                            <span class="info-box-icon text-bg-primary shadow-sm">
                                <i class="bi bi-gear-fill"></i>
                            </span>
                            <div class="info-box-content">
                                <span class="info-box-text">Jumlah Mahasiswa</span>
                                <span class="info-box-number">
                                    10
                                    <small>%</small>
                                </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box">
                            <span class="info-box-icon text-bg-danger shadow-sm">
                                <i class="bi bi-hand-thumbs-up-fill"></i>
                            </span>
                            <div class="info-box-content">
                                <span class="info-box-text">Sedang Meminjam</span>
                                <span class="info-box-number">41,410</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <!-- fix for small devices only -->
                    <!-- <div class="clearfix hidden-md-up"></div> -->
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box">
                            <span class="info-box-icon text-bg-success shadow-sm">
                                <i class="bi bi-cart-fill"></i>
                            </span>
                            <div class="info-box-content">
                                <span class="info-box-text">Pernah Meminjam</span>
                                <span class="info-box-number">760</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box">
                            <span class="info-box-icon text-bg-warning shadow-sm">
                                <i class="bi bi-people-fill"></i>
                            </span>
                            <div class="info-box-content">
                                <span class="info-box-text">Belum Pernah Meminjam</span>
                                <span class="info-box-number">2,000</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <!--end::Container-->
                </div>
            </div>
            {{-- end:: container --}}
            <!--begin::Container-->
            <div class="container-fluid">
                <!--begin::Row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-4">
                            <div class="card-header">
                                <h3 class="card-title">Sedang Meminjam</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
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
                                        <tr class="align-middle">
                                            <td>1.</td>
                                            <td>Muhammad Syarifudin Hidayat</td>
                                            <td>232080960032</td>
                                            <td>232080960032@student.walisongo.ac.id</td>
                                            <td>Teknologi Informasi</td>
                                            <td>
                                                <div>
                                                    <a href="#" class="badge text-bg-primary">
                                                        Disetujui
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="align-middle">
                                            <td>2.</td>
                                            <td>Muhammad Syarifudin Hidayat</td>
                                            <td>232080960032</td>
                                            <td>232080960032@student.walisongo.ac.id</td>
                                            <td>Teknologi Informasi</td>
                                            <td>
                                                <div>
                                                    <a href="#" class="badge text-bg-danger">
                                                        Ditolak
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="align-middle">
                                            <td>3.</td>
                                            <td>Muhammad Syarifudin Hidayat</td>
                                            <td>232080960032</td>
                                            <td>232080960032@student.walisongo.ac.id</td>
                                            <td>Teknologi Informasi</td>
                                            <td>
                                                <div>
                                                    <a href="#" class="badge text-bg-danger">
                                                        Ditolak
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="align-middle">
                                            <td>4.</td>
                                            <td>Muhammad Syarifudin Hidayat</td>
                                            <td>232080960032</td>
                                            <td>232080960032@student.walisongo.ac.id</td>
                                            <td>Teknologi Informasi</td>
                                            <td>
                                                <div>
                                                    <a href="#" class="badge text-bg-primary">
                                                        Disetujui
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="align-middle">
                                            <td>5.</td>
                                            <td>Muhammad Syarifudin Hidayat</td>
                                            <td>232080960032</td>
                                            <td>232080960032@student.walisongo.ac.id</td>
                                            <td>Teknologi Informasi</td>
                                            <td>
                                                <div>
                                                    <a href="#" class="badge text-bg-danger">
                                                        Ditolak
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="align-middle">
                                            <td>6.</td>
                                            <td>Fix and squish bugs</td>
                                            <td>
                                                <div class="progress progress-xs progress-striped active">
                                                    <div class="progress-bar text-bg-success" style="width: 90%"></div>
                                                </div>
                                            </td>
                                            <td><span class="badge text-bg-success">90%</span></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer clearfix">
                                <ul class="pagination pagination-sm m-0 float-end">
                                    <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Row-->
            </div>
            <!--end::Container-->
            <!--begin::Container-->
            <div class="container-fluid">
                <!--begin::Row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-4">
                            <div class="card-header">
                                <h3 class="card-title">Pernah Meminjam</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
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
                                        <tr class="align-middle">
                                            <td>1.</td>
                                            <td>Muhammad Syarifudin Hidayat</td>
                                            <td>232080960032</td>
                                            <td>232080960032@student.walisongo.ac.id</td>
                                            <td>Teknologi Informasi</td>
                                            <td>
                                                <div>
                                                    <a href="#" class="badge text-bg-primary">
                                                        Disetujui
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="align-middle">
                                            <td>2.</td>
                                            <td>Muhammad Syarifudin Hidayat</td>
                                            <td>232080960032</td>
                                            <td>232080960032@student.walisongo.ac.id</td>
                                            <td>Teknologi Informasi</td>
                                            <td>
                                                <div>
                                                    <a href="#" class="badge text-bg-danger">
                                                        Ditolak
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="align-middle">
                                            <td>3.</td>
                                            <td>Muhammad Syarifudin Hidayat</td>
                                            <td>232080960032</td>
                                            <td>232080960032@student.walisongo.ac.id</td>
                                            <td>Teknologi Informasi</td>
                                            <td>
                                                <div>
                                                    <a href="#" class="badge text-bg-danger">
                                                        Ditolak
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="align-middle">
                                            <td>4.</td>
                                            <td>Muhammad Syarifudin Hidayat</td>
                                            <td>232080960032</td>
                                            <td>232080960032@student.walisongo.ac.id</td>
                                            <td>Teknologi Informasi</td>
                                            <td>
                                                <div>
                                                    <a href="#" class="badge text-bg-primary">
                                                        Disetujui
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="align-middle">
                                            <td>5.</td>
                                            <td>Muhammad Syarifudin Hidayat</td>
                                            <td>232080960032</td>
                                            <td>232080960032@student.walisongo.ac.id</td>
                                            <td>Teknologi Informasi</td>
                                            <td>
                                                <div>
                                                    <a href="#" class="badge text-bg-danger">
                                                        Ditolak
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="align-middle">
                                            <td>6.</td>
                                            <td>Fix and squish bugs</td>
                                            <td>
                                                <div class="progress progress-xs progress-striped active">
                                                    <div class="progress-bar text-bg-success" style="width: 90%"></div>
                                                </div>
                                            </td>
                                            <td><span class="badge text-bg-success">90%</span></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer clearfix">
                                <ul class="pagination pagination-sm m-0 float-end">
                                    <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Row-->
            </div>
            <!--end::Container-->
            <!--begin::Container-->
            <div class="container-fluid">
                <!--begin::Row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-4">
                            <div class="card-header">
                                <h3 class="card-title">Belum Pernah Meminjam</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
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
                                        <tr class="align-middle">
                                            <td>1.</td>
                                            <td>Muhammad Syarifudin Hidayat</td>
                                            <td>232080960032</td>
                                            <td>232080960032@student.walisongo.ac.id</td>
                                            <td>Teknologi Informasi</td>
                                            <td>
                                                <div>
                                                    <a href="#" class="badge text-bg-primary">
                                                        Disetujui
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="align-middle">
                                            <td>2.</td>
                                            <td>Muhammad Syarifudin Hidayat</td>
                                            <td>232080960032</td>
                                            <td>232080960032@student.walisongo.ac.id</td>
                                            <td>Teknologi Informasi</td>
                                            <td>
                                                <div>
                                                    <a href="#" class="badge text-bg-danger">
                                                        Ditolak
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="align-middle">
                                            <td>3.</td>
                                            <td>Muhammad Syarifudin Hidayat</td>
                                            <td>232080960032</td>
                                            <td>232080960032@student.walisongo.ac.id</td>
                                            <td>Teknologi Informasi</td>
                                            <td>
                                                <div>
                                                    <a href="#" class="badge text-bg-danger">
                                                        Ditolak
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="align-middle">
                                            <td>4.</td>
                                            <td>Muhammad Syarifudin Hidayat</td>
                                            <td>232080960032</td>
                                            <td>232080960032@student.walisongo.ac.id</td>
                                            <td>Teknologi Informasi</td>
                                            <td>
                                                <div>
                                                    <a href="#" class="badge text-bg-primary">
                                                        Disetujui
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="align-middle">
                                            <td>5.</td>
                                            <td>Muhammad Syarifudin Hidayat</td>
                                            <td>232080960032</td>
                                            <td>232080960032@student.walisongo.ac.id</td>
                                            <td>Teknologi Informasi</td>
                                            <td>
                                                <div>
                                                    <a href="#" class="badge text-bg-danger">
                                                        Ditolak
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="align-middle">
                                            <td>6.</td>
                                            <td>Fix and squish bugs</td>
                                            <td>
                                                <div class="progress progress-xs progress-striped active">
                                                    <div class="progress-bar text-bg-success" style="width: 90%"></div>
                                                </div>
                                            </td>
                                            <td><span class="badge text-bg-success">90%</span></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer clearfix">
                                <ul class="pagination pagination-sm m-0 float-end">
                                    <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Row-->
            </div>
            <!--end::Container-->
        </div>
    </div>
    <!--end::App Content Header-->
</main>
<!--end::App Main-->
@endsection