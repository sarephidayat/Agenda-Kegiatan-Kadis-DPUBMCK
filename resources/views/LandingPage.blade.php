<?php
// Data statis untuk tampilan
$total_agenda = [
    'total' => 42,
    'hadir' => 28,
    'diwakilkan' => 14
];

$agenda_hari_ini = [
    [
        'judul' => 'Rapat Evaluasi Proyek Jalan Kota',
        'tanggal' => date('Y-m-d'),
        'waktu' => '08:30:00',
        'lokasi' => 'Ruang Rapat Utama',
        'status_kehadiran' => 'hadir'
    ],
    [
        'judul' => 'Penandatanganan Kontrak Baru',
        'tanggal' => date('Y-m-d'),
        'waktu' => '10:00:00',
        'lokasi' => 'Ruang Kepala Dinas',
        'status_kehadiran' => 'hadir'
    ],
    [
        'judul' => 'Kunjungan Lapangan Proyek Jembatan',
        'tanggal' => date('Y-m-d'),
        'waktu' => '13:00:00',
        'lokasi' => 'Proyek Jembatan Timur',
        'status_kehadiran' => 'hadir'
    ],
    [
        'judul' => 'Rapat Koordinasi dengan Kontraktor',
        'tanggal' => date('Y-m-d'),
        'waktu' => '15:30:00',
        'lokasi' => 'Ruang Meeting Lt.2',
        'status_kehadiran' => 'diwakilkan'
    ],
    [
        'judul' => 'Presentasi Laporan Triwulan',
        'tanggal' => date('Y-m-d'),
        'waktu' => '16:45:00',
        'lokasi' => 'Aula Serbaguna',
        'status_kehadiran' => 'hadir'
    ]
];

$agenda_besok = [
    [
        'judul' => 'Rapat Persiapan Tender',
        'tanggal' => date('Y-m-d', strtotime('+1 day')),
        'waktu' => '09:00:00',
        'lokasi' => 'Ruang Rapat 1',
        'status_kehadiran' => 'hadir'
    ],
    [
        'judul' => 'Silaturahmi dengan DPRD',
        'tanggal' => date('Y-m-d', strtotime('+1 day')),
        'waktu' => '11:00:00',
        'lokasi' => 'Gedung DPRD Kota',
        'status_kehadiran' => 'pending'
    ],
    [
        'judul' => 'Monitoring Proyek Drainase',
        'tanggal' => date('Y-m-d', strtotime('+1 day')),
        'waktu' => '13:30:00',
        'lokasi' => 'Wilayah Utara Kota',
        'status_kehadiran' => 'hadir'
    ],
    [
        'judul' => 'Workshop Peningkatan SDM',
        'tanggal' => date('Y-m-d', strtotime('+1 day')),
        'waktu' => '15:00:00',
        'lokasi' => 'Hotel Grand City',
        'status_kehadiran' => 'diwakilkan'
    ],
    [
        'judul' => 'Rapat Internal Divisi',
        'tanggal' => date('Y-m-d', strtotime('+1 day')),
        'waktu' => '16:30:00',
        'lokasi' => 'Ruang Rapat 3',
        'status_kehadiran' => 'hadir'
    ]
];

// Data untuk chart bulanan
$chart_data = [
    'Maret' => [
        'Minggu 1' => 10,
        'Minggu 2' => 5,
        'Minggu 3' => 13,
        'Minggu 4' => 14
    ],
    'April' => [
        'Minggu 1' => 8,
        'Minggu 2' => 12,
        'Minggu 3' => 9,
        'Minggu 4' => 11
    ]
];

