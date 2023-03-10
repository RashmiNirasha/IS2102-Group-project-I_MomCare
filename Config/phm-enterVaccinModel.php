<?php
include 'dbConnection.php';

// get the form data
$child_id = $_POST['child_id'];
$type_of_vaccine = $_POST['type_of_vaccine'];
$date = $_POST['date'];
$batch_no = $_POST['batch_no'];
$adverse_effects = $_POST['adverse_effects'];
$ofiicial_name = $_POST['official_name'];

$sql="SELECT * FROM child_details WHERE child_id = '$_POST[child_id]'";
$result = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($result)) {
    $dateOfBirth = $row['date_of_birth'];
    $today = $_POST['date'];
    $formatted_age = date_diff(date_create($dateOfBirth), date_create($today));
    $years = $formatted_age->y;
    $months = $formatted_age->m;
    $days = $formatted_age->d;

    if($months == 0 && $days == 0){
        $age = $years." years";
    } elseif($days == 0) {
        $age = $years." years ".$months." months";
    } else {
        $age = $years." years ".$months." months ".$days." days";
    }
}

// prepare the SQL query
$sql = "INSERT INTO `immunization_table`(`child_id`, `age`, `type_of_vaccine`, `date`, `batch_no`, `adverse_effects` , `official_name`)
        VALUES ('$child_id', '$age', '$type_of_vaccine', '$date', '$batch_no', '$adverse_effects','$ofiicial_name')";

// execute the query
if (mysqli_query($con, $sql)) {
    echo "<script>alert('New record created successfully');</script>";
    header("Location: ../View/PHM/phm_vaccinationView.php?child_id=$child_id");
} else {
    echo "Error inserting record: " . mysqli_error($con);
}
mysqli_close($con);
?>
