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
                <div class="mb-3 text-end">
                        <a href="/tu-bidang" class="btn btn-secondary">
                            Kembali ke Dashboard
                        </a>
                </div>
                
                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h3 class="card-title">
                                <a href="/approvalAlat" style="color: black; text-decoration: none;"
                                    onmouseover="this.style.textDecoration='underline'"
                                    onmouseout="this.style.textDecoration='none'">
                                    Edit Disposisi Agenda
                                </a>

                            </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div style="overflow-x: auto;">
                                <form action="{{ route('tu-bidang.updateInternal', $dataAgendaInternal->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <table style="width: 100%; border-collapse: separate; border-spacing: 15px;">
                                        <tr>
                                            <td><label for="no_surat">Nomor Surat</label></td>
                                            <td> : </td>
                                            <td><input type="text" name="no_surat" class="form-control" value="{{ $dataAgendaInternal->no_surat }}" required></td>
                                        </tr>
                                        <tr>
                                            <td><label for="tanggal_surat">Tanggal Surat</label></td>
                                            <td> : </td>
                                            <td><input type="date" name="tanggal_surat" class="form-control" value="{{ $dataAgendaInternal->tanggal_surat }}" required></td>
                                        </tr>
                                        <tr>
                                            <td><label for="id_bidang">Bidang Pengundang</label></td>
                                            <td> : </td>
                                            <td>
                                                <select name="id_bidang" class="form-control" required>
                                                    <option value="">Pilih Bidang</option>
                                                    @foreach($bidang as $b)
                                                        <option value="{{ $b->id_bidang }}" 
                                                            @if(old('id_bidang', $dataAgendaInternal->id_bidang) == $b->id_bidang) selected @endif>
                                                            {{ $b->nama_bidang }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><label for="acara">Acara</label></td>
                                            <td> : </td>
                                            <td><input type="text" name="acara" class="form-control" value="{{ $dataAgendaInternal->acara }}" required></td>
                                        </tr>
                                        <tr>
                                            <td><label for="waktu">Waktu</label></td>
                                            <td> : </td>
                                            <td><input type="time" name="waktu" class="form-control" value="{{ $dataAgendaInternal->waktu }}" required></td>
                                        </tr>
                                        <tr>
                                            <td><label for="tanggal">Tanggal Acara</label></td>
                                            <td> : </td>
                                            <td><input type="date" name="tanggal" class="form-control" value="{{ $dataAgendaInternal->tanggal }}" required></td>
                                        </tr>
                                        <tr>
                                            <td><label for="tempat">Tempat</label></td>
                                            <td> : </td>
                                            <td><input type="text" name="tempat" class="form-control" value="{{ $dataAgendaInternal->tempat }}" required></td>
                                        </tr>
                                        <tr>
                                            <td><label for="kepada">Kepada</label></td>
                                            <td> : </td>
                                            <td><input type="text" name="kepada" class="form-control" value="{{ $dataAgendaInternal->kepada }}" required></td>
                                        </tr>
                                        <tr>
                                            <td><label for="catatan">Catatan</label></td>
                                            <td> : </td>
                                            <td>
                                                <textarea name="catatan" rows="4" class="form-control" placeholder="Masukkan Catatan">{{ old('catatan', $dataAgendaInternal->catatan) }}</textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><label for="softfile_surat">File PDF</label></td>
                                            <td> : </td>
                                            <td>
                                                @if ($dataAgendaInternal->softfile_surat)
                                                    <p>
                                                        <a href="{{ asset('storage/dokumen/' . $dataAgendaInternal->softfile_surat) }}" target="_blank">📄 Lihat PDF Lama</a>
                                                    </p>
                                                @endif

                                                <input type="file" name="softfile_surat" accept=".pdf" class="form-control mt-1">
                                                <input type="hidden" name="softfile_surat_lama" value="{{ $dataAgendaInternal->softfile_surat }}">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="text-align: center;">
                                                <button type="submit" class="btn btn-primary">Update Agenda</button>
                                            </td>
                                        </tr>
                                    </table>
                                </form>
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

@endsection