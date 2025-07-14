@extends('Sub_Koor/TemplateDashboard/main')

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
                    <h3 class="mb-0">Dashboard</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
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
                
                <!--begin::Col-->
                <div class="col-lg-3 col-6">
                    <!--begin::Small Box Widget 2-->
                    <div class="small-box text-bg-primary position-relative overflow-hidden rounded-3 p-3 shadow-sm">
                        {{-- Ikon besar di kanan atas --}}
                        <svg class="position-absolute top-0 end-0 m-3 opacity-25" width="60" height="60" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                            <path
                                d="M0 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 12.5V5a1 1 0 0 1-1-1zm2 3v7.5A1.5 1.5 0 0 0 3.5 14h9a1.5 1.5 0 0 0 1.5-1.5V5zm13-3H1v2h14zM5 7.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5" />
                        </svg>

                        {{-- Konten utama --}}
                        <div class="inner text-white">
                            <h3 class="fw-bold mb-1">{{ $TotalAgenda }}</h3>
                            <p class="mb-0">Total Agenda</p>
                        </div>
                    </div>
                    <!--end::Small Box Widget 2-->
                </div>
                <!--end::Col-->
                <div class="col-lg-3 col-6">
                    <!--begin::Small Box Widget 2-->
                    <div class="small-box text-bg-success position-relative overflow-hidden rounded-3 p-3 shadow-sm">
                        {{-- Ikon besar di kanan atas --}}
                        <svg class="position-absolute top-0 end-0 m-3 opacity-25" width="60" height="60" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                            <path
                                d="M0 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 12.5V5a1 1 0 0 1-1-1zm2 3v7.5A1.5 1.5 0 0 0 3.5 14h9a1.5 1.5 0 0 0 1.5-1.5V5zm13-3H1v2h14zM5 7.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5" />
                        </svg>

                        {{-- Konten utama --}}
                        <div class="inner text-white">
                            <h3 class="fw-bold mb-1">{{ $TotalAgendaEksternal }}</h3>
                            <p class="mb-0">Total Agenda Eksternal</p>
                        </div>
                    </div>
                    <!--end::Small Box Widget 2-->
                </div>
                <!--end::Col-->
                <div class="col-lg-3 col-6">
                    <!--begin::Small Box Widget 2-->
                    <div class="small-box text-bg-secondary position-relative overflow-hidden rounded-3 p-3 shadow-sm">
                        {{-- Ikon besar di kanan atas --}}
                        <svg class="position-absolute top-0 end-0 m-3 opacity-25" width="60" height="60" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                            <path
                                d="M0 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 12.5V5a1 1 0 0 1-1-1zm2 3v7.5A1.5 1.5 0 0 0 3.5 14h9a1.5 1.5 0 0 0 1.5-1.5V5zm13-3H1v2h14zM5 7.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5" />
                        </svg>

                        {{-- Konten utama --}}
                        <div class="inner text-white">
                            <h3 class="fw-bold mb-1">{{ $TotalAgendaInternal }}</h3>
                            <p class="mb-0">Total Agenda Internal</p>
                        </div>
                    </div>
                    <!--end::Small Box Widget 2-->
                </div>
                <!--end::Col-->
                <div class="col-lg-3 col-6">
                    <!--begin::Small Box Widget 2-->
                    <div class="small-box text-bg-danger position-relative overflow-hidden rounded-3 p-3 shadow-sm">
                        {{-- Ikon besar di kanan atas --}}
                        <svg class="position-absolute top-0 end-0 m-3 opacity-25" width="60" height="60" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" class="bi bi-calendar-check" viewBox="0 0 16 16">
                            <path d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0"/>
                            <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z"/>
                        </svg>
                        
                        {{-- Konten utama --}}
                        <div class="inner text-white">
                            <h3 class="fw-bold mb-1">{{ $TotalAgendaHariIni }}</h3>
                            <p class="mb-0">Total Agenda Hari Ini</p>
                        </div>
                    </div>
                    <!--end::Small Box Widget 2-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->

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
                                            <th style="width: 120px;">Provinsi</th>
                                            <th style="width: 120px;">Kabupaten/Kota</th>
                                            <th style="width: 150px;">Hari/Tanggal</th>
                                            <th style="width: 180px;">Acara</th>
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
                                        @foreach($dataAgendaEksternal as $agendaEksternal)
                                        <?php $no = 1; ?>
                                            <tr>
                                                <td>{{ ($dataAgendaEksternal->currentPage() - 1) * $dataAgendaEksternal->perPage() + $loop->iteration }}</td>
                                                <td>{{ $agendaEksternal->tanggal_surat }}</td>
                                                <td>{{$agendaEksternal->no_surat}}</td>
                                                <td>{{ $agendaEksternal->pengundang }}</td>
                                                <td>{{ $agendaEksternal->tempat }}</td>
                                                <td>{{ $agendaEksternal->provinsi }}</td>
                                                <td>{{ $agendaEksternal->kabupaten }}</td>
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
                                                <td>
                                                    <a href="sub-koor/editEksternal/{{$agendaEksternal->id}}" class="btn btn-warning btn-sm">edit</a>
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
                                                    <a href="sub-koor/editInternal/{{$agendaInternal->id}}" class="btn btn-warning btn-sm">edit</a>
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
                    <div class="modal-headeIn
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