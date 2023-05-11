<?php
include '../../Config/dbConnection.php';

if (isset($_GET['delete']) && !empty($_GET['delete'])) {
    $child_id = $_GET['delete'];

    $query = "DELETE FROM child_details WHERE child_id = '$child_id'";
    $result = mysqli_query($con, $query);

    // Check if the deletion was successful
    if ($result) {

        header("Location: child-addchild.php?message=Child record deleted successfully");
        exit();
    } else {
        // Deletion failed, redirect back to the child list page with an error message
        header("Location: child-addchild.php?error=Failed to delete child record");
        exit();
    }

    // Close the database connection
    mysqli_close($con);
}
?>
