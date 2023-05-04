<?php

include "dbConnection.php";
$child_id = $_POST['child_id'];

// Get the values submitted from the form
$age = $_POST['age'];
$number_erupted_teeth = $_POST['number_erupted_teeth'];
$status = $_POST['status'];
$date = $_POST['date'];

// Prepare the SQL statement
$stmt = mysqli_prepare($con, "INSERT INTO `child_dental_report` (`child_id`, `age`, `no_of_teeth`, `status`, `date`) VALUES (?, ?, ?, ?, ?)");

// Bind the parameters to the statement
mysqli_stmt_bind_param($stmt, "siiss", $child_id, $age, $number_erupted_teeth, $status, $date);

// Execute the statement
if (mysqli_stmt_execute($stmt)) {
    // Define JavaScript code for the popup message
    $js_code = "<script>alert('Child information has been successfully inserted into the database.');</script>";
    
    // Echo the JavaScript code and redirect to the add child records page
    echo $js_code;
    header("Location: ../View/PHM/child/phm-addChildRecords.php");
  } else {
    echo "Error inserting child information: " . mysqli_error($con);
  }
  {
    // Error
    echo "Error adding dental report: " . mysqli_stmt_error($stmt);
}

// Close the statement and connection
mysqli_stmt_close($stmt);
mysqli_close($con);
?>
