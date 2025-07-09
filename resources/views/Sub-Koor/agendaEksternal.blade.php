@extends('TU-Bidang/TemplateDashboard/main')

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
                    <h3 class="mb-0">Agenda Eksternal</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Agenda</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Agenda Eksternal</li>
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
                            <h3 class="card-title">
                                <a href="/approvalAlat" style="color: black; text-decoration: none;"
                                    onmouseover="this.style.textDecoration='underline'"
                                    onmouseout="this.style.textDecoration='none'">
                                    Daftar Agenda Eksernal Kepala Dinas
                                </a>

                            </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div style="overflow-x: auto;">
                                <table class="table table-bordered w-100" style="table-layout: auto;">
                                    <thead>
                                        <tr>
                                            <th style="width: 40px;">No</th>
                                            <th style="width: 120px;">Tanggal Surat</th>
                                            <th style="width: 150px;">No Surat</th>
                                            <th style="width: 200px;">Pengundang</th>
                                            <th style="width: 120px;">Tempat</th>
                                            <th style="width: 150px;">Hari/Tanggal</th>
                                            <th style="width: 180px;">Acara</th>
                                            <th style="width: 100px;">Cakupan</th>
                                            <th style="width: 180px;">Pendamping</th>
                                            <th style="width: 120px;">Bidang</th>
                                            <th style="width: 150px;">Nama Pendamping</th>
                                            <th style="width: 120px;">Instruksi</th>
                                            <th style="width: 80px;">Waktu</th>
                                            <th style="width: 250px;">Catatan</th>
                                            <th style="width: 130px;">File</th>
                                            <th style="width: 80px;">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data as $agenda)
                                        <?php $no = 1; ?>
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $agenda->tanggal_surat }}</td>
                                                <td>{{$agenda->no_surat}}</td>
                                                <td>{{ $agenda->pengundang }}</td>
                                                <td>{{ $agenda->tempat }}</td>
                                                <td>{{ $agenda->hari_tanggal }}</td>
                                                <td>{{ $agenda->acara }}</td>
                                                <td>{{ $agenda->cakupan}}</td>
                                                <td>{{ $agenda->nama_jabatan }}</td>
                                                <td>{{ $agenda->nama_bidang }}</td>
                                                <td>{{ $agenda->nama_pendamping }}</td>
                                                <td>{{ $agenda->isi_instruksi }}</td>
                                                <td>{{ $agenda->waktu }}</td>
                                                <td>{{ $agenda->catatan }}</td>
                                                <td>
                                                    <br>
                                                    @if($agenda->softfile_surat)
                                                    <a href="{{ asset('storage/dokumen/' . $agenda->softfile_surat) }}" target="_blank" class="btn btn-success btn-sm">
                                                        <i class="fas fa-file-pdf"></i> Lihat Dokumen
                                                    </a>
                                                    @else
                                                    <span class="text-muted">Tidak ada dokumen</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="tu-bidang/edit/{{$agenda->id}}" class="btn btn-warning btn-sm">edit</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            <div class="float-end">
                                {{ $data->links('pagination::bootstrap-4') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::App Content-->
</main>
<!--end::App Main-->

{{-- script --}}
    
@endsection