<?php

//connecting to the database
 require_once 'dbConnection.php';
    
// Define today's date
$today = date('Y-m-d');
// Define yesterday's date
$yesterday = date('Y-m-d', strtotime("-1 days"));
// Define the start and end dates of the past month
$start_date = date('Y-m-d', strtotime("-1 month"));
$end_date = date('Y-m-d');

// Create the SQL query
$sql1 = "SELECT COUNT(user_id) AS user_count1 FROM user_tbl WHERE DATE(created_at) = '$today'";
$sql2 = "SELECT COUNT(user_id) AS user_count2 FROM user_tbl WHERE DATE(created_at) = '$yesterday'";
$sql3 = "SELECT COUNT(user_id) AS user_count3 FROM user_tbl WHERE created_at BETWEEN '$start_date' AND '$end_date'";

// Execute the query
$result1 = mysqli_query($con, $sql1);
$result2 = mysqli_query($con, $sql2);
$result3 = mysqli_query($con, $sql3);

// Check if the query was successful
if ($result1 && $result2 && $result3) {
    // Fetch the result
    $row1 = mysqli_fetch_assoc($result1);
    $row2= mysqli_fetch_assoc($result2);
    $row3 = mysqli_fetch_assoc($result3);

    // Get the total number of users
    $today_users = $row1['user_count1'];
    $yesterday_users = $row2['user_count2'];
    $pastmonth_users = $row3['user_count3'];
    

} else {
    echo "Error: " . mysqli_error($con);
}

 ?>
