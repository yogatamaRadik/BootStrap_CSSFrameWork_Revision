<section id="kontak" class="bg-light text-center fade-in">
            <div class="container">
                <h2>Daftar Sekarang</h2>
                <p>Isi form di bawah ini dan tim kami akan segera menghubungi Anda.</p>

                <form class="row justify-content-center g-2" action="simpan_pendaftaran.php" method="POST">
                    <div class="col-md-4">
                        <input type="text" id = "nama" name = "nama_penghubung" class="form-control" placeholder="Nama Lengkap" required>
                    </div>
                    <div class="col-md-4">
                        <input type="tel" id = "notelp" name = "notelp_penghubung" class="form-control" placeholder="No. Telp" pattern="[0-9+]{10,15}"
                            inputmode="numeric" required>
                    </div>
                    <div class="col-md-4">
                        <input type="email" id = "email" name = "email_penghubung" class="form-control" placeholder="Email" required>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-custom w-100" type="submit">Kirim</button>
                    </div>
                </form>
            </div>
        </section>