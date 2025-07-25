@extends('Staff/TemplateDashboard/main')

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
                    <h3 class="mb-0">Agenda Internal</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Agenda</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Agenda Internal</li>
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
                    {{-- Agenda Internal --}}
                    <div class="card mb-4">
                        <div class="card-header">
                            <h3 class="card-title">
                                    Daftar Agenda Internal Kepala Dinas                                
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
                                            <th style="width: 180px;">Acara</th>
                                            <th style="width: 80px;">Waktu</th>
                                            <th style="width: 150px;">Tanggal</th>
                                            <th style="width: 120px;">Tempat</th>
                                            <th style="width: 120px;">Kepada</th>
                                            <th style="width: 250px;">Catatan</th>
                                            <th style="width: 130px;">File</th>
                                            <th style="width: 80px;">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($dataAgendaInternal as $agendaInternal)
                                        <?php $no = 1; ?>
                                            <tr>
                                                <td>{{ ($dataAgendaInternal->currentPage() - 1) * $dataAgendaInternal->perPage() + $loop->iteration }}</td>
                                                <td>{{ $agendaInternal->tanggal_surat }}</td>
                                                <td>{{$agendaInternal->no_surat}}</td>
                                                <td>{{ $agendaInternal->nama_bidang }}</td>
                                                <td>{{ $agendaInternal->acara }}</td>
                                                <td>{{ $agendaInternal->waktu }}</td>
                                                <td>{{ $agendaInternal->tanggal }}</td>
                                                <td>{{ $agendaInternal->tempat }}</td>
                                                <td>{{ $agendaInternal->kepada }}</td>
                                                <td>{{ $agendaInternal->catatan }}</td>
                                                <td>
                                                    <br>
                                                    @if($agendaInternal->softfile_surat)
                                                    <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#pdfModal-{{ $agendaInternal->id }}">
                                                        <i class="fas fa-file-pdf"></i> Lihat Dokumen
                                                    </button>
                                                    @else
                                                    <span class="text-muted">Tidak ada dokumen</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="staff/editInternal/{{$agendaInternal->id}}" class="btn btn-warning btn-sm">edit</a>
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
                                {{ $dataAgendaInternal->links('pagination::bootstrap-4') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Row-->
            {{-- Modal pop up --}}
            @foreach($dataAgendaInternal as $agendaInternal)
                @if($agendaInternal->softfile_surat)
                <div class="modal fade" id="pdfModal-{{ $agendaInternal->id }}" tabindex="-1" aria-labelledby="pdfModalLabel-{{ $agendaInternal->id }}" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog-centered">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="pdfModalLabel-{{ $agendaInternal->id }}">Preview Dokumen</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                    </div>
                    <div class="modal-body" style="height: 80vh;">
                        <iframe src="{{ asset('storage/dokumen/' . $agendaInternal->softfile_surat) }}" frameborder="0" style="width:100%; height:100%;"></iframe>
                    </div>
                    </div>
                </div>
                </div>
                @endif
            @endforeach
            {{-- End Modal --}}
        </div>
        <!--end::Container-->
    </div>
    <!--end::App Content-->
</main>
<!--end::App Main-->

{{-- script --}}
    
@endsection