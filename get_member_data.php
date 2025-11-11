<?php
        include("koneksi.php");
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