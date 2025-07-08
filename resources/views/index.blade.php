<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda Kegiatan Kadis</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(120deg, #a1c4fd 0%, #c2e9fb 100%);
            min-height: 100vh;
            font-family: 'Segoe UI', 'Roboto', Arial, sans-serif;
        }
        .navbar {
            background: rgba(255,255,255,0.92) !important;
            backdrop-filter: blur(8px);
            border-bottom: 1px solid #e3e3e3;
        }
        .glass-card {
            background: rgba(255,255,255,0.8);
            border-radius: 22px;
            box-shadow: 0 8px 32px 0 rgba(31,38,135,0.18);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255,255,255,0.18);
            transition: transform 0.25s cubic-bezier(.4,2,.6,1), box-shadow 0.25s, border 0.2s;
            position: relative;
            overflow: hidden;
        }
        .glass-card::before {
            content: "";
            position: absolute;
            top: -60px; left: -60px;
            width: 120px; height: 120px;
            background: linear-gradient(135deg, #0d6efd33 0%, #51e2c233 100%);
            border-radius: 50%;
            z-index: 0;
            filter: blur(8px);
        }
        .glass-card:hover {
            transform: translateY(-10px) scale(1.03) rotate(-1deg);
            box-shadow: 0 16px 40px 0 rgba(31,38,135,0.22);
            border: 1.5px solid #0d6efd44;
        }
        .icon-circle {
            width: 70px;
            height: 70px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 18px auto;
            border-radius: 50%;
            font-size: 2.3rem;
            color: #fff;
            box-shadow: 0 4px 16px rgba(0,0,0,0.10);
            border: 3px solid #fff;
            position: relative;
            z-index: 2;
        }
        .icon-kadis { background: linear-gradient(135deg, #0d6efd 60%, #6ea8fe 100%);}
        .icon-subkoor { background: linear-gradient(135deg, #198754 60%, #51e2c2 100%);}
        .icon-staff { background: linear-gradient(135deg, #ffc107 60%, #ffe082 100%); color: #212529;}
        .icon-tu { background: linear-gradient(135deg, #0dcaf0 60%, #a1eafb 100%);}
        .card-title {
            font-weight: 700;
            letter-spacing: 0.5px;
        }
        .card-text {
            color: #555;
            min-height: 48px;
        }
        .btn {
            font-weight: 600;
            letter-spacing: 0.2px;
            border-radius: 30px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.07);
            transition: background 0.2s, color 0.2s, box-shadow 0.2s;
        }
        .btn-primary:hover, .btn-success:hover, .btn-warning:hover, .btn-info:hover {
            box-shadow: 0 4px 16px rgba(0,0,0,0.13);
            filter: brightness(1.08);
        }
        h1 {
            background: linear-gradient(90deg, #0d6efd 40%, #51e2c2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-size: 2.7rem;
            margin-bottom: 2.5rem;
            font-weight: 800;
            letter-spacing: 1px;
            text-align: center;
            animation: fadeInDown 1s cubic-bezier(.4,2,.6,1);
        }
        @keyframes fadeInDown {
            from { opacity: 0; transform: translateY(-30px);}
            to { opacity: 1; transform: translateY(0);}
        }
        footer {
            background: rgba(255,255,255,0.85);
            border-top: 1px solid #e3e3e3;
            padding: 18px 0 10px 0;
            text-align: center;
            color: #888;
            margin-top: 50px;
            font-size: 1.05rem;
            letter-spacing: 0.2px;
            backdrop-filter: blur(8px);
        }
        @media (max-width: 767px) {
            .icon-circle { width: 56px; height: 56px; font-size: 1.5rem;}
            h1 { font-size: 2rem;}
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold text-primary" href="#">
                <i class="bi bi-calendar2-week"></i> Agenda Kadis
            </a>
        </div>
    </nav>

    <div class="container py-5">
        <h1>Agenda Kegiatan Kadis</h1>
        <div class="row g-4 justify-content-center">
            <div class="col-md-6 col-lg-6">
                <div class="glass-card h-100 p-4">
                    <div class="card-body text-center position-relative">
                        <div class="icon-circle icon-kadis mb-2">
                            <i class="bi bi-person-badge"></i>
                        </div>
                        <h5 class="card-title">Halaman Kadis</h5>
                        <p class="card-text">Akses halaman khusus Kadis untuk melihat dan mengelola agenda.</p>
                        <a href="kadis" class="btn btn-primary px-4" data-bs-toggle="tooltip" title="Masuk ke halaman Kadis">
                            <i class="bi bi-box-arrow-in-right"></i> Halaman Kadis
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="glass-card h-100 p-4">
                    <div class="card-body text-center position-relative">
                        <div class="icon-circle icon-subkoor mb-2">
                            <i class="bi bi-people"></i>
                        </div>
                        <h5 class="card-title">Halaman Sub Koor</h5>
                        <p class="card-text">Akses halaman Sub Koordinator untuk agenda dan tugas terkait.</p>
                        <a href="sub-koor" class="btn btn-success px-4" data-bs-toggle="tooltip" title="Masuk ke halaman Sub Koordinator">
                            <i class="bi bi-box-arrow-in-right"></i> Halaman Sub.Koordinator
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="glass-card h-100 p-4">
                    <div class="card-body text-center position-relative">
                        <div class="icon-circle icon-staff mb-2">
                            <i class="bi bi-person-lines-fill"></i>
                        </div>
                        <h5 class="card-title">Halaman Staff</h5>
                        <p class="card-text">Halaman khusus Staff untuk melihat agenda dan aktivitas.</p>
                        <a href="staff" class="btn btn-warning text-dark px-4" data-bs-toggle="tooltip" title="Masuk ke halaman Staff">
                            <i class="bi bi-box-arrow-in-right"></i> Halaman Staff
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="glass-card h-100 p-4">
                    <div class="card-body text-center position-relative">
                        <div class="icon-circle icon-tu mb-2">
                            <i class="bi bi-journal-check"></i>
                        </div>
                        <h5 class="card-title">Halaman TU</h5>
                        <p class="card-text">Akses halaman Tata Usaha untuk pengelolaan administrasi.</p>
                        <a href="tu-bidang" class="btn btn-info text-white px-4" data-bs-toggle="tooltip" title="Masuk ke halaman Tata Usaha">
                            <i class="bi bi-box-arrow-in-right"></i> Halaman TU
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        &copy; {{ date('Y') }} Agenda Kegiatan Kadis DPUBMCK. All rights reserved.
    </footer>
    <!-- Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Enable tooltips
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    </script>
</body>
</html>