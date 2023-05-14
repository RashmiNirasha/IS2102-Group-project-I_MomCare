<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

ob_start();
// Connect to the database
include '../../Config/dbConnection.php';

// Prepare the query
$query = "SELECT DATE(app_date) as date, COUNT(*) as count FROM phm_appointments WHERE phm_id = '" . $_GET['phm_id'] . "' GROUP BY DATE(app_date)";

// Execute the query
$result = mysqli_query($con, $query);

// Creating an array
$events = array();

// creating a loop to fetch all the rows from the result variable to the array
while ($row = mysqli_fetch_assoc($result)) {
    $event = array(
        'app_title' => $row['count'],
        'app_date' => $row['date']
    );
    array_push($events, $event);
}

// Return the events as JSON
echo json_encode($events, JSON_PRETTY_PRINT);

// Close the database connection
mysqli_close($con);
?>
