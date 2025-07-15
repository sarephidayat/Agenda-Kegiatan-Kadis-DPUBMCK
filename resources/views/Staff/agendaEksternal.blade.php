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
                    {{-- Agenda Eksternal --}}
                    <div class="card mb-4">       
                        <div class="card-header">
                            <h3 class="card-title">
                                    Daftar Agenda Eksternal Kepala Dinas
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
                                            <th style="width: 180px;">Pendamping</th>
                                            <th style="width: 120px;">Bidang</th>
                                            <th style="width: 150px;">Nama Pendamping</th>
                                            <th style="width: 120px;">Instruksi</th>
                                            <th style="width: 80px;">Waktu</th>
                                            <th style="width: 250px;">Catatan</th>
                                            <th style="width: 130px;">File</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($dataAgendaEksternal as $agendaEksternal)
                                        <?php $no = 1; ?>
                                            <tr>
                                                <td>{{ ($dataAgendaEksternal->currentPage() - 1) * $dataAgendaEksternal->perPage() + $loop->iteration }}</td>
                                                <td>{{ $agendaEksternal->tanggal_surat }}</td>
                                                <td>{{$agendaEksternal->no_surat}}</td>
                                                <td>{{ $agendaEksternal->pengundang }}</td>
                                                <td>{{ $agendaEksternal->tempat }}</td>
                                                <td>{{ $agendaEksternal->tanggal }}</td>
                                                <td>{{ $agendaEksternal->acara }}</td>
                                                <td>{{ $agendaEksternal->nama_jabatan }}</td>
                                                <td>{{ $agendaEksternal->nama_bidang }}</td>
                                                <td>{{ $agendaEksternal->nama_pendamping }}</td>
                                                <td>{{ $agendaEksternal->isi_instruksi }}</td>
                                                <td>{{ $agendaEksternal->waktu }}</td>
                                                <td>{{ $agendaEksternal->catatan }}</td>
                                                <td>
                                                    <br>
                                                    @if($agendaEksternal->softfile_surat)
                                                    <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#pdfModal-{{ $agendaEksternal->id }}">
                                                        <i class="fas fa-file-pdf"></i> Lihat Dokumen
                                                    </button>
                                                    @else
                                                    <span class="text-muted">Tidak ada dokumen</span>
                                                    @endif
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
                                {{ $dataAgendaEksternal->links('pagination::bootstrap-4') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Row-->
            {{-- Modal pop up --}}
            @foreach ($dataAgendaEksternal as $agendaEksternal)
                @if($agendaEksternal->softfile_surat)
                <div class="modal fade" id="pdfModal-{{ $agendaEksternal->id }}" tabindex="-1" aria-labelledby="pdfModalLabel-{{ $agendaEksternal->id }}" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog-centered">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="pdfModalLabel-{{ $agendaEksternal->id }}">Preview Dokumen</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                    </div>
                    <div class="modal-body" style="height: 80vh;">
                        <iframe src="{{ asset('storage/dokumen/' . $agendaEksternal->softfile_surat) }}" frameborder="0" style="width:100%; height:100%;"></iframe>
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