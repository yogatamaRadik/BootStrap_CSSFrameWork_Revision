<section id="pendaftaran" class="bg-white text-center">
    <div class="container">
        <h2>Membership untuk Anda</h2>
        <p>Pilih paket yang paling sesuai untuk Anda!</p>

        <div class="row g-4 justify-content-center mt-4">
            <!-- Membership Non Trainer -->
            <?php
            include("koneksi.php");
            $sql = "SELECT paket_kelas, harga_paket, desc_1, desc_2  FROM fitnesspro_db.membership_fitnesspro";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '
                    <div class="col-md-4 col-sm-6">
                        <div class="card h-100 shadow border-0">
                            <div class="card-header bg-dark text-white fw-bold">'
                        . htmlspecialchars($row["paket_kelas"]) .
                        '</div>
                            <div class="card-body">
                                <h3 class="card-title">Rp ' . number_format($row["harga_paket"], 0, ',', '.') . '</h3>
                                <p class="text-muted">' . htmlspecialchars($row["desc_1"]) . '</p>
                                <ul class="list-unstyled mt-3 mb-4">
                                    <li>' . nl2br(htmlspecialchars($row["desc_2"])) . '</li>
                                </ul>
                                <a href="#kontak" class="btn btn-custom w-100">Pilih Paket</a>
                            </div>
                        </div>
                    </div>';
                }
            } else {
                echo "<p class='text-muted'>Belum ada paket yang tersedia.</p>";
            }
            $conn->close();
            ?>

        </div>
    </div>
</section>

<!-- PENDAFTARAN SECTION DENGAN TRAINER -->
<section id="pendaftaran_trainer" class="bg-white text-center">
    <div class="container">
        <h2>Membership + Trainer</h2>
        <p>Pilih paket yang paling sesuai dengan trainer yang siap membantu anda!</p>

        <div class="row g-4 justify-content-center mt-4">
            <!-- Paket Bulanan -->
            <?php
            include("koneksi.php");
            $sql = "SELECT paket_kelas2, harga_paket2, desc1_2, desc2_2  FROM fitnesspro_db.membershipwtrainer_fitnesspro";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '
                    <div class="col-md-4 col-sm-6">
                        <div class="card h-100 shadow border-0">
                            <div class="card-header bg-dark text-white fw-bold">'
                        . htmlspecialchars($row["paket_kelas2"]) .
                        '</div>
                            <div class="card-body">
                                <h3 class="card-title">Rp ' . number_format($row["harga_paket2"], 0, ',', '.') . '</h3>
                                <p class="text-muted">' . htmlspecialchars($row["desc1_2"]) . '</p>
                                <ul class="list-unstyled mt-3 mb-4">
                                    <li>' . nl2br(htmlspecialchars($row["desc2_2"])) . '</li>
                                </ul>
                                <a href="#kontak" class="btn btn-custom w-100">Pilih Paket</a>
                            </div>
                        </div>
                    </div>';
                }
            } else {
                echo "<p class='text-muted'>Belum ada paket yang tersedia.</p>";
            }
            $conn->close();
            ?>

        </div>
    </div>
</section>