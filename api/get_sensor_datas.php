<?php 
    include '../config.php';

    $parameter = $_GET['parameter'];

    $sql = "SELECT time, value FROM sensor_datas WHERE parameter = '$parameter' ORDER BY time DESC";
    $result = mysqli_query($conn, $sql);

    $rows = ["data" => []];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows["data"][] = [
            $row['time'],
            (double) $row['value'],
        ];
    }

    header('Content-Type: application/json; charset=utf-8');

    echo json_encode($rows, true);
?>