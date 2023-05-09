<?php

include("../../Config/dbConnection.php");
// Escape user input to prevent SQL injection
$child_id = mysqli_real_escape_string($con, $_GET['child_id']);
$sql = "SELECT *
FROM child_immunization_table
JOIN child_details
ON child_immunization_table.child_id = child_details.child_id
WHERE child_immunization_table.child_id = '$child_id'";

$result = mysqli_query($con, $sql);
if($result){
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            $child_name = $row['child_name'];
            $child_birth_date = $row['birth_date'];
            $child_age = $row['child_age'];
            $mother_name = $row['mother_name'];
            $MOH_area = $row['MOH_area'];
            $PHM_area = $row['PHM_area'];
            $phm_id = $row['phm_id'];
        }
    }
}

$sql = "SELECT * FROM phm_details WHERE phm_id = '$phm_id'";
$result = mysqli_query($con, $sql);
if($result){
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            $phm_name = $row['phm_name'];
        }
    }
}

function fetch_data()  
{  
include("../../Config/dbConnection.php");
// Escape user input to prevent SQL injection
$child_id = mysqli_real_escape_string($con, $_GET['child_id']);
$sql = "SELECT *
FROM child_immunization_table
JOIN child_details
ON child_immunization_table.child_id = child_details.child_id
WHERE child_immunization_table.child_id = '$child_id'";

$result = mysqli_query($con, $sql);
$output = '';
$child_name = ''; // Declare variable to store child name
if ($result) {
    // Use mysqli_num_rows() function only if the query executed successfully
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            // Store child name in a variable
            $child_name = $row['child_name'];
            $child_birth_date = $row['birth_date'];
            $child_age = $row['child_age'];
            $mother_name = $row['mother_name'];
            $MOH_area = $row['MOH_area'];
            $PHM_area = $row['PHM_area'];
            
            $output .= '
            <tr>  
                <td>'.$row["age"].'</td>  
                <td>'.$row["type_of_vaccine"].'</td>  
                <td>'.$row["date"].'</td>  
                <td>'.$row["batch_no"].'</td>
                <td>'.$row["adverse_effects"].'</td>
               
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
    
function fetch_data2()  
{
    include("../../Config/dbConnection.php");

    // Escape user input to prevent SQL injection
    $child_id = mysqli_real_escape_string($con, $_GET['child_id']);
    $sql = "SELECT * FROM child_immunization_referrals WHERE child_id = '".$_GET["child_id"]."'";
    $result = mysqli_query($con, $sql);
    $output = '';
    
    if (!$result) {
        echo "Error executing query: " . mysqli_error($con);
    } else {
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                $output .= "<tr><td>".$row["referral_date"]."</td><td>".$row["referral_reason"]."</td><td>".$row["referral_place"]."</td><td colspan='2'>".$row["referral_notes"]."</td></tr>";
            }
        } else {
            $output = "<tr><td colspan='5'>No records found</td></tr>";
        }
    }
    mysqli_close($con);
    return $output;
}    

?>