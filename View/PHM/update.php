<?php
// Assuming you have established a database connection using $con
include '../../Config/dbconnection.php';
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $child_id = $_POST['child_id'];
    $age = $_POST['age'];
    $date = $_POST['date'];
    $batchno = $_POST['batchno'];

    if ($date > date("Y-m-d")) {
        echo "<script type='text/javascript'>alert('Date cannot be in the future'); window.location.href='child-addnutrition.php?error=Date cannot be in the future';</script>";
        exit();
    }

    // Prepare the update query
    $query = "UPDATE `child_cvitamin_view` SET `age`='$age', `date`='$date', `batchno`='$batchno' WHERE `id`='$id' AND `child_id`='$child_id'";

    // Execute the update query
    $result = mysqli_query($con, $query);

    if ($result) {
        // Update successful
        header("Location: child-addnutrition.php?message=Child record updated successfully");
        echo "Record updated successfully.";
    } else {
        // Update failed
        echo "Error updating record: " . mysqli_error($con);
    }
}

mysqli_close($con);
?>
