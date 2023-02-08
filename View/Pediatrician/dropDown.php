<?php

include "../../Config/dbConnection.php";

if (isset($_POST["submit"])) {
    $Child_id = "C103";
    $selected_value = $_POST["dropdown_name"];
    $sql = "UPDATE child_details SET mom_id = '$selected_value' WHERE child_id = '$Child_id'";

    if (mysqli_query($con, $sql)) {
        echo "Value inserted successfully into target_table";
    } else {
        echo "Error inserting value: " . mysqli_error($con);
    }
}

$sql = "SELECT mom_id FROM mother_details";
$result = mysqli_query($con, $sql);

echo "<form action='' method='post'>";
echo "<label for='dropdown_name'>Select a mom_id:</label>";
echo "<select name='dropdown_name'>";
while ($row = mysqli_fetch_array($result)) {
    echo "<option value='" . $row['mom_id'] . "'>" . $row['mom_id'] . "</option>";
}
echo "</select>";
echo "<input type='submit' name='submit' value='Submit'>";
echo "</form>";

mysqli_close($con);
?>