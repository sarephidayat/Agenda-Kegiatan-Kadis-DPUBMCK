@extends('TU-Bidang/TemplateDashboard/main')

@section('content')
<!--begin::App Main-->
<main class="app-main">
    <!--begin::App Content-->
    <div class="app-content">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row mt-3">
                <div class="col-sm-6">
                    <h3 class="mb-0">Input Agenda Eksternal</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Input Agenda</li>
                    </ol>
                </div>
            </div>
            
            <!--end::Row-->
            <!--begin::Row-->
            <div class="row mt-3">
                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h3 class="card-title">
                                <a href="/approvalAlat" style="color: black; text-decoration: none;"
                                    onmouseover="this.style.textDecoration='underline'"
                                    onmouseout="this.style.textDecoration='none'">
                                    Masukkan Agenda Eksternal Kepala Dinas
                                </a>

                            </h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="{{ route('tu-bidang.storeEksternal') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group row mb-3">
                                    <label for="no_surat" class="col-sm-3 col-form-label">Nomor Surat</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="no_surat" class="form-control" placeholder="Masukkan Nomor Surat" required>
                                    </div>
                                </div>

                                <div class="form-group row mb-3">
                                    <label for="tanggal_surat" class="col-sm-3 col-form-label">Tanggal Surat</label>
                                    <div class="col-sm-9">
                                        <input type="date" name="tanggal_surat" class="form-control" required>
                                    </div>
                                </div>

                                <div class="form-group row mb-3">
                                    <label for="pengundang" class="col-sm-3 col-form-label">Pengundang</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="pengundang" class="form-control" placeholder="Masukkan Pengundang" required>
                                    </div>
                                </div>

                                <div class="form-group row mb-3">
                                    <label for="tempat" class="col-sm-3 col-form-label">Tempat</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="tempat" class="form-control" placeholder="Masukkan Tempat" required>
                                    </div>
                                </div>

                                <div class="form-group row mb-3">
                                    <label for="tanggal_acara" class="col-sm-3 col-form-label">Tanggal Acara</label>
                                    <div class="col-sm-9">
                                        <input type="date" name="tanggal_acara" class="form-control" required>
                                    </div>
                                </div>

                                <div class="form-group row mb-3">
                                    <label for="acara" class="col-sm-3 col-form-label">Acara</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="acara" class="form-control" placeholder="Masukkan Acara" required>
                                    </div>
                                </div>

                                <div class="form-group row mb-3">
                                    <label for="id_jabatan" class="col-sm-3 col-form-label">Pendamping / Disposisi Ke</label>
                                    <div class="col-sm-9">
                                        <select name="id_jabatan" class="form-control" required>
                                            <option value="">Pilih Jabatan</option>
                                            @foreach($jabatan as $j)
                                                <option value="{{ $j->id_jabatan }}">{{ $j->nama_jabatan }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row mb-3">
                                    <label for="id_bidang" class="col-sm-3 col-form-label">Bidang</label>
                                    <div class="col-sm-9">
                                        <select name="id_bidang" class="form-control" required>
                                            <option value="">Pilih Bidang</option>
                                            @foreach($bidang as $b)
                                                <option value="{{ $b->id_bidang }}">{{ $b->nama_bidang }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row mb-3">
                                    <label for="nama_pendamping" class="col-sm-3 col-form-label">Nama Pendamping</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="nama_pendamping" class="form-control" placeholder="Masukkan Nama Pendamping" required>
                                    </div>
                                </div>

                                <div class="form-group row mb-3">
                                    <label for="id_instruksi" class="col-sm-3 col-form-label">Instruksi</label>
                                    <div class="col-sm-9">
                                        <select name="id_instruksi" class="form-control" required>
                                            <option value="">Pilih Instruksi</option>
                                            @foreach($instruksi as $i)
                                                <option value="{{ $i->id_instruksi }}">{{ $i->isi_instruksi }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row mb-3">
                                    <label for="waktu" class="col-sm-3 col-form-label">Waktu</label>
                                    <div class="col-sm-9">
                                        <input type="time" name="waktu" class="form-control" required>
                                    </div>
                                </div>

                                <div class="form-group row mb-3">
                                    <label for="catatan" class="col-sm-3 col-form-label">Catatan</label>
                                    <div class="col-sm-9">
                                        <textarea name="catatan" class="form-control" rows="4" placeholder="Masukkan Catatan" required></textarea>
                                    </div>
                                </div>

                                <div class="form-group row mb-3">
                                    <label for="softfile_surat" class="col-sm-3 col-form-label">File PDF</label>
                                    <div class="col-sm-9">
                                        <input type="file" name="softfile_surat" class="form-control-file" accept=".pdf" required>
                                        <small class="text-muted">Maksimal 2MB</small>
                                    </div>
                                </div>

                                <div class="form-group row mb-3">
                                    <div class="col-sm-12 text-right">
                                        <button type="submit" class="btn btn-primary">Simpan Agenda</button>
                                    </div>
                                </div>
                            </form>
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

@endsection