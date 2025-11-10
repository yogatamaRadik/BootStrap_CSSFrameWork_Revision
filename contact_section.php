<section id="kontak" class="bg-light text-center">
            <div class="container">
                <h2>Daftar Sekarang</h2>
                <p>Isi form di bawah ini dan tim kami akan segera menghubungi Anda.</p>

                <form class="row justify-content-center g-2" action="simpan_pendaftaran.php" method="post">
                    <div class="col-md-4">
                        <input type="text" class="form-control" placeholder="Nama Lengkap" required>
                    </div>
                    <div class="col-md-4">
                        <input type="tel" class="form-control" placeholder="No. Telp" pattern="[0-9+]{10,15}"
                            inputmode="numeric" required>
                    </div>
                    <div class="col-md-4">
                        <input type="email" class="form-control" placeholder="Email" required>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-custom w-100" type="submit">Kirim</button>
                    </div>
                </form>
            </div>
        </section>