<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Coba Cart</title>
</head>
<body>
    <div style="width: 800px; height: 400px;">
        <h1>Chart Agenda Internal</h1>
        <canvas id="chartAgendaInternalMingguan" ></canvas>
    </div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    function loadChartAgendaInternalMingguan() {
    $.ajax({
        url: '/api/chart-agenda-internal-mingguan',
        method: 'GET',
        success: function(response) {
        const mingguLabels = ['Minggu 1', 'Minggu 2', 'Minggu 3', 'Minggu 4'];
        const jumlah = [0, 0, 0, 0];

        response.forEach(item => {
            if (item.minggu >= 1 && item.minggu <= 4) {
            jumlah[item.minggu - 1] = item.total;
            }
        });

        const ctx = document.getElementById('chartAgendaInternalMingguan').getContext('2d');
        new Chart(ctx, {
            type: 'bar',
            data: {
            labels: mingguLabels,
            datasets: [{
                label: 'Agenda Mingguan',
                data: jumlah,
                backgroundColor: 'rgba(88,206,255,255)',
                borderColor: 'rgba(88,206,255,255)',
                borderWidth: 1
            }]
            },
            options: {
            responsive: true,
            scales: {
                y: {
    beginAtZero: true,
    max : 20, // Set max value to 100
    ticks: {
        stepSize: 5,
        callback: function(value) {
        return Number.isInteger(value) ? value : null; // Hilangkan angka desimal
        }
    },
    title: {
        display: true,
        text: 'Jumlah Agenda'
    }
    },
                x: {
                title: {
                    display: true,
                }
                }
            },
            plugins: {
                legend: {
                display: false
                }
            }
            }
        });
        },
        error: function(err) {
        console.error('Gagal memuat chart mingguan', err);
        }
    });
    }

    $(document).ready(function() {
    loadChartAgendaInternalMingguan();
    });
</script>

</body>
</html>