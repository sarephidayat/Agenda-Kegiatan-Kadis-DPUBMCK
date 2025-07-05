<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="">
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

    .alert {
        margin: 1rem 0;
        border-radius: 0.5rem;
        box-shadow: 0 0.125rem 0.25rem rgba(0,0,0,0.075);
    }

    .navbar {
        padding: 1rem;
        background-color: #f8f9fa;
        border-bottom: 1px solid #dee2e6;
        margin-bottom: 1rem;
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
    <h1>Ini adalah halaman sekretaris</h1>
    <!-- Versi menggunakan Bootstrap 5 (standar Laravel) -->
    <div class="navbar bg-light border-bottom mb-3 p-3">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show mb-3">
                <i class="fas fa-check-circle me-2"></i>
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif
        
        @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show mb-3">
                <i class="fas fa-exclamation-circle me-2"></i>
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        <div class="d-flex justify-content-end">
            <a href="sekretaris-dinas/tambah-data" class="btn btn-primary">
                <i class="fas fa-plus me-1"></i> Tambah Data
            </a>
        </div>
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
                <th>File</th>
                <th>Aksi</th>
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
                    <td>{{ $agenda->nama_jabatan }}</td>
                    <td>{{ $agenda->nama_bidang }}</td>
                    <td>{{ $agenda->nama_pendamping }}</td>
                    <td>{{ $agenda->isi_instruksi }}</td>
                    <td>{{ $agenda->waktu }}</td>
                    <td>{{ $agenda->catatan }}</td>
                    <td>
                        <canvas id="pdf-preview-{{ $loop->index }}" style="width: 100px; height: auto;"></canvas>
                        <br>
                        @if($agenda->softfile_surat)
                        <a href="{{ asset('storage/dokumen/' . $agenda->softfile_surat) }}" target="_blank" class="btn btn-sm btn-primary">
                            <i class="fas fa-file-pdf"></i> Lihat Dokumen
                        </a>
                        @else
                        <span class="text-muted">Tidak ada dokumen</span>
                        @endif
                    </td>
                    <td>
                        <a href="">edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.min.js"></script>
    <script>
        @foreach ($data as $agenda)
            const url{{ $loop->index }} = "{{ asset('storage/dokumen/' . $agenda->softfile_surat) }}";
            const loadingTask{{ $loop->index }} = pdfjsLib.getDocument(url{{ $loop->index }});
            loadingTask{{ $loop->index }}.promise.then(pdf => {
                pdf.getPage(1).then(page => {
                    const scale = 0.3; // kecilkan ukuran
                    const viewport = page.getViewport({ scale });

                    const canvas = document.getElementById("pdf-preview-{{ $loop->index }}");
                    const context = canvas.getContext("2d");
                    canvas.width = viewport.width;
                    canvas.height = viewport.height;

                    const renderContext = {
                        canvasContext: context,
                        viewport: viewport
                    };

                    page.render(renderContext);
                });
            });
        @endforeach
    </script>

</body>
</html>