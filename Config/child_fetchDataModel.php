<?php

function fetch_data()  
{  
include("../../Config/dbConnection.php");
// Escape user input to prevent SQL injection
$child_id = mysqli_real_escape_string($con, $_GET['child_id']);
$sql = "SELECT * FROM child_immunization_table WHERE child_id = '$child_id'";
$result = mysqli_query($con, $sql);
$output = '';
$child_name = ''; // Declare variable to store child name
if ($result) {
    // Use mysqli_num_rows() function only if the query executed successfully
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $output .= '
            <tr>  
                <td>'.$row["age"].'</td>  
                <td>'.$row["type_of_vaccine"].'</td>  
                <td>'.$row["date"].'</td>  
                <td>'.$row["batch_no"].'</td>
                <td>'.$row["adverse_effects"].'</td>
                <td>'.$row["official_name"].'</td>
            </tr>';  
        }
    } else {
        $output = '<tr><td colspan="6">No records found</td></tr>';
    }
} else {
    // Display error message if query fails
    $output = '<tr><td colspan="6">Error executing query: ' . mysqli_error($con) . '</td></tr>';
}
mysqli_close($con);
return $output; 
    }
    



?>