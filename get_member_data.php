<?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "fitnesspro_db";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Koneksi gagal: " . $conn->connect_error);
        }

        $sql = "SELECT tahun, datamember FROM fitnesspro_db.datachartmember_fitnesspro ORDER BY tahun ASC";
        $result = $conn->query($sql);

        $labels = [];
        $data = [];

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $labels[] = $row['tahun'];
                $data[] = $row['datamember'];
            }
        }

        echo json_encode(['tahun' => $labels, 'datamember' => $data]);
        $conn->close();
        ?>