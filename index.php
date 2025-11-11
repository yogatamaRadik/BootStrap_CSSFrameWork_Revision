<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>FitnessPro - GYM & Pusat Kebugaran</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="asset/css/LatihanBootstrap.css">
</head>

<body>
    <!-- NAVBAR -->
    <?php include("navbar.php"); ?>

    <!-- MAIN CONTENT -->
    <main>

        <!-- HERO SECTION -->
        <?php include("hero_section.php"); ?>

        <!-- PROGRAM SECTION -->
        <?php include("program_section.php"); ?>

        <!-- FASILITAS SECTION -->
        <?php include("fasilitas_section.php"); ?>

        <!-- JADWAL SECTION -->
        <?php include("jadwal_section.php"); ?>

        <!-- PENDAFTARAN SECTION -->
        <?php include("pendaftaran_section.php"); ?>

        <!-- Section Tentang -->
        <?php include("about_section.php"); ?>

        <!-- Chart Section -->
        <div class="mt-5 text-center">
            <h4 class="fw-bold mb-3">Perkembangan Jumlah Member FITNESS PRO</h4>
            <canvas id="memberChart" height="100"></canvas>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

        <canvas id="memberChart" width="400" height="200"></canvas>

        <script>
            fetch('get_member_data.php')
                .then(response => response.json())
                .then(chartData => {
                    const ctx = document.getElementById('memberChart').getContext('2d');

                    new Chart(ctx, {
                        type: 'line',
                        data: {
                            labels: chartData.tahun,  // gunakan 'tahun' sesuai data dari PHP
                            datasets: [{
                                label: 'Jumlah Member',
                                data: chartData.datamember, // gunakan 'datamember' sesuai data dari PHP
                                borderColor: 'rgb(75, 192, 192)',
                                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                                fill: true,
                                tension: 0.3,
                                pointRadius: 5
                            }]
                        },
                        options: {
                            plugins: {
                                legend: {
                                    display: true,
                                    labels: { color: '#333' }
                                },
                                title: {
                                    display: true,
                                    text: 'Grafik Pertumbuhan Member (2012 - 2024)',
                                    font: { size: 16 }
                                }
                            },
                            scales: {
                                y: {
                                    beginAtZero: true,
                                    ticks: { color: '#333' }
                                },
                                x: {
                                    ticks: { color: '#333' }
                                }
                            }
                        }
                    });
                })
                .catch(error => console.error('Gagal memuat data chart:', error));
        </script>

        <!-- KONTAK SECTION -->
        <?php include("contact_section.php"); ?>
    </main>

    <!-- FOOTER -->
    <footer class="bg-dark text-white text-center p-4">
        <div class="container">
            <p class="mb-0">&copy; 2025 | All Rights Reserved | by FITNESS PRO</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
</body>

</html>