<section id="program" class="bg-light py-5 fade-in">
    <div class="container text-center">
        <h2 class="fw-bold mb-3">Program FITNESS PRO</h2>
        <p class="text-muted">Kami menawarkan berbagai program untuk semua level kebugaran.</p>

        <div class="row g-4 align-items-stretch mt-4 justify-content-center">
            <?php
            include("koneksi.php");
            $sql = "SELECT nama_kelas, desc_kelas, gambar_kelas  FROM fitnesspro_db.program_fitnesspro";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $gambar_kelas = !empty($row["gambar_kelas"]) ? "asset/img/" . $row["gambar_kelas"] : "asset/img/default.jpg";

                    echo '
                    <div class="col-md-4 col-sm-6">
                        <div class="card h-100 shadow-sm border-0">
                            <img src="' . $gambar_kelas . '" class="card-img-top" alt="' . htmlspecialchars($row["nama_kelas"]) . '">
                            <div class="card-body">
                                <h5 class="card-title">' . htmlspecialchars($row["nama_kelas"]) . '</h5>
                                <p class="card-text">' . htmlspecialchars($row["desc_kelas"]) . '</p>
                            </div>
                        </div>
                    </div>';
                }
            } else {
                echo "<p class='text-muted'>Belum ada program yang terdaftar.</p>";
            }
            $conn->close();
            ?>
        </div>
    </div>
</section>