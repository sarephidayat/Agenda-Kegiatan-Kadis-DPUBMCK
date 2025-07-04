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
        border-left: 3px solid #e74c3c;
    }

    input:required:valid, select:required:valid, textarea:required:valid {
        border-left: 3px solid #2ecc71;
    }
    
    /* Table Styles */
    table {
        width: 100%;
        border-collapse: collapse;
        margin: 25px 0;
        font-size: 0.9em;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
        border-radius: 8px;
        overflow: hidden;
    }
    
    thead tr {
        background-color: #2c3e50;
        color: #ffffff;
        text-align: left;
        font-weight: bold;
    }
    
    th, td {
        padding: 12px 15px;
        border: 1px solid #dddddd;
    }
    
    tbody tr {
        border-bottom: 1px solid #dddddd;
        transition: all 0.2s;
    }
    
    tbody tr:nth-of-type(even) {
        background-color: #f3f3f3;
    }
    
    tbody tr:last-of-type {
        border-bottom: 2px solid #2c3e50;
    }
    
    tbody tr:hover {
        background-color: #e1f5fe;
        transform: scale(1.01);
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    
    th {
        position: sticky;
        top: 0;
        background-color: #2c3e50;
    }
    
    /* Responsive table */
    @media screen and (max-width: 768px) {
        table {
            display: block;
            overflow-x: auto;
        }
    }
    
    /* Zebra striping */
    tbody tr:nth-child(odd) {
        background-color: #fff;
    }
    
    tbody tr:nth-child(even) {
        background-color: #f8f9fa;
    }
    
    /* Improve text readability */
    td {
        vertical-align: top;
    }
    
    /* Add some spacing between columns */
    th:not(:last-child),
    td:not(:last-child) {
        border-right: 1px solid #e0e0e0;
    }
</style>
    <title>Document</title>
</head>
<body>
    <div class="container">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('agenda.store') }}" method="POST">
            @csrf
            <h1>Masukkan Agenda Hari Ini</h1>
            <label for="">Nomor Surat : </label>
            <input type="text" name="no_surat" placeholder="Masukkan Nomor Surat" required>

            <label for="">Tanggal Surat : </label>
            <input type="date" name="tanggal_surat" required>

            <label for="">Pengundang : </label>
            <input type="text" name="pengundang" placeholder="Masukkan Pengundang" required>

            <label for="">Tempat : </label>
            <input type="text" name="tempat" placeholder="Masukkan Tempat" required>

            <label for="">Tanggal Acara</label>
            <input type="date" name="tanggal_acara" placeholder="Masukkan Hari dan Tanggal" required>

            <label for="">Acara : </label>
            <input type="text" name="acara" placeholder="Masukkan Acara" required>

            <label for="">Pendamping / Disposisi Ke : </label>
            <select id="meeting-day" name="id_jabatan" class="form-control">
                <option value="">Pilih Jabatan</option>
                @foreach($jabatan as $j)
                    <option value="{{ $j->id_jabatan }}">{{ $j->nama_jabatan }}</option>
                @endforeach
            </select>

            <label for="">Bidang : </label>
            <select id="meeting-day" name="id_bidang" class="form-control">
                <option value="">Pilih Bidang</option>
                @foreach($bidang as $b)
                    <option value="{{ $b->id_bidang }}">{{ $b->nama_bidang }}</option>
                @endforeach
            </select>

            <label for="">Nama Pendamping : </label>
            <input type="text" name="nama_pendamping" placeholder="Masukkan Nama Pendamping" required>

            <label for="">Instruksi : </label>
            <select id="meeting-day" name="id_instruksi" class="form-control">
                <option value="">Pilih Instruksi</option>
                @foreach($instruksi as $i)
                    <option value="{{ $i->id_instruksi }}">{{ $i->isi_instruksi }}</option>
                @endforeach
            </select>

            <label for="">Waktu : </label>
            <input type="time" name="waktu" placeholder="Masukkan Waktu" required>

            <label for="">Catatan : </label>
            <textarea name="catatan" rows="4" placeholder="Masukkan Catatan"></textarea>
            <button type="submit" class="btn btn-primary">Simpan Agenda</button>

        </form>
    </div>
    
    <div class="container">
        <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Tanggal Surat</th>
                <th>No Surat</th>
                <th>Pengundang</th>
                <th>Tempat</th>
                <th>Hari/Tanggal</th>
                <th>Acara</th>
                <th>Pendamping / Disposisi Ke</th>
                <th>Bidang</th>
                <th>Nama Pendamping</th>
                <th>Instruksi</th>
                <th>Waktu</th>
                <th>Catatan</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $agenda)
            <?php $no = 1; ?>
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $agenda->tanggal_surat }}</td>
                    <td>{{$agenda->no_surat}}</td>
                    <td>{{ $agenda->pengundang }}</td>
                    <td>{{ $agenda->tempat }}</td>
                    <td>{{ $agenda->hari_tanggal }}</td>
                    <td>{{ $agenda->acara }}</td>
                    <td>{{ $agenda->nama_jabatan }}</td>
                    <td>{{ $agenda->nama_bidang }}</td>
                    <td>{{ $agenda->nama_pendamping }}</td>
                    <td>{{ $agenda->isi_instruksi }}</td>
                    <td>{{ $agenda->waktu }}</td>
                    <td>{{ $agenda->catatan }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
    
</body>
</html>