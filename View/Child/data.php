<?php
header('Content-Type: application/json');

include("../../Config/dbConnection.php");

$sqlQuery = "SELECT student_id,student_name,marks FROM tbl_marks ORDER BY student_id";

$result = mysqli_query($con,$sqlQuery);

$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

mysqli_close($con);

echo json_encode($data);
?>