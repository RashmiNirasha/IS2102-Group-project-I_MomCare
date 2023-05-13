<?php
// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve the updated values from the request
    $updatedMotherName = $_POST["mother_name"];
    // Add code to retrieve and update other fields as needed

    // Perform the database update
    $updateQuery = "UPDATE general_details_table SET mother_name = '$updatedMotherName'";
    // Add code to update other fields in the query as needed

    // Execute the update query
    $result = mysqli_query($con, $updateQuery);

    if ($result) {
        // Update successful
        echo "Update successful";
    } else {
        // Update failed
        echo "Error updating data: " . mysqli_error($con);
    }
} else {
    // Invalid request method
    echo "Invalid request method";
}
?>
