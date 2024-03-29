<?php
include 'dbConnection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $phm_id = $_POST['phm_id'];
    $child_id = $_POST['child_id'];
    $child_age = $_POST['age'];
    $date = $_POST['date'];
    $batch_no = $_POST['batch_no'];
    $vaccine = $_POST['vaccine'];
    $adverse_effects= $_POST['adverse_effects'];

    if ($date > date("Y-m-d")) {
        echo "<script type='text/javascript'>alert('Date cannot be in the future'); window.location.href='../View/PHM/child-addimmunization.php?error=Date cannot be in the future';</script>";
        exit();
    }
  
    $insertQuery = "INSERT INTO `child_immunization_table` (phm_id, child_id, age, date, batch_no, type_of_vaccine, adverse_effects) 
    VALUES ('$phm_id', '$child_id', '$child_age', '$date', '$batch_no', '$vaccine', '$adverse_effects')";

    $result = mysqli_query($con, $insertQuery);
    if ($result) {
        // Insertion successful, perform any desired actions
        header("Location: ../View/PHM/child-addimmunization.php?message=Vaccination record added successfully");
    } else {
        // Insertion failed, handle the error appropriately
        echo "Error inserting data: " . mysqli_error($con);
    }
}

//update function
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update'])) {
    $id = $_POST['id'];
    $age = $_POST['age'];
    $type_of_vaccine = $_POST['vaccine'];
    $date = $_POST['date'];
    $batch_no = $_POST['batch_no'];
    $adverse_effects = $_POST['adverse'];

    if ($date > date("Y-m-d")) {
        echo "<script type='text/javascript'>alert('Date cannot be in the future'); window.location.href='../View/PHM/child-addimmunization.php?error=Date cannot be in the future';</script>";
        exit();
    }

    // Prepare the update query
    $query = "UPDATE `child_immunization_table` SET `age`='$age', `type_of_vaccine`='$type_of_vaccine', `date`='$date', `batch_no`='$batch_no', `adverse_effects`='$adverse_effects' WHERE `id`='$id'";
    $result = mysqli_query($con, $query);
    if ($result) {
        // Redirect back to the child profile page with a success message
        header("Location: ../View/PHM/child-addimmunization.php?message=Vaccination record updated successfully");
        exit();
    } else {
        // Redirect back to the child profile page with an error message
        header("Location: ../View/PHM/child-addimmunization.php?error=Failed to update vaccination records");
        exit();
    }

}

//delete function
if (isset($_GET['delete']) && !empty($_GET['delete'])) {
    $id = $_GET['delete'];

    $query = "DELETE FROM child_immunization_table WHERE id = '$id'";
    $result = mysqli_query($con, $query);

    // Check if the deletion was successful
    if ($result) {
        header("Location: ../View/PHM/child-addimmunization.php?message=Vaccination record deleted successfully");
        exit();
    } else {
        // Deletion failed, redirect back to the child list page with an error message
        header("Location: ../View/PHM/child-addimmunization.php?error=Failed to delete vaccination record");
        exit();
    }
}

?>
