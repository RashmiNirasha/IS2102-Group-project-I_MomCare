

<?php
function insertChildInfo($child_id, $child_name, $child_gender, $phm_id, $doc_id, $guardian_id, $mom_email, $mom_id, $date_of_birth)
{
    include '../../Config/dbConnection.php';
    // Prepare SQL query with placeholders for values
    $sql = "INSERT INTO child_details (child_id, child_name, child_gender, phm_id, doc_id, guardian_id, mom_email, mom_id, date_of_birth)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

    // Prepare and bind the statement
    $stmt = mysqli_prepare($con, $sql);
    mysqli_stmt_bind_param($stmt, "issssssis", $child_id, $child_name, $child_gender, $phm_id, $doc_id, $guardian_id, $mom_email, $mom_id, $date_of_birth);

    // Execute the statement
    $result = mysqli_stmt_execute($stmt);

    // Check for insertion success
    if ($result) {
        echo "Child information has been successfully inserted into the database.";
    } else {
        echo "Error inserting child information: " . mysqli_error($con);
    }

    // Close statement and connection
    mysqli_stmt_close($stmt);
    mysqli_close($con);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form field values
    $child_id = $_POST['child_id'];
    $child_name = $_POST['child_name'];
    $child_gender = $_POST['child_gender'];
    $phm_id = $_POST['phm_id'];
    $doc_id = $_POST['doc_id'];
    $guardian_id = $_POST['guardian_id'];
    $mom_email = $_POST['mom_email'];
    $mom_id = $_POST['mom_id'];
    $date_of_birth = $_POST['date_of_birth'];

    // Call the insertChildInfo function with form field values
    insertChildInfo($child_id, $child_name, $child_gender, $phm_id, $doc_id, $guardian_id, $mom_email, $mom_id, $date_of_birth);}

?>
<style><?php include 'style.css'; ?></style>
<html>  
<section id="add-child-info" class="main-content"> 
    <div class="child-details-section">

        <form id="child-details" method="POST">
            <div class="child-details-upper">
                <h3>Child Information</h3>
                <div class="child-details-items-left">
                    <p><label for="child_id">Child ID</label></p>
                    <input type="text" id="child_id" name="child_id" required>
                </div>

                <div class="child-details-items-left">
                    <p><label for="child_name">Child Name</label></p>
                    <input type="text" id="child_name" name="child_name" required>
                </div>
                <div class="child-details-items-left">
                    <p><label for="child_gender">Child Gender</label></p>
                    <input type="text" id="child_gender" name="child_gender" required>
                </div>
                <div class="user-profile-items-left">
                    <p><label for="phm_id">PHM ID</label></p>
                    <input type="text" id="phm_id" name="phm_id" required>
                </div>
                <div class="user-profile-items-left">
                    <p><label for="doc_id">Doc ID</label></p>
                    <input type="text" id="doc_id" name="doc_id" required>
                </div>
                <div class="user-profile-items-right">
                    <p><label for="guardian_id">Guardian ID</label></p>
                    <input type="text" id="guardian_id" name="guardian_id" required>
                </div>
                <div class="user-profile-items-right">
                    <p><label for="mom_email">Mom Email</label></p>
                    <input type="email" id="mom_email" name="mom_email" required>
                </div>
                <div class="user-profile-items-right">
                    <p><label for="mom_id">Mom ID</label></p>
                    <input type="text" id="mom_id" name="mom_id" required>
                </div>
                <div class="user-profile-items-right">
                    <p><label for="date_of_birth">Date of Birth</label></p>
                    <input type="date" id="date_of_birth" name="date_of_birth" required>
                </div>
                <div>
                    <input type="submit" value="Submit">
                </div>
            </div>
        </form>
    </div>
</section>

</html>