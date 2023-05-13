<?php
include 'dbConnection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $phm_id = $_POST['phm_id'];
    $child_id = $_POST['child_id'];
    $child_age = $_POST['age'];
    $date = $_POST['date'];
    $batch_no = $_POST['batch_no'];
    $record_type = $_POST['record_type'];

    $time = time();

    if ($record_type === 'vitaminA') {
        // Insert into child_cvitamin_view table
        $insertQuery = "INSERT INTO `child_cvitamin_view` (phm_id, child_id, age, date, batchno,time) VALUES ('$phm_id', '$child_id', '$child_age', '$date', '$batch_no','$time')";
    } elseif ($record_type === 'Worm') {
        // Insert into child_cworm_treatment table
        $insertQuery = "INSERT INTO `child_cworm_treatment` (phm_id, child_id, age, date, batchno) VALUES ('$phm_id', '$child_id', '$child_age', '$date', '$batch_no')";
    } else {
        // Invalid record type, handle the error as needed
        echo "Error inserting data: " . mysqli_error($con);
        header("Location: ../View/PHM/child-addnutrition.php?message=Child record not added successfully");
        exit();
    }

    $result = mysqli_query($con, $insertQuery);
    if ($result) {
        // Insertion successful, perform any desired actions
        header("Location: ../View/PHM/child-addnutrition.php?message=Child record added successfully");
    } else {
        // Insertion failed, handle the error appropriately
        echo "Error inserting data: " . mysqli_error($con);
    }
}

//delete function
if (isset($_GET['delete']) && !empty($_GET['delete'])) {
    $id = $_GET['delete'];

    $query = "DELETE FROM child_cvitamin_view WHERE id = '$id'";
    $result = mysqli_query($con, $query);

    // Check if the deletion was successful
    if ($result) {
        header("Location: ../View/PHM/child-addnutrition.php?message=Child record deleted successfully");
        exit();
    } else {
        // Deletion failed, redirect back to the child list page with an error message
        header("Location: ../View/PHM/child-addnutrition.php?error=Failed to delete child record");
        exit();
    }
}

?>
