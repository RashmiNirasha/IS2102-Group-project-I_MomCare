<?php
session_start();
include '../../Config/dbConnection.php';
include "../../Assets/Includes/header_pages.php"; 
?>
<!DOCTYPE html>
<html lang="en">    
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style><?php include "../../Assets/Css/style-common.css" ?></style>    </head>
    <body>
    <div class="main-mother">
    <div class="top">
            <button class="back-btn" onclick="window.location.href = 'pediatrician-dashboardView.php';">Back</button>
        </div>
        <div class="mom-filter">
        <h1>List of Children</h1>
        <div class="filter">
            <form action="" method="POST">
                <input type="text" name="search" placeholder="Search by child name">
                <button type="submit" name="submit-search">Search</button>
            </form>
        </div>
        
<div class="common_list_content">
<?php
$sql = "SELECT child_details.child_id, mother_details.*, child_details.*
FROM child_details 
INNER JOIN mother_details ON child_details.mom_id = mother_details.mom_id";

if (isset($_POST['submit-search'])) {
    // Get the search query
    $search = mysqli_real_escape_string($con, $_POST['search']);

    // Write the SQL query to search for children matching the search query
    $sql = "SELECT child_details.child_id, mother_details.*, child_details.*
    FROM child_details 
    INNER JOIN mother_details ON child_details.mom_id = mother_details.mom_id
    WHERE child_details.child_name LIKE '%$search%' or child_details.child_id LIKE '%$search%'";
}
// Execute the query
$result = mysqli_query($con, $sql);

// Check if the query returned any results
if (mysqli_num_rows($result) > 0) {
    // Display the results in a table
    echo "<table>
    <tr>
            <th>Child Id</th>
            <th>Child name</th>
            <th>Child gender</th>
            <th>Phm Id</th>
            <th>Doctor Id</th>
            <th>Mother Id</th>
            <th>Mother name</th>
            <th>View</th>
        </tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        $mothername= $row['mom_fname'] . " " . $row['mom_lname'];
        echo "
        <tr>
          <td>" . $row['child_id'] ." </td>
          <td>" . $row['child_name'] . "</td>
          <td>" . $row['child_gender'] . "</td>
          <td>" . $row['phm_id'] . "</td>
          <td>" . $row['doc_id'] . "</td>
          <td>" . $row['mom_id'] . "</td>
          <td> $mothername </td>
          <td>
            <button class = 'viewBtn' name='viewChildCard' onclick='window.location.href=\"../Child/childCardPage1.php?child_id=".$row['child_id']."\"'>View</button>
          </td>
        </tr>";
    }
    echo "</table>";
} else {
    // If no results were found, display a message
    echo "No results found for '$search'";
}

echo mysqli_error($con);
?>
    </div>
       
    </body>