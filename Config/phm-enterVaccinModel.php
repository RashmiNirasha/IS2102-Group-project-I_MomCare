<?php
include 'dbConnection.php';
// get the form data
$child_id = $_POST['child_id'];
$age = $_POST['age'];
$type_of_vaccine = $_POST['type_of_vaccine'];
$date = $_POST['date'];
$batch_no = $_POST['batch_no'];
$adverse_effects = $_POST['adverse_effects'];

// prepare the SQL query
$sql = "INSERT INTO `immunization_table`(`child_id`, `age`, `type_of_vaccine`, `date`, `batch_no`, `adverse_effects`)
        VALUES ('$child_id', '$age', '$type_of_vaccine', '$date', '$batch_no', '$adverse_effects')";

// execute the query
if (mysqli_query($con, $sql)) {
    echo "<script>alert('New record created successfully');</script>";
    header("Location: ../View/PHM/phm_vaccinationView.php?child_id=$child_id");
} else {
    echo "Error inserting record: " . mysqli_error($con);
}
mysqli_close($con);
?>
