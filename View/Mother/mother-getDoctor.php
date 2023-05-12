<?php
header('Content-Type: application/json');
include '../../Config/dbConnection.php';

$doc_type = $_GET['doc_type'];
$result = [];

switch ($doc_type) {
    case 'vog':
    case 'ped':
        $query = "SELECT * FROM doctor_details";
        $res = mysqli_query($con, $query);
        while ($row = mysqli_fetch_assoc($res)) {
            $result[] = ['id' => $row['doc_id'], 'name' => $row['doc_name']];
        }
        break;
    case 'phm':
        $query = "SELECT * FROM phm_details";
        $res = mysqli_query($con, $query);
        while ($row = mysqli_fetch_assoc($res)) {
            $result[] = ['id' => $row['phm_id'], 'name' => $row['phm_name']];
        }
        break;
}

echo json_encode($result);
?>
