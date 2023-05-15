<?php
session_start();
include 'dbConnection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["insert"])) {
    $phm_id = $_POST['phm_id'];
    $childId = $_POST['child_id'];
    $age = $_POST['age'];
    $noOfTeeth = $_POST['no_of_teeth'];
    $status = $_POST['status'];
    $date = $_POST['date'];

    if ($date > date("Y-m-d")) {
        echo "<script type='text/javascript'>alert('Date cannot be in the future'); window.location.href='../View/PHM/child-adddental.php?error=Date cannot be in the future';</script>";
        exit();
    }

    $insertQuery = "INSERT INTO `child_dental_report` (phm_id, child_id, age, date, no_of_teeth, status) VALUES ('$phm_id', '$childId', '$age', '$date', '$noOfTeeth', '$status')";

    $result = mysqli_query($con, $insertQuery);
    if ($result) {
        // Insertion successful, perform any desired actions
        header("Location: ../View/PHM/child-adddental.php?message=Child record added successfully");
    } else {
        // Insertion failed, handle the error appropriately
        echo "Error inserting data: " . mysqli_error($con);
    }
}

//update function 
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["update"])) {
    $id = $_POST['id'];
    $childId = $_POST['child_id'];
    $age = $_POST['age'];
    $noOfTeeth = $_POST['no_of_teeth'];
    $status = $_POST['status'];
    $date = $_POST['date'];

    if ($date > date("Y-m-d")) {
        echo "<script type='text/javascript'>alert('Date cannot be in the future'); window.location.href='../View/PHM/child-adddental.php?error=Date cannot be in the future';</script>";
        exit();
    }

    $sql = "UPDATE child_dental_report SET child_id = '$childId', age = '$age', date = '$date', no_of_teeth = '$noOfTeeth', status = '$status' WHERE id = '$id'";
    $result = mysqli_query($con, $sql);

    if ($result) {
        if($_SESSION_['user_role'] == 'phm')
            header("Location: ../View/PHM/child-adddental.php?message=Child record updated successfully");
        else
            header("Location: ../View/Pediatrician/child-adddental.php?message=Child record updated successfully");
        exit();
    } else {

        if($_SESSION_['user_role'] == 'phm')
            header("Location: ../View/PHM/child-adddental.php?error=Failed to update child records");
        else{
            header("Location: ../View/Pediatrician/child-adddental.php?error=Failed to update child records");
            exit();
        }
    }

}

//delete function
if (isset($_GET['delete']) && !empty($_GET['delete'])) {
    $child_id = $_GET['delete'];

    $query = "DELETE FROM child_dental_report WHERE id = '$child_id'";
    $result = mysqli_query($con, $query);

    // Check if the deletion was successful
    if ($result) {
        header("Location: ../View/PHM/child-adddental.php?message=Child record deleted successfully");
        exit();
    } else {
        // Deletion failed, redirect back to the child list page with an error message
        header("Location: ../View/PHM/child-adddental.php?error=Failed to delete child record");
        exit();
    }

    // Close the database connection
    mysqli_close($con);
}

?>
