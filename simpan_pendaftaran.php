<?php
    include("koneksi.php");

    $nama = $_POST['nama_penghubung'];
    $telp = $_POST['notelp_penghubung'];
    $email = $_POST['email_penghubung'];

    $sql = "INSERT INTO inputdatakontak (nama_penghubung, notelp_penghubung, email_penghubung) VALUES ('$nama', '$telp', '$email')";
    $result = $conn->query($sql);

    $conn->close();

    header('location:index.php');
?>