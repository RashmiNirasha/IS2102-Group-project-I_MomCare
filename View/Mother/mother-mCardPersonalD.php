<?php 
session_start();
include "../../Assets/Includes/header_pages.php";
include '../../Config/dbConnection.php';
$mom_id = $_GET['mom_id'];

if (isset($_SESSION['email']) && isset($_SESSION['id'])) { ?>
<?php 
    include "../../Config/mother-mcardPage1.inc.php";
    include "../../Assets/Includes/sideNav-mother.php";    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Information</title>

    <script>
        function updateMcardTable() {
            var popup = document.getElementById("updateMcardTable-popup");
            popup.style.display = "block";
        }
        function closePopup() {
            var popup = document.getElementById("updateMcardTable-popup");
            popup.style.display = "none";
        }
    </script>
</head>
<body>
    <div class="mom-container">
        <div class="TwoColumnSection"> <!--when a section have two tables, use this class-->
            <div class="TwoColumnSec1">
                <div class="MotherCardTableTitles">
                    <h3>Personal Information</h3>
                </div>
                <div class="PersonalInformation">
                    <table class="MotherCardTables">
                        <tr>
                            <td class="emptyTableCell"></td>
                            <td>Wife</td>
                            <td>Husband</td>
                        </tr>
                        <tr>
                            <td>Age:</td>
                            <td><?php echo $mom_age ?></td>
                            <td><?php echo $dad_age ?></td>
                        </tr>
                        <tr>
                            <td>Highest level of education:</td>
                            <td><?php echo $mom_edu ?></td>
                            <td><?php echo $dad_edu ?></td>
                        </tr>
                        <tr>
                            <td>Occupation</td>
                            <td><?php echo $mom_occupation ?></td>
                            <td><?php echo $dad_occupation ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="updateMcardTable">
            <button onclick="updateMcardTable()">Update</button>
        </div>
    </div>
    <div class="updateMcardTable-popup" id="updateMcardTable-popup">
        <div class="updatePopup-content">
            <div class="updatePopup-header">
                <span class="close" onclick="closePopup()">&times;</span>
                <h2>Update Personal Information</h2>
            </div>
            <div class="updatePopup-body">
                <form action="../../Config/mother-mcardPage1.inc.php?mom_id=$mom_id" method="POST">
                    <div class="updateFormTables">
                        <table class="updateFormTable">
                            <tr>
                                <td class="emptyTableCell"></td>
                                <td>Wife</td>
                                <td>Husband</td>
                            </tr>
                            <tr>
                                <td>Age:</td>
                                <td><input type="text" name="mom_age" value="<?php echo $mom_age ?>" readonly ></td>
                                <td><input type="text" name="dad_age" value="<?php echo $dad_age ?>"></td>
                            </tr>
                            <tr>
                                <td>Highest level of education:</td>
                                <td><input type="text" name="mom_edu" value="<?php echo $mom_edu ?>"></td>
                                <td><input type="text" name="dad_edu" value="<?php echo $dad_edu ?>"></td>
                            </tr>
                            <tr>
                                <td>Occupation</td>
                                <td><input type="text" name="mom_occupation" value="<?php echo $mom_occupation ?>"></td>
                                <td><input type="text" name="dad_occupation" value="<?php echo $dad_occupation ?>"></td>
                            </tr>
                        </table>
                    </div>
                    <input type="hidden" name="mom_id" value="<?php echo $mom_id ?>">
                    <div class="updateMcard_submit">
                        <button type="reset">Reset</button>
                        <button type="submit" name="personalD_submit">Update</button>
                    </div>
                </form>
            </div>      
        </div>
    </div>
</body>
</html>

<?php
 } else {
    header("Location: ../../mainLogin.php");
     exit();
}?>