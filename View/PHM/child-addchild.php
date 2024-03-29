<?php 
    session_start();
    if (isset($_SESSION['email']) && isset($_SESSION['user_id'])) { 
        include '../../Config/dbConnection.php';
        include "../../Assets/Includes/header_pages.php";
        include "../../Assets/Includes/sidenav2.php";
        $Phm_id = $_SESSION['user_id'];
?>

<!DOCTYPE html>
<html lang="en">
<Head>
  <link href="https://fonts.googleapis.com/css?family=Quicksand:400,700" rel="stylesheet">
  <style><?php include "../../Assets/css/style-child.css";?></style>
  <script src="../../Assets/js/functions.js"></script>

</Head>
<body>
    <div class="child-container">
        <h2>Child Records </h2>
        <div class="OneColumnSection">
            <div class="MotherCardTableTitles"><h3>Add New Child Profile</h3></div>
            <div class="MotherGeneralDetails">
        <form action="../../Config/child-addchildModel.php" method="POST">
        <table class="MotherCardTables">

        <?php
        if (isset($_GET['message'])) {
            echo "<tr><td colspan='2'><p class='error3'>" . $_GET['message'] . "</p></td></tr>";
        } elseif (isset($_GET['error'])) {
            echo "<tr><td colspan='2'><p class='error-message'>" . $_GET['error'] . "</p></td></tr>";
        }
        ?>
        <input type="hidden" name="phm_id" value="<?php echo $Phm_id; ?>">
        <tr>
            <td><label for="child_name">Child Name:</label></td>
            <td><input type="text" id="child_name" name="child_name" placeholder="Child Name" required></td>
        </tr>

            <tr>
                <td><label for="birth_date">Birth Date:</label></td>
                <td><input type="date" id="birth_date" name="birth_date" placeholder="Birth Date" required></td>
            </tr>
            <tr>
                <td><label for="child_gender">Child Gender:</label></td>
                <td>
                    <input type="radio" id="male" name="child_gender" value="M">
                    <label for="male">Male</label>
                    <input type="radio" id="female" name="child_gender" value="F">
                    <label for="female">Female</label>
                </td>
            </tr>
            <tr>
                <td><label for="mother_id">Mother ID:</label></td>
                <td><select id="mother_id" name="mother_id" required>
                        <option value="">Select a mother</option>
                        <?php
                        $ret = mysqli_query($con, "SELECT mom_id FROM `mother_details`");
                        while($row = mysqli_fetch_array($ret)) {
                        ?>
                        <option value="<?php echo htmlentities($row['mom_id']);?>">
                            <?php echo htmlentities($row['mom_id']);?>
                        </option>
                        <?php
                        }
                        ?>
                    </select></td>
            </tr>
            <tr>
                <td><label for="moh_area">MOH Area:</label></td>
                <td><input type="text" id="moh_area" name="moh_area" placeholder="MOH Area" required></td>
            </tr>
            <tr>
                <td><label for="phm_area">PHM Area:</label></td>
                <td><input type="text" id="phm_area" name="phm_area" placeholder="PHM Area" required></td>
            </tr>
            <tr>
                <td><label for="field_clinic">Name of the Field Clinic:</label></td>
                <td><input type="text" id="field_clinic" name="field_clinic" placeholder="Field Clinic Name" required></td>
            </tr>
            <tr>
                <td><label for="gn_division">Grama Niladhari Division:</label></td>
                <td><input type="text" id="gn_division" name="gn_division" placeholder="Grama Niladhari Division" required></td>
            </tr>
            <tr>
                <td><label for="hospital_clinic">Name of the Hospital Clinic:</label></td>
                <td><input type="text" id="hospital_clinic" name="hospital_clinic" placeholder="Hospital Clinic Name" required></td>
            </tr>
            <tr>
                <td><label for="consultant_obstetrician">Name of the Consultant Obstetrician:</label></td>
                <td><input type="text" id="consultant_obstetrician" name="consultant_obstetrician" placeholder="Consultant Obstetrician" required></td>
            </tr>
            <tr>
                <td><label for="risks_conditions">Identified Antenatal Risks Conditions and Mobilities:</label></td>
                <td><textarea id="risks_conditions" name="risks_conditions" placeholder="Enter identified risks conditions and mobilities" required></textarea></td>
            </tr>
            <tr>
                <td><label for="blood_group">Blood Group:</label></td>
                <td><input type="text" id="blood_group" name="blood_group" placeholder="Blood Group" required></td>
            </tr>
            <tr>
                <td><label for="allergies">Allergies:</label></td>
                <td><input type="text" id="allergies" name="allergies" placeholder="Allergies" required></td>
            </tr>
        </table>
        <input class='small-child-btn' type="submit" value="Submit" name="insert">
    </form>
</div>

        </div>
        <!-- section two  -->
        <div class="OneColumnSection">
            <div class="MotherCardTableTitles"><h3>List of Children</h3></div>
            <div class="MotherGeneralDetails">
                <table class="MotherCardTables">
                    <?php
                        $oneMonthAgo = date('Y-m-d', strtotime('-1 month'));
                        $ret = mysqli_query($con, "SELECT * FROM `child_details` WHERE phm_id = '$Phm_id'");
                        
                        if (mysqli_num_rows($ret) > 0) {
                            echo "<table class='MotherCardTables'>";
                            echo "<tr><th>Child ID</th><th>Child Name</th><th>Birth Date</th><th>Gender</th><th>View Child Card</th><th>View Development Index</th><th>Edit</th><th>Delete</th></tr>";
                            while ($row = mysqli_fetch_assoc($ret)) {
                                $child_id = $row["child_id"];
                                $child_name = $row["child_name"];
                                $birth_date = $row["birth_date"];
                                $child_gender = $row["child_gender"];
                                $registration_date = $row["registration_date"];
                        
                                $canDelete = (strtotime($registration_date) >= strtotime($oneMonthAgo));
                        
                                echo "<tr>
                                <td>" . $row["child_id"] . "</td>
                                <td>" . $row["child_name"] . "</td>
                                <td>" . $row["birth_date"] . "</td>
                                <td>" . $row["child_gender"] . "</td>
                                <td><a href='../Child/Child-fullChildCard.php?child_id=" . $row['child_id'] . "'><button class='small-child-btn'>view</button></a></td>
                                <td><a href='../Child/child-developmentView.php?child_id=" . $row['child_id'] . "'><button class='small-child-btn'>view</button></a></td>
                                <td><a href='javascript:void(0);' onclick=\"showEditForm('" . $row['child_id'] . "')\"><button class='small-child-btn'>edit</button></a></td>";
                        
                                if ($canDelete) {
                                    echo "<td><a href='../../Config/child-addchildModel.php?delete=" . $row['child_id'] . "' onclick=\"return confirm('Do you really want to delete this record?')\"><button class='small-child-btn'>delete</button></a></td>";
                                } else {
                                    echo "<td>Delete not allowed</td>";
                                }
                        
                                echo "</tr>";
                            }
                            echo "</table>";
                        
                           // Display the edit form separately
mysqli_data_seek($ret, 0); // Reset the result pointer
while ($row = mysqli_fetch_assoc($ret)) {
 
    echo "<div class='MotherGeneralDetails'>";
    echo "<table class='MotherCardTables' id='editForm_2" . $row['child_id'] . "' style='display:none;'>";
    echo "<form onsubmit=\"return confirm('Do you really want to edit?');\" method='POST' action='../../Config/child-addchildModel.php'>";
    echo "<input type='hidden' name='child_id' value='" . $row['child_id'] . "'>";
    echo "<tr>
            <td colspan='3'><label for='edit_child_name'>Child Name:</label></td>
            <td colspan='4'><input type='text' id='edit_child_name' name='edit_child_name' value='" . $row['child_name'] . "' required></td>
        </tr>
        <tr>
            <td colspan='3'><label for='edit_birth_date'>Birth Date:</label></td>
            <td colspan='4'><input type='date' id='edit_birth_date' name='edit_birth_date' value='" . $row['birth_date'] . "' required></td>
        </tr>
        <tr>
            <td colspan='3'><label for='edit_child_gender'>Gender:</label></td>
            <td colspan='4'>
                <input type='radio' id='edit_male' name='edit_child_gender' value='M' " . ($row['child_gender'] == 'M' ? 'checked' : '') . ">Male
                <input type='radio' id='edit_female' name='edit_child_gender' value='F' " . ($row['child_gender'] == 'F' ? 'checked' : '') . ">Female
            </td>
        </tr>
        <tr>
            <td colspan='3'><label for='edit_mother_id'>Mother ID:</label></td>
            <td colspan='4'><input type='text' id='edit_mother_id' name='edit_mother_id' value='" . $row['mom_id'] . "' required></td>
        </tr>
        <tr>
            <td colspan='3'><label for='edit_moh_area'>MOH Area:</label></td>
            <td colspan='4'><input type='text' id='edit_moh_area' name='edit_moh_area' value='" . $row['MOH_area'] . "' required></td>
        </tr>
        <tr>
            <td colspan='3'><label for='edit_phm_area'>PHM Area:</label></td>
            <td colspan='4'><input type='text' id='edit_phm_area' name='edit_phm_area' value='" . $row['PHM_area'] . "' required></td>
        </tr>
        <tr>
            <td colspan='3'><label for='edit_field_clinic'>Name of the Field Clinic:</label></td>
            <td colspan='4'><input type='text' id='edit_field_clinic' name='edit_field_clinic' value='" . $row['field_clinic'] . "' required></td>
        </tr>
        <tr>
            <td colspan='3'><label for='edit_gn_division'>Grama Niladhari Division:</label></td>
            <td colspan='4'><input type='text' id='edit_gn_division' name='edit_gn_division' value='" . $row['GN_division'] . "' required></td>
        </tr>
        <tr>
            <td colspan='3'><label for='edit_hospital_clinic'>Name of the Hospital Clinic:</label></td>
            <td colspan='4'><input type='text' id'edit_hospital_clinic' name='edit_hospital_clinic' value='" . $row['hospital_clinic'] . "' required></td>
            </tr>
            <tr>
                <td colspan='3'><label for='edit_consultant_obstetrician'>Name of the Consultant Obstetrician:</label></td>
                <td colspan='4'><input type='text' id='edit_consultant_obstetrician' name='edit_consultant_obstetrician' value='" . $row['consultant_obstetrician'] . "' required></td>
            </tr>
            <tr>
                <td colspan='3'><label for='edit_risks_conditions'>Identified Antenatal Risks Conditions and Mobilities:</label></td>
                <td colspan='4'><textarea id='edit_risks_conditions' name='edit_risks_conditions' required>" . $row['identified_antatal_risks'] . "</textarea></td>
            </tr>
            <tr>
                <td colspan='3'><label for='edit_blood_group'>Blood Group:</label></td>
                <td colspan='4'><input type='text' id='edit_blood_group' name='edit_blood_group' value='" . $row['blood_group'] . "' required></td>
            </tr>
            <tr>
                <td colspan='3'><label for='edit_allergies'>Allergies:</label></td>
                <td colspan='4'><input type='text' id='edit_allergies' name='edit_allergies' value='" . $row['allergies'] . "' required></td>
            </tr>
            <tr>
                <td colspan='3'><label for='edit_registration_date'>Registration Date:</label></td>
                <td colspan='4'><input type='date' id='edit_registration_date' name='edit_registration_date' value='" . $row['registration_date'] . "' required></td>
            </tr>
            <tr>
                <td colspan='7'><input class='small-child-btn' type='submit' value='Update' name='update'></td>
            </tr>";
        echo "</form>";
        echo "</table>";
        echo "</div>";
       
    }
} else {
    echo "No records found";
}
?>
                        
</table>
</div>
</div>

<?php } else {
   header("Location: ../../mainLogin.php");
    exit();
}
?>
