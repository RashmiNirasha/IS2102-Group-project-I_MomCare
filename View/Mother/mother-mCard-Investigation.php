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
            <div class="MotherCardTableTitles"><h3>Breast examination</h3></div>
            <div class="MotherGeneralDetails">
                <table class="MotherCardTables">
                    <tr>
                        <td></td>
                        <td>POA</td>
                        <td>Result</td>
                    </tr>
                    <tr>
                        <td>Blood Sugar</td>
                        <td><?php echo $mom_blood_sugar ?></td>
                        <td><?php echo $mom_blood_sugarr ?></td>
                    </tr>
                    <tr>
                        <td>Hemoglobin</td>
                        <td><?php echo $mom_blood_hb ?></td>
                        <td><?php echo $mom_blood_hbr ?></td>
                    </tr>
                    <tr>
                        <td>Other Investigation</td>
                        <td colspan="2"><?php echo $mom_other ?></td>
                    </tr>
                    <tr>
                        <td>Antihelminthic drugs</td>
                        <td colspan="2"><?php echo $mom_adrugs ?></td>
                    </tr>
                    <tr>
                        <td>Date of issuing lick count chart</td>
                        <td colspan="2"><?php echo $mom_dateissued ?></td>
                    </tr>
                    <tr>
                        <td>Date of taking blood sample for HIV</td>
                        <td colspan="2"><?php echo $mom_datehiv ?></td>
                    </tr>
                    <tr>
                        <td>Date of result informed to mother</td>
                        <td colspan="2"><?php echo $mom_dateresults ?></td>
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
                <h2>Update Dental Care</h2>
            </div>
            <div class="updatePopup-body">
                <form action="../../Config/mother-mcardPage1.inc.php?mom_id=$mom_id" method="POST">
                    <div class="updateFormTables">
                        <table>
                            <tr>
                                <td></td>
                                <td>POA</td>
                                <td>Result</td>
                            </tr>
                            <tr>
                                <td>Blood Sugar</td>
                                <td><input type="text" name="mom_blood_sugar" value="<?php echo $mom_blood_sugar ?>"></td>
                                <td><input type="text" name="mom_blood_sugarr" value="<?php echo $mom_blood_sugarr ?>"></td>
                            </tr>
                            <tr>
                                <td>Hemoglobin</td>
                                <td><input type="text" name="mom_blood_hb" value="<?php echo $mom_blood_hb ?>"></td>
                                <td><input type="text" name="mom_blood_hbr" value="<?php echo $mom_blood_hbr ?>"></td>
                            </tr>
                            <tr>
                                <td>Other Investigation</td>
                                <td colspan="2"><input type="text" name="mom_other" value="<?php echo $mom_other ?>"></td>
                            </tr>
                            <tr>
                                <td>Antihelminthic drugs</td>
                                <td colspan="2"><input type="text" name="mom_adrugs" value="<?php echo $mom_adrugs ?>"></td>
                            </tr>
                            <tr>
                                <td>Date of issuing lick count chart</td>
                                <td colspan="2"><input type="date" name="mom_dateissued" value="<?php echo $mom_dateissued ?>"></td>
                            </tr>
                            <tr>
                                <td>Date of taking blood sample for HIV</td>
                                <td colspan="2"><input type="date" name="mom_datehiv" value="<?php echo $mom_datehiv ?>"></td>
                            </tr>
                            <tr>
                                <td>Date of result informed to mother</td>
                                <td colspan="2"><input type="date" name="mom_dateresults" value="<?php echo $mom_dateresults ?>"></td>
                            </tr>
                        </table>
                    </div>
                    <input type="hidden" name="mom_id" value="<?php echo $mom_id ?>">
                    <div class="updateMcard_submit">
                        <button type="reset">Reset</button>
                        <button type="submit" name="Investigations_submit">Update</button>
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