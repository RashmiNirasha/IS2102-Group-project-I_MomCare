<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

ob_start();
// Connect to the database
include '../../Config/dbConnection.php';

// Prepare the query
$query = "SELECT DATE(start) as date, COUNT(*) as count FROM mom_appointments WHERE mom_id = '" . $_GET['mom_id'] . "' GROUP BY DATE(start)";

// Execute the query
$result = mysqli_query($con, $query);

// Creating an array
$events = array();

// creating a loop to fetch all the rows from the result variable to the array
while ($row = mysqli_fetch_assoc($result)) {
    $event = array(
        'title' => $row['count'],
        'start' => $row['date']
    );
    array_push($events, $event);
}

// Return the events as JSON
echo json_encode($events, JSON_PRETTY_PRINT);

// Close the database connection
mysqli_close($con);
?>
