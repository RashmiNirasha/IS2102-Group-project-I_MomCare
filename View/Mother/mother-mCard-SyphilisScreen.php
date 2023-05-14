<?php 
session_start();
include "../../Assets/Includes/header_pages.php";
include '../../Config/dbConnection.php';
$mom_id = $_GET['mom_id'];

if (isset($_SESSION['email']) && isset($_SESSION['id'])) { ?>
<?php 
    include "../../Config/mother-mcardPage2.inc.php";
    include "../../Assets/Includes/sideNav-mother.php";    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Family History</title>
    <style><?php include "../../Assets/css/mother-card.css";?></style>

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
    <!-- <button class="goBackBtn" onclick="history.back()">Go back</button> -->
    <div class="mom-container">
        <div class="OneColumnSection"> <!--when a section has only one table, use this class-->
            <div class="MotherCardTableTitles"><h3>Syphilis screeningtem</h3></div>
            <div class="MotherGeneralDetails">
                <table class="MotherCardTables">
                    <tr>
                        <td>POA at blood sampling</td>
                        <td><?php echo $mom_POA_sample ?></td>
                    </tr>
                    <tr>
                        <td>Date of blood sampling</td>
                        <td><?php echo $mom_datesample ?></td>
                    </tr>
                    <tr>
                        <td>Date of result received</td>
                        <td><?php echo $mom_date_result ?></td>
                    </tr>
                    <tr>
                        <td>Result</td>
                        <td><?php echo $mom_result ?></td>
                    </tr>
                    <tr>
                        <td>If (R) date of referral</td>
                        <td><?php echo $mom_ref ?></td>
                    </tr>
                </table>
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
                <h2>Update Syphilis screeningtem</h2>
            </div>
            <div class="updatePopup-body">
                <form action="../../Config/mother-mcardPage1.inc.php?mom_id=$mom_id" method="POST">
                    <div class="updateFormTables">
                        <table>
                            <tr>
                                <td>POA at blood sampling</td>
                                <td><input type="text" name="mom_POA_sample" value="<?php echo $mom_POA_sample ?>"></td>
                            </tr>
                            <tr>
                                <td>Date of blood sampling</td>
                                <td><input type="date" name="mom_datesample" value="<?php echo $mom_datesample ?>"></td>
                            </tr>
                            <tr>
                                <td>Date of result received</td>
                                <td><input type="date" name="mom_date_result" value="<?php echo $mom_date_result ?>"></td>
                            </tr>
                            <tr>
                                <td>Result</td>
                                <td><input type="text" name="mom_result" value="<?php echo $mom_result ?>"></td>
                            </tr>
                            <tr>
                                <td>If (R) date of referral</td>
                                <td><input type="date" name="mom_ref" value="<?php echo $mom_ref ?>"></td>
                            </tr>
                        </table>
                    </div>
                    <input type="hidden" name="mom_id" value="<?php echo $mom_id ?>">
                    <div class="updateMcard_submit">
                        <button type="reset">Reset</button>
                        <button type="submit" name="Syphilis_submit">Update</button>
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