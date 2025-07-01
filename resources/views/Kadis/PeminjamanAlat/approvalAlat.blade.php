@extends('./TemplateDashboard/main')

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
                    <h3 class="mb-0">Persutujuan Reservasi</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Persutujuan Reservasi</li>
                    </ol>
                </div>
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::App Content Header-->
    <!--begin::App Content-->
    <div class="app-content">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h3 class="card-title">Persutujuan Reservasi</h3>
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
                                        <th>Action</th>
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
                                                <a href="#" class="badge text-bg-success">
                                                    Approve
                                                </a>
                                                <a href="#" class="badge text-bg-danger">
                                                    Delete
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
                                                <a href="#" class="badge text-bg-success">
                                                    Approve
                                                </a>
                                                <a href="#" class="badge text-bg-danger">
                                                    Delete
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
                                                <a href="#" class="badge text-bg-success">
                                                    Approve
                                                </a>
                                                <a href="#" class="badge text-bg-danger">
                                                    Delete
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
                                                <a href="#" class="badge text-bg-success">
                                                    Approve
                                                </a>
                                                <a href="#" class="badge text-bg-danger">
                                                    Delete
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
                                                <a href="#" class="badge text-bg-success">
                                                    Approve
                                                </a>
                                                <a href="#" class="badge text-bg-danger">
                                                    Delete
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
                    <!-- /.card -->
                    {{-- <div class="card mb-4">
                        <div class="card-header">
                            <h3 class="card-title">Condensed Full Width Table</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <table class="table table-sm">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Task</th>
                                        <th>Progress</th>
                                        <th style="width: 40px">Label</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="align-middle">
                                        <td>1.</td>
                                        <td>Update software</td>
                                        <td>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                                            </div>
                                        </td>
                                        <td><span class="badge text-bg-danger">55%</span></td>
                                    </tr>
                                    <tr class="align-middle">
                                        <td>2.</td>
                                        <td>Clean database</td>
                                        <td>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar text-bg-success" style="width: 70%"></div>
                                            </div>
                                        </td>
                                        <td><span class="badge text-bg-success">70%</span></td>
                                    </tr>
                                    <tr class="align-middle">
                                        <td>3.</td>
                                        <td>Cron job running</td>
                                        <td>
                                            <div class="progress progress-xs progress-striped active">
                                                <div class="progress-bar text-bg-primary" style="width: 30%"></div>
                                            </div>
                                        </td>
                                        <td><span class="badge text-bg-primary">30%</span></td>
                                    </tr>
                                    <tr class="align-middle">
                                        <td>4.</td>
                                        <td>Fix and squish bugs</td>
                                        <td>
                                            <div class="progress progress-xs progress-striped active">
                                                <div class="progress-bar text-bg-success" style="width: 90%"></div>
                                            </div>
                                        </td>
                                        <td><span class="badge text-bg-success">90%</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div> --}}
                    <!-- /.card -->
                </div>
                <!-- /.col -->
                {{-- <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h3 class="card-title">Simple Full Width Table</h3>
                            <div class="card-tools">
                                <ul class="pagination pagination-sm float-end">
                                    <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Task</th>
                                        <th>Progress</th>
                                        <th style="width: 40px">Label</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="align-middle">
                                        <td>1.</td>
                                        <td>Update software</td>
                                        <td>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                                            </div>
                                        </td>
                                        <td><span class="badge text-bg-danger">55%</span></td>
                                    </tr>
                                    <tr class="align-middle">
                                        <td>2.</td>
                                        <td>Clean database</td>
                                        <td>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar text-bg-success" style="width: 70%"></div>
                                            </div>
                                        </td>
                                        <td><span class="badge text-bg-success">70%</span></td>
                                    </tr>
                                    <tr class="align-middle">
                                        <td>3.</td>
                                        <td>Cron job running</td>
                                        <td>
                                            <div class="progress progress-xs progress-striped active">
                                                <div class="progress-bar text-bg-primary" style="width: 30%"></div>
                                            </div>
                                        </td>
                                        <td><span class="badge text-bg-primary">30%</span></td>
                                    </tr>
                                    <tr class="align-middle">
                                        <td>4.</td>
                                        <td>Fix and squish bugs</td>
                                        <td>
                                            <div class="progress progress-xs progress-striped active">
                                                <div class="progress-bar text-bg-success" style="width: 90%"></div>
                                            </div>
                                        </td>
                                        <td><span class="badge text-bg-success">90%</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                    <div class="card mb-4">
                        <div class="card-header">
                            <h3 class="card-title">Striped Full Width Table</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Task</th>
                                        <th>Progress</th>
                                        <th style="width: 40px">Label</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="align-middle">
                                        <td>1.</td>
                                        <td>Update software</td>
                                        <td>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                                            </div>
                                        </td>
                                        <td><span class="badge text-bg-danger">55%</span></td>
                                    </tr>
                                    <tr class="align-middle">
                                        <td>2.</td>
                                        <td>Clean database</td>
                                        <td>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar text-bg-success" style="width: 70%"></div>
                                            </div>
                                        </td>
                                        <td><span class="badge text-bg-success">70%</span></td>
                                    </tr>
                                    <tr class="align-middle">
                                        <td>3.</td>
                                        <td>Cron job running</td>
                                        <td>
                                            <div class="progress progress-xs progress-striped active">
                                                <div class="progress-bar text-bg-primary" style="width: 30%"></div>
                                            </div>
                                        </td>
                                        <td><span class="badge text-bg-primary">30%</span></td>
                                    </tr>
                                    <tr class="align-middle">
                                        <td>4.</td>
                                        <td>Fix and squish bugs</td>
                                        <td>
                                            <div class="progress progress-xs progress-striped active">
                                                <div class="progress-bar text-bg-success" style="width: 90%"></div>
                                            </div>
                                        </td>
                                        <td><span class="badge text-bg-success">90%</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div> --}}
                <!-- /.col -->
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::App Content-->
</main>
<!--end::App Main-->
@endsection