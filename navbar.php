<?php
session_start();
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold d-flex align-items-center" href="#">
            <img src="asset/img/unnamed.jpg" alt="Logo Fitness Pro" class="logo me-2">
            FITNESS PRO
            <?php if (isset($_SESSION['nama_penghubung'])): ?>
                <span class="ms-2 text-warning fade-in" id="nama-pendaftar">
                    - Halo <?= htmlspecialchars($_SESSION['nama_penghubung']); ?>
                </span>
                <?php unset($_SESSION['nama_penghubung']); // hapus setelah ditampilkan ?>
            <?php endif; ?>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
            aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav ms-auto text-center">
                <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#program">Program</a></li>
                <li class="nav-item"><a class="nav-link" href="#fasilitas">Fasilitas</a></li>
                <li class="nav-item"><a class="nav-link" href="#jadwal">Jadwal</a></li>
                <li class="nav-item"><a class="nav-link" href="#tentang">Tentang</a></li>
                <li class="nav-item"><a class="nav-link" href="#pendaftaran">Pendaftaran</a></li>
            </ul>
        </div>
    </div>
</nav>

<style>
    .fade-in {
        opacity: 0;
        animation: fadeIn 1.5s ease forwards;
    }

    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(-5px); }
        to { opacity: 1; transform: translateY(0); }
    }
</style>
