<?php
session_start();
include("koneksi.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nama  = $conn->real_escape_string(trim($_POST['nama_penghubung']));
    $telp  = $conn->real_escape_string(trim($_POST['notelp_penghubung']));
    $email = $conn->real_escape_string(trim($_POST['email_penghubung']));

    $sql = "INSERT INTO inputdatakontak (nama_penghubung, notelp_penghubung, email_penghubung) 
            VALUES ('$nama', '$telp', '$email')";
    
    if ($conn->query($sql) === TRUE) {
        $_SESSION['nama_penghubung'] = $nama;
    } else {
        echo "Terjadi kesalahan: " . $conn->error;
    }

    $conn->close();

    header("Location: index.php");
    exit;
}
?>
