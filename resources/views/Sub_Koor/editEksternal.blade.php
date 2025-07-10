@extends('Sub_Koor/TemplateDashboard/main')

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
                        <a href="/sub-koor" class="btn btn-secondary">
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
                                <form action="{{ route('sub-koor.updateEksternal', $dataAgendaEksternal->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <table style="width: 100%; border-collapse: separate; border-spacing: 15px;">
                                        {{-- Nomor Surat --}}
                                        <tr>
                                            <td><label for="no_surat">Nomor Surat</label></td>
                                            <td>:</td>
                                            <td>
                                                <input type="text" name="no_surat" class="form-control" value="{{ $dataAgendaEksternal->no_surat }}" required readonly>
                                                <input type="hidden" name="no_surat" value="{{ $dataAgendaEksternal->no_surat }}">
                                            </td>
                                        </tr>

                                        {{-- Tanggal Surat --}}
                                        <tr>
                                            <td><label for="tanggal_surat">Tanggal Surat</label></td>
                                            <td>:</td>
                                            <td>
                                                <input type="date" name="tanggal_surat" class="form-control" value="{{ $dataAgendaEksternal->tanggal_surat }}" required readonly>
                                                <input type="hidden" name="tanggal_surat" value="{{ $dataAgendaEksternal->tanggal_surat }}">
                                            </td>
                                        </tr>

                                        {{-- Pengundang --}}
                                        <tr>
                                            <td><label for="pengundang">Pengundang</label></td>
                                            <td>:</td>
                                            <td>
                                                <input type="text" name="pengundang" class="form-control" value="{{ $dataAgendaEksternal->pengundang }}" required readonly>
                                                <input type="hidden" name="pengundang" value="{{ $dataAgendaEksternal->pengundang }}">
                                            </td>
                                        </tr>

                                        {{-- Tempat --}}
                                        <tr>
                                            <td><label for="tempat">Tempat</label></td>
                                            <td>:</td>
                                            <td>
                                                <input type="text" name="tempat" class="form-control" value="{{ $dataAgendaEksternal->tempat }}" required readonly>
                                                <input type="hidden" name="tempat" value="{{ $dataAgendaEksternal->tempat }}">
                                            </td>
                                        </tr>

                                        {{-- Tanggal Acara --}}
                                        <tr>
                                            <td><label for="tanggal">Tanggal Acara</label></td>
                                            <td>:</td>
                                            <td>
                                                <input type="date" name="tanggal" class="form-control" value="{{ $dataAgendaEksternal->tanggal }}" required readonly>
                                                <input type="hidden" name="tanggal" value="{{ $dataAgendaEksternal->tanggal }}">
                                            </td>
                                        </tr>

                                        {{-- Acara --}}
                                        <tr>
                                            <td><label for="acara">Acara</label></td>
                                            <td>:</td>
                                            <td>
                                                <input type="text" name="acara" class="form-control" value="{{ $dataAgendaEksternal->acara }}" required readonly>
                                                <input type="hidden" name="acara" value="{{ $dataAgendaEksternal->acara }}">
                                            </td>
                                        </tr>

                                        {{-- Disposisi Ke --}}
                                        <tr>
                                            <td><label for="id_jabatan">Disposisi Ke</label></td>
                                            <td>:</td>
                                            <td>
                                                <select name="id_jabatan" class="form-control" required>
                                                    <option value="">Pilih Jabatan</option>
                                                    @foreach($jabatan as $j)
                                                        <option value="{{ $j->id_jabatan }}"
                                                            @if(old('id_jabatan', $dataAgendaEksternal->id_jabatan) == $j->id_jabatan) selected @endif>
                                                            {{ $j->nama_jabatan }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </td>
                                        </tr>

                                        {{-- Bidang --}}
                                        <tr>
                                            <td><label for="id_bidang">Bidang</label></td>
                                            <td>:</td>
                                            <td>
                                                <select name="id_bidang" class="form-control" required>
                                                    <option value="">Pilih Bidang</option>
                                                    @foreach($bidang as $b)
                                                        <option value="{{ $b->id_bidang }}"
                                                            @if(old('id_bidang', $dataAgendaEksternal->id_bidang) == $b->id_bidang) selected @endif>
                                                            {{ $b->nama_bidang }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </td>
                                        </tr>

                                        {{-- Nama Pendamping --}}
                                        <tr>
                                            <td><label for="nama_pendamping">Nama Pendamping</label></td>
                                            <td>:</td>
                                            <td>
                                                <input type="text" name="nama_pendamping" class="form-control" value="{{ $dataAgendaEksternal->nama_pendamping }}" required>
                                            </td>
                                        </tr>

                                        {{-- Instruksi --}}
                                        <tr>
                                            <td><label for="id_instruksi">Instruksi</label></td>
                                            <td>:</td>
                                            <td>
                                                <select name="id_instruksi" class="form-control" required>
                                                    <option value="">Pilih Instruksi</option>
                                                    @foreach($instruksi as $i)
                                                        <option value="{{ $i->id_instruksi }}"
                                                            @if(old('id_instruksi', $dataAgendaEksternal->id_instruksi) == $i->id_instruksi) selected @endif>
                                                            {{ $i->isi_instruksi }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </td>
                                        </tr>

                                        {{-- Waktu --}}
                                        <tr>
                                            <td><label for="waktu">Waktu</label></td>
                                            <td>:</td>
                                            <td>
                                                <input type="time" name="waktu" class="form-control" value="{{ $dataAgendaEksternal->waktu }}" required readonly>
                                                <input type="hidden" name="waktu" value="{{ $dataAgendaEksternal->waktu }}">
                                            </td>
                                        </tr>

                                        {{-- Catatan --}}
                                        <tr>
                                            <td><label for="catatan">Catatan</label></td>
                                            <td>:</td>
                                            <td>
                                                <textarea name="catatan" rows="4" class="form-control" placeholder="Masukkan Catatan">{{ old('catatan', $dataAgendaEksternal->catatan) }}</textarea>
                                            </td>
                                        </tr>

                                        {{-- File PDF --}}
                                        <tr>
                                            <td><label for="softfile_surat">File PDF</label></td>
                                            <td>:</td>
                                            <td>
                                                @if ($dataAgendaEksternal->softfile_surat)
                                                    <p>
                                                        <a href="{{ asset('storage/dokumen/' . $dataAgendaEksternal->softfile_surat) }}" target="_blank">
                                                            📄 Lihat PDF
                                                        </a>
                                                    </p>
                                                @endif

                                                <input type="file" name="softfile_surat" accept=".pdf" class="form-control mt-1">
                                                <input type="hidden" name="softfile_surat_lama" value="{{ $dataAgendaEksternal->softfile_surat }}">
                                            </td>
                                        </tr>

                                        {{-- Tombol Submit --}}
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