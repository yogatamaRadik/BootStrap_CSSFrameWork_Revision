<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>FitnessPro - GYM & Pusat Kebugaran</title>

    <!-- Bootstrap & Fonts -->
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

        <!-- ABOUT SECTION -->
        <?php include("about_section.php"); ?>

        <!-- CHART SECTION -->
        <div class="mt-5 text-center">
            <h4 class="fw-bold mb-3">Perkembangan Jumlah Member FITNESS PRO</h4>
            <canvas id="memberChart" width="400" height="150"></canvas>
        </div>

        <!-- KONTAK SECTION -->
        <?php include("contact_section.php"); ?>
    </main>

    <!-- FOOTER -->
    <footer class="bg-dark text-white text-center p-4">
        <div class="container">
            <p class="mb-0">&copy; 2025 | All Rights Reserved | by FITNESS PRO</p>
        </div>
    </footer>

    <!-- SCRIPT -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        let memberChart; 

        function loadChartData() {
            fetch('get_member_data.php')
                .then(response => response.json())
                .then(chartData => {
                    const ctx = document.getElementById('memberChart').getContext('2d');

                    if (memberChart) {
                        memberChart.data.labels = chartData.tahun;
                        memberChart.data.datasets[0].data = chartData.datamember;
                        memberChart.update();
                    } else {
                        memberChart = new Chart(ctx, {
                            type: 'line',
                            data: {
                                labels: chartData.tahun,
                                datasets: [{
                                    label: 'Jumlah Member',
                                    data: chartData.datamember,
                                    borderColor: 'rgb(75, 192, 192)',
                                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                                    fill: true,
                                    tension: 0.3,
                                    pointRadius: 5
                                }]
                            },
                            options: {
                                plugins: {
                                    legend: { display: true },
                                    title: {
                                        display: true,
                                        text: 'Grafik Pertumbuhan Member (2012 - 2024)',
                                        font: { size: 16 }
                                    }
                                },
                                scales: {
                                    y: { beginAtZero: true },
                                    x: {}
                                }
                            }
                        });
                    }
                })
                .catch(error => console.error('Gagal memuat data chart:', error));
        }

        loadChartData();

        setInterval(loadChartData, 1000);
    </script>

    <script>
        window.history.scrollRestoration = "manual";
        window.scrollTo({ top: 0, behavior: "smooth" });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('show');
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.2 });

            document.querySelectorAll('.fade-in').forEach(el => observer.observe(el));
        });
    </script>

    <?php
    if (isset($_SESSION['nama_penghubung'])) {
        session_unset();
        session_destroy();
    }
    ?>
</body>

</html>