// Fungsi helper untuk format tanggal
function formatTanggal($date) {
    $days = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
    $day = $days[date('w', strtotime($date))];
    return $day . ', ' . date('d M Y', strtotime($date));
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Agenda - Kepala Dinas</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        :root {
            --primary-color: #1a56a7;
            --orange-color: #FF6B00;
            --secondary-color: #f8d56b;
            --light-color: #f8f9fa;
            --dark-color: #343a40;
            --success-color: #28a745;
            --danger-color: #dc3545;
            --info-color: #17a2b8;
            --glass-bg: rgba(255,255,255,0.85);
            --glass-border: rgba(255,255,255,0.25);
            --shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.18);
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(120deg, #e0eafc 0%, #cfdef3 100%);
            color: #333;
            margin: 0;
            padding: 0;
            min-height: 100vh;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        header {
            background: linear-gradient(90deg, var(--primary-color) 0%, #2a6bc6 100%);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
            padding: 15px 0;
            margin-bottom: 25px;
            border-radius: 0 0 18px 18px;
            position: relative;
            overflow: hidden;
        }

        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: relative;
            z-index: 2;
        }

        .logo {
            display: flex;
            align-items: center;
        }

        .logo img {
            height: 50px;
            margin-right: 15px;
            filter: brightness(0) invert(1);
        }

        .logo-text h1 {
            font-size: 20px;
            margin: 0;
            color: white;
            font-weight: 700;
            letter-spacing: 0.5px;
        }

        .logo-text p {
            font-size: 13px;
            margin: 0;
            color: rgba(255,255,255,0.9);
        }

        .date-display {
            background: rgba(255,255,255,0.15);
            color: white;
            padding: 10px 20px;
            border-radius: 30px;
            font-weight: 500;
            font-size: 14px;
            backdrop-filter: blur(5px);
            display: flex;
            align-items: center;
            gap: 8px;
            border: 1px solid rgba(255,255,255,0.2);
        }

        .header-pattern {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: radial-gradient(rgba(255,255,255,0.1) 1px, transparent 1px);
            background-size: 15px 15px;
            z-index: 1;
            opacity: 0.5;
        }

        .dashboard-title {
            color: var(--primary-color);
            margin-bottom: 25px;
            text-align: center;
            font-size: 24px;
            font-weight: 700;
            letter-spacing: 0.5px;
            position: relative;
            padding-bottom: 10px;
        }

        .dashboard-title:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background: linear-gradient(90deg, var(--primary-color), var(--orange-color));
            border-radius: 3px;
        }

        .stats-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 15px;
            margin-bottom: 25px;
        }

        .stat-card {
            background: white;
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            text-align: center;
            transition: transform 0.25s, box-shadow 0.25s;
            border: none;
            position: relative;
            overflow: hidden;
        }

        .stat-card:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
        }

        .stat-card.total:before {
            background: var(--primary-color);
        }

        .stat-card.hadir:before {
            background: var(--success-color);
        }

        .stat-card.diwakilkan:before {
            background: var(--danger-color);
        }

        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.12);
        }

        .stat-value {
            font-size: 36px;
            font-weight: 800;
            margin: 10px 0 5px 0;
            color: var(--dark-color);
        }

        .stat-label {
            font-size: 14px;
            color: #6c757d;
            font-weight: 600;
        }

        .content-section {
            display: flex;
            flex-direction: column;
            gap: 20px;
            margin-bottom: 25px;
        }

        .card {
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            padding: 20px;
            border: none;
        }

        .card-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
            padding-bottom: 10px;
            border-bottom: 1px solid #eee;
        }

        .card-title {
            font-size: 18px;
            font-weight: 700;
            color: var(--primary-color);
            margin: 0;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .card-title i {
            color: var(--orange-color);
        }

        .agenda-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .agenda-item {
            padding: 15px 0;
            border-bottom: 1px solid #f0f0f0;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: background 0.2s;
        }

        .agenda-item:last-child {
            border-bottom: none;
        }

        .agenda-item:hover {
            background: rgba(26, 86, 167, 0.03);
        }

        .agenda-info {
            flex: 1;
            min-width: 0;
        }

        .agenda-title {
            font-weight: 600;
            font-size: 15px;
            margin-bottom: 5px;
            color: var(--dark-color);
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .agenda-meta {
            display: flex;
            flex-wrap: wrap;
            font-size: 13px;
            color: #6c757d;
            gap: 12px;
        }

        .agenda-date, .agenda-time, .agenda-location {
            display: flex;
            align-items: center;
        }

        .agenda-date i, .agenda-time i, .agenda-location i {
            margin-right: 5px;
            color: var(--primary-color);
            font-size: 12px;
        }

        .agenda-status {
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            min-width: 90px;
            text-align: center;
            transition: all 0.2s;
        }

        .status-hadir {
            background: rgba(40, 167, 69, 0.1);
            color: var(--success-color);
            border: 1px solid rgba(40, 167, 69, 0.2);
        }

        .status-diwakilkan {
            background: rgba(220, 53, 69, 0.1);
            color: var(--danger-color);
            border: 1px solid rgba(220, 53, 69, 0.2);
        }

        .status-pending {
            background: rgba(23, 162, 184, 0.1);
            color: var(--info-color);
            border: 1px solid rgba(23, 162, 184, 0.2);
        }

        .chart-container {
            margin-top: 30px;
            background: white;
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
        }

        .chart-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }

        .chart-title {
            font-size: 18px;
            font-weight: 700;
            color: var(--primary-color);
            margin: 0;
        }

        .chart-selector {
            padding: 6px 12px;
            border-radius: 6px;
            border: 1px solid #ddd;
            font-family: 'Poppins', sans-serif;
            font-size: 14px;
            background: white;
            transition: border 0.2s;
        }
        .chart-selector:focus {
            border: 1.5px solid var(--primary-color);
            outline: none;
        }

        .chart-wrapper {
            position: relative;
            height: 300px;
            width: 100%;
        }

        footer {
            text-align: center;
            padding: 20px;
            color: white;
            font-size: 14px;
            background: linear-gradient(90deg, var(--primary-color) 0%, #2a6bc6 100%);
            margin-top: 40px;
            border-radius: 18px 18px 0 0;
            position: relative;
            overflow: hidden;
        }

        footer .container {
            position: relative;
            z-index: 2;
        }

        footer:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: radial-gradient(rgba(255,255,255,0.1) 1px, transparent 1px);
            background-size: 15px 15px;
            z-index: 1;
            opacity: 0.3;
        }

        .footer-links {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 10px;
        }

        .footer-links a {
            color: rgba(255,255,255,0.8);
            text-decoration: none;
            transition: color 0.2s;
        }

        .footer-links a:hover {
            color: white;
        }

        @media (max-width: 768px) {
            .stats-container {
                grid-template-columns: 1fr;
                gap: 12px;
            }
            
            .header-content {
                flex-direction: column;
                text-align: center;
            }
            
            .logo {
                margin-bottom: 12px;
                justify-content: center;
            }
            
            .date-display {
                margin-top: 12px;
            }
            
            .agenda-meta {
                flex-direction: column;
                gap: 5px;
            }
            
            .chart-wrapper {
                height: 250px;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="header-pattern"></div>
        <div class="container header-content">
            <div class="logo">
                <img src="assets/logo_dinas.png" alt="Logo Dinas">
                <div class="logo-text">
                    <h1>DINAS PEKERJAAN UMUM</h1>
                    <p>Bina Marga Cipta Karya</p>
                </div>
            </div>
            <div class="date-display">
                <i class="fas fa-calendar-alt"></i> <?php echo date('d F Y'); ?>
            </div>
        </div>
    </header>
    
    <main class="container">
        <h1 class="dashboard-title">DASHBOARD AGENDA KEPALA DINAS</h1>
        
        <div class="stats-container">
            <div class="stat-card total">
                <div class="stat-value"><?php echo $total_agenda['total']; ?></div>
                <div class="stat-label">TOTAL AGENDA</div>
            </div>
            <div class="stat-card hadir">
                <div class="stat-value"><?php echo $total_agenda['hadir']; ?></div>
                <div class="stat-label">HADIR</div>
            </div>
            <div class="stat-card diwakilkan">
                <div class="stat-value"><?php echo $total_agenda['diwakilkan']; ?></div>
                <div class="stat-label">DIWAKILKAN</div>
            </div>
        </div>
        
        <div class="content-section">
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title"><i class="fas fa-calendar-day"></i> AGENDA HARI INI</h2>
                </div>
                <ul class="agenda-list">
                    <?php foreach ($agenda_hari_ini as $agenda): ?>
                    <li class="agenda-item">
                        <div class="agenda-info">
                            <div class="agenda-title"><?php echo htmlspecialchars($agenda['judul']); ?></div>
                            <div class="agenda-meta">
                                <span class="agenda-date"><i class="far fa-calendar"></i> <?php echo formatTanggal($agenda['tanggal']); ?></span>
                                <span class="agenda-time"><i class="far fa-clock"></i> <?php echo date('H:i', strtotime($agenda['waktu'])); ?></span>
                                <span class="agenda-location"><i class="fas fa-map-marker-alt"></i> <?php echo htmlspecialchars($agenda['lokasi']); ?></span>
                            </div>
                        </div>
                        <span class="agenda-status <?php echo 'status-' . str_replace('_', '-', $agenda['status_kehadiran']); ?>">
                            <?php 
                                if ($agenda['status_kehadiran'] == 'hadir') echo 'HADIR';
                                elseif ($agenda['status_kehadiran'] == 'diwakilkan') echo 'DIWAKILKAN';
                                else echo 'PENDING';
                            ?>
                        </span>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title"><i class="fas fa-calendar-check"></i> AGENDA YANG AKAN DATANG</h2>
                </div>
                <ul class="agenda-list">
                    <?php foreach ($agenda_besok as $agenda): ?>
                    <li class="agenda-item">
                        <div class="agenda-info">
                            <div class="agenda-title"><?php echo htmlspecialchars($agenda['judul']); ?></div>
                            <div class="agenda-meta">
                                <span class="agenda-date"><i class="far fa-calendar"></i> <?php echo formatTanggal($agenda['tanggal']); ?></span>
                                <span class="agenda-time"><i class="far fa-clock"></i> <?php echo date('H:i', strtotime($agenda['waktu'])); ?></span>
                                <span class="agenda-location"><i class="fas fa-map-marker-alt"></i> <?php echo htmlspecialchars($agenda['lokasi']); ?></span>
                            </div>
                        </div>
                        <span class="agenda-status <?php echo 'status-' . str_replace('_', '-', $agenda['status_kehadiran']); ?>">
                            <?php 
                                if ($agenda['status_kehadiran'] == 'hadir') echo 'HADIR';
                                elseif ($agenda['status_kehadiran'] == 'diwakilkan') echo 'DIWAKILKAN';
                                else echo 'PENDING';
                            ?>
                        </span>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
        
        <div class="chart-container">
            <div class="chart-header">
                <h2 class="chart-title"><i class="fas fa-chart-bar"></i> GRAFIK AGENDA BULANAN</h2>
                <select class="chart-selector" id="bulanSelector">
                    <option value="Maret">Maret 2023</option>
                    <option value="April">April 2023</option>
                </select>
            </div>
            <div class="chart-wrapper">
                <canvas id="agendaChart"></canvas>
            </div>
        </div>
    </main>
    
    <footer>
        <div class="header-pattern"></div>
        <div class="container">
            <p>&copy; <?php echo date('Y'); ?> Dinas Pekerjaan Umum Bina Marga Cipta Karya</p>
            <p>Sistem Informasi Agenda Kepala Dinas</p>
            <div class="footer-links">
                <a href="#"><i class="fas fa-info-circle"></i> Tentang</a>
                <a href="#"><i class="fas fa-envelope"></i> Kontak</a>
                <a href="#"><i class="fas fa-shield-alt"></i> Kebijakan Privasi</a>
            </div>
        </div>
    </footer>

    <script>
        // Data untuk chart
        const chartData = {
            'Maret': {
                labels: ['Minggu 1', 'Minggu 2', 'Minggu 3', 'Minggu 4'],
                data: [10, 5, 13, 14],
                backgroundColor: 'rgba(26, 86, 167, 0.7)',
                borderColor: 'rgba(26, 86, 167, 1)'
            },
            'April': {
                labels: ['Minggu 1', 'Minggu 2', 'Minggu 3', 'Minggu 4'],
                data: [8, 12, 9, 11],
                backgroundColor: 'rgba(255, 107, 0, 0.7)',
                borderColor: 'rgba(255, 107, 0, 1)'
            }
        };

        // Inisialisasi chart
        const ctx = document.getElementById('agendaChart').getContext('2d');
        let agendaChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: chartData.Maret.labels,
                datasets: [{
                    label: 'Jumlah Agenda',
                    data: chartData.Maret.data,
                    backgroundColor: chartData.Maret.backgroundColor,
                    borderColor: chartData.Maret.borderColor,
                    borderWidth: 1,
                    borderRadius: 5
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Jumlah Agenda',
                            font: {
                                weight: 'bold'
                            }
                        },
                        ticks: {
                            stepSize: 2
                        }
                    },
                    x: {
                        title: {
                            display: true,
                            text: 'Minggu',
                            font: {
                                weight: 'bold'
                            }
                        }
                    }
                },
                plugins: {
                    legend: {
                        display: false
                    },
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                return 'Agenda: ' + context.raw;
                            }
                        }
                    }
                }
            }
        });

        // Fungsi untuk mengubah chart berdasarkan bulan yang dipilih
        document.getElementById('bulanSelector').addEventListener('change', function() {
            const selectedMonth = this.value;
            
            agendaChart.data.labels = chartData[selectedMonth].labels;
            agendaChart.data.datasets[0].data = chartData[selectedMonth].data;
            agendaChart.data.datasets[0].backgroundColor = chartData[selectedMonth].backgroundColor;
            agendaChart.data.datasets[0].borderColor = chartData[selectedMonth].borderColor;
            
            agendaChart.update();
        });
    </script>
</body>
</html>