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
                    <!--begin::Small Box Widget 1-->
                    <div class="small-box text-bg-primary">
                        <div class="inner">
                            <h3>150</h3>
                            <p>New Orders</p>
                        </div>
                        <svg class="small-box-icon" fill="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path
                                d="M2.25 2.25a.75.75 0 000 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 00-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 000-1.5H5.378A2.25 2.25 0 017.5 15h11.218a.75.75 0 00.674-.421 60.358 60.358 0 002.96-7.228.75.75 0 00-.525-.965A60.864 60.864 0 005.68 4.509l-.232-.867A1.875 1.875 0 003.636 2.25H2.25zM3.75 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zM16.5 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0z">
                            </path>
                        </svg>
                        <a href="#"
                            class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                            More info <i class="bi bi-link-45deg"></i>
                        </a>
                    </div>
                    <!--end::Small Box Widget 1-->
                </div>
                <!--end::Col-->
                <div class="col-lg-3 col-6">
                    <!--begin::Small Box Widget 2-->
                    <div class="small-box text-bg-success">
                        <div class="inner">
                            <h3>53<sup class="fs-5">%</sup></h3>
                            <p>Bounce Rate</p>
                        </div>
                        <svg class="small-box-icon" fill="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path
                                d="M18.375 2.25c-1.035 0-1.875.84-1.875 1.875v15.75c0 1.035.84 1.875 1.875 1.875h.75c1.035 0 1.875-.84 1.875-1.875V4.125c0-1.036-.84-1.875-1.875-1.875h-.75zM9.75 8.625c0-1.036.84-1.875 1.875-1.875h.75c1.036 0 1.875.84 1.875 1.875v11.25c0 1.035-.84 1.875-1.875 1.875h-.75a1.875 1.875 0 01-1.875-1.875V8.625zM3 13.125c0-1.036.84-1.875 1.875-1.875h.75c1.036 0 1.875.84 1.875 1.875v6.75c0 1.035-.84 1.875-1.875 1.875h-.75A1.875 1.875 0 013 19.875v-6.75z">
                            </path>
                        </svg>
                        <a href="#"
                            class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                            More info <i class="bi bi-link-45deg"></i>
                        </a>
                    </div>
                    <!--end::Small Box Widget 2-->
                </div>
                <!--end::Col-->
                <div class="col-lg-3 col-6">
                    <!--begin::Small Box Widget 3-->
                    <div class="small-box text-bg-warning">
                        <div class="inner">
                            <h3>44</h3>
                            <p>User Registrations</p>
                        </div>
                        <svg class="small-box-icon" fill="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path
                                d="M6.25 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM3.25 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM19.75 7.5a.75.75 0 00-1.5 0v2.25H16a.75.75 0 000 1.5h2.25v2.25a.75.75 0 001.5 0v-2.25H22a.75.75 0 000-1.5h-2.25V7.5z">
                            </path>
                        </svg>
                        <a href="#"
                            class="small-box-footer link-dark link-underline-opacity-0 link-underline-opacity-50-hover">
                            More info <i class="bi bi-link-45deg"></i>
                        </a>
                    </div>
                    <!--end::Small Box Widget 3-->
                </div>
                <!--end::Col-->
                <div class="col-lg-3 col-6">
                    <!--begin::Small Box Widget 4-->
                    <div class="small-box text-bg-danger">
                        <div class="inner">
                            <h3>65</h3>
                            <p>Unique Visitors</p>
                        </div>
                        <svg class="small-box-icon" fill="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path clip-rule="evenodd" fill-rule="evenodd"
                                d="M2.25 13.5a8.25 8.25 0 018.25-8.25.75.75 0 01.75.75v6.75H18a.75.75 0 01.75.75 8.25 8.25 0 01-16.5 0z">
                            </path>
                            <path clip-rule="evenodd" fill-rule="evenodd"
                                d="M12.75 3a.75.75 0 01.75-.75 8.25 8.25 0 018.25 8.25.75.75 0 01-.75.75h-7.5a.75.75 0 01-.75-.75V3z">
                            </path>
                        </svg>
                        <a href="#"
                            class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                            More info <i class="bi bi-link-45deg"></i>
                        </a>
                    </div>
                    <!--end::Small Box Widget 4-->
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
                    <div class="card mb-4">
                        <div class="card-header">
                            <h3 class="card-title">
                                <a href="/approvalAlat" style="color: black; text-decoration: none;"
                                    onmouseover="this.style.textDecoration='underline'"
                                    onmouseout="this.style.textDecoration='none'">
                                    Daftar Agenda Kepala Dinas
                                </a>

                            </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div style="overflow-x: auto;">
                                <form action="{{ route('tu-bidang.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <h1>Edit Agenda</h1>
                                    
                                    <table style="width: 100%; border-collapse: separate; border-spacing: 15px;">
                                        <tr>
                                            <td><label for="no_surat">Nomor Surat</label></td>
                                            <td> : </td>
                                            <td><input type="text" name="no_surat" class="form-control" value="{{ $data->no_surat }}" required disabled></td>
                                        </tr>
                                        <tr>
                                            <td><label for="tanggal_surat">Tanggal Surat</label></td>
                                            <td> : </td>
                                            <td><input type="date" name="tanggal_surat" class="form-control" value="{{ $data->tanggal_surat }}" required disabled></td>
                                        </tr>
                                        <tr>
                                            <td><label for="pengundang">Pengundang</label></td>
                                            <td> : </td>
                                            <td><input type="text" name="pengundang" class="form-control" value="{{ $data->pengundang }}" required disabled></td>
                                        </tr>
                                        <tr>
                                            <td><label for="tempat">Tempat</label></td>
                                            <td> : </td>
                                            <td><input type="text" name="tempat" class="form-control" value="{{ $data->tempat }}" required disabled></td>
                                        </tr>
                                        <tr>
                                            <td><label for="tanggal_acara">Tanggal Acara</label></td>
                                            <td> : </td>
                                            <td><input type="date" name="tanggal_acara" class="form-control" value="{{ $data->hari_tanggal }}" required disabled></td>
                                        </tr>
                                        <tr>
                                            <td><label for="acara">Acara</label></td>
                                            <td> : </td>
                                            <td><input type="text" name="acara" class="form-control" value="{{ $data->acara }}" required disabled></td>
                                        </tr>
                                        <tr>
                                            <td><label for="id_jabatan">Disposisi Ke</label></td>
                                            <td> : </td>
                                            <td>
                                                <select name="id_jabatan" class="form-control" required >
                                                    <option value="">Pilih Jabatan</option>
                                                    @foreach($jabatan as $j)
                                                        <option value="{{ $j->id_jabatan }}" 
                                                            @if(old('id_jabatan', $data->id_jabatan) == $j->id_jabatan) selected @endif>
                                                            {{ $j->nama_jabatan }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><label for="id_bidang">Bidang</label></td>
                                            <td> : </td>
                                            <td>
                                                <select name="id_bidang" class="form-control" required>
                                                    <option value="">Pilih Bidang</option>
                                                    @foreach($bidang as $b)
                                                        <option value="{{ $b->id_bidang }}" 
                                                            @if(old('id_bidang', $data->id_bidang) == $b->id_bidang) selected @endif>
                                                            {{ $b->nama_bidang }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><label for="nama_pendamping">Nama Pendamping</label></td>
                                            <td> : </td>
                                            <td><input type="text" name="nama_pendamping" class="form-control" value="{{ $data->nama_pendamping }}" required></td>
                                        </tr>
                                        <tr>
                                            <td><label for="id_instruksi">Instruksi</label></td>
                                            <td> : </td>
                                            <td>
                                                <select name="id_instruksi" class="form-control" required>
                                                    <option value="">Pilih Instruksi</option>
                                                    @foreach($instruksi as $i)
                                                        <option value="{{ $i->id_instruksi }}" 
                                                            @if(old('id_instruksi', $data->id_instruksi) == $i->id_instruksi) selected @endif>
                                                            {{ $i->isi_instruksi }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><label for="waktu">Waktu</label></td>
                                            <td> : </td>
                                            <td><input type="time" name="waktu" class="form-control" value="{{ $data->waktu }}" required disabled></td>
                                        </tr>
                                        <tr>
                                            <td><label for="catatan">Catatan</label></td>
                                            <td> : </td>
                                            <td>
                                                <textarea name="catatan" rows="4" class="form-control" required placeholder="Masukkan Catatan">{{ old('catatan', $data->catatan) }}</textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><label for="softfile_surat">File PDF</label></td>
                                            <td> : </td>
                                            <td>
                                                @if ($data->softfile_surat)
                                                    <p> 
                                                        <a href="{{ asset('storage/dokumen/' . $data->softfile_surat) }}" target="_blank">
                                                            📄 Lihat PDF
                                                        </a>
                                                    </p>
                                                @endif
                                                
                                                <input type="file" name="softfile_surat" accept=".pdf" class="form-control mt-1">
                                                <input type="hidden" name="softfile_surat_lama" value="{{ $data->softfile_surat }}">
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
    <!--end::App Content-->
</main>
<!--end::App Main-->
@endsection