CREATE DATABASE IF NOT EXISTS fitnesspro;
USE fitnesspro;

-- Tabel program
CREATE TABLE programs (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nama_program VARCHAR(100),
  deskripsi TEXT,
  gambar VARCHAR(255)
);

INSERT INTO programs (nama_program, deskripsi, gambar) VALUES
('Kelas Kardio', 'Tingkatkan daya tahan jantung dan bakar kalori dengan kelas high-intensity kami.', 'pexels-tima-miroshnichenko-6390240.jpg'),
('Weight Lifting', 'Bentuk otot dan tambah kekuatan Anda di area angkat beban kami yang lengkap.', 'pexels-leonmart-1552106.jpg'),
('Yoga', 'Temukan ketenangan dan tingkatkan fleksibilitas tubuh Anda di kelas yoga kami.', 'pexels-olly-917732.jpg');

-- Tabel pendaftaran
CREATE TABLE pendaftaran (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nama VARCHAR(100),
  telp VARCHAR(20),
  email VARCHAR(100),
  waktu_daftar TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
