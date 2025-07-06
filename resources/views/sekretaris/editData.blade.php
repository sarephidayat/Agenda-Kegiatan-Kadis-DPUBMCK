<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        margin: 20px;
        color: #333;
        background-color: #f9f9f9;
    }

    /* Form Styles */
    form {
        max-width: 100%;
        background-color: #fff;
        padding: 25px;
        border-radius: 8px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        margin-bottom: 30px;
    }

    form h1 {
        color: #2c3e50;
        margin-bottom: 20px;
        font-size: 1.5em;
        border-bottom: 2px solid #e1f5fe;
        padding-bottom: 10px;
    }

    label {
        display: block;
        margin: 15px 0 5px;
        color: #2c3e50;
        font-weight: 500;
    }

    input[type="text"],
    input[type="date"],
    input[type="time"],
    select,
    textarea {
        width: 100%;
        padding: 10px 12px;
        border: 1px solid #ddd;
        border-radius: 4px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size: 0.9em;
        transition: border-color 0.3s;
        box-sizing: border-box;
    }

    input[type="text"]:focus,
    input[type="date"]:focus,
    input[type="time"]:focus,
    select:focus,
    textarea:focus {
        border-color: #3498db;
        outline: none;
        box-shadow: 0 0 0 2px rgba(52, 152, 219, 0.2);
    }

    textarea {
        resize: vertical;
        min-height: 80px;
    }

    button[type="submit"] {
        background-color: #2c3e50;
        color: white;
        border: none;
        padding: 12px 20px;
        margin-top: 20px;
        border-radius: 4px;
        cursor: pointer;
        font-size: 1em;
        transition: background-color 0.3s;
    }

    button[type="submit"]:hover {
        background-color: #3498db;
    }

    /* Responsive Form */
    @media screen and (min-width: 768px) {
        form {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        form h1 {
            grid-column: span 2;
        }

        button[type="submit"] {
            grid-column: span 2;
            width: 200px;
            justify-self: center;
        }
    }

    /* Style for select dropdown */
    select {
        appearance: none;
        background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3e%3cpolyline points='6 9 12 15 18 9'%3e%3c/polyline%3e%3c/svg%3e");
        background-repeat: no-repeat;
        background-position: right 10px center;
        background-size: 15px;
    }

    /* Style for required fields */
    input:required, select:required, textarea:required {
        border-left: 3px solid #2ecc71;
    }

    input:disabled, select:disabled, textarea:disabled {
        border-left: 3px solid #2ecc71;
    }
    
</style>
    <title>Document</title>
</head>
<body>
    <h1>Ini adalah halaman sekretaris</h1>
    <div class="container">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div>
            <a href="{{ route('sekretaris-dinas.index') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Kembali ke Tabel Data
            </a>
        </div>

        <form action="{{ route('sekretaris-dinas.update', $data->id) }}" method="POST" enctype="multipart/form-data">
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
</body>
</html>