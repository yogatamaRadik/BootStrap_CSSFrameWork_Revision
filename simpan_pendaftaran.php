<?php
include 'koneksi.php';

$nama = $_POST['nama'];
$telp = $_POST['telp'];
$email = $_POST['email'];

$sql = "INSERT INTO pendaftaran (nama, telp, email) VALUES ('$nama', '$telp', '$email')";
if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Data berhasil dikirim!'); window.location='index.php#kontak';</script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
