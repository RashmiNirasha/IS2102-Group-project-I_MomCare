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
            <div class="MotherCardTableTitles"><h3>Medical / Surgical History</h3></div>
            <div class="MotherGeneralDetails">
                <table class="MotherCardTables">
                    <tr>
                        <td>Diabetes:</td>
                        <td><?php echo $diabetes2 ?></td>
                        <td>Haematologies:</td>
                        <td><?php echo $haematologies?></td>
                    </tr>
                    <tr>
                        <td>Hypertension:</td>
                        <td><?php echo $hypertension2 ?></td>
                        <td>Thyroid diseases:</td>
                        <td><?php echo $thyroid_d ?></td>
                    </tr>
                    <tr>
                        <td>Cardiac diseases:</td>
                        <td><?php echo $cardiac_d ?></td>
                        <td>Bronchial asthma:</td>
                        <td><?php echo $bronchial_d ?></td>
                    </tr>
                    <tr>
                        <td>Renal diseases:</td>
                        <td><?php echo $renal_d ?></td>
                        <td>Tuberculosis:</td>
                        <td><?php echo $tuberculosis ?></td>
                    </tr>
                    <tr>
                        <td>Hepatic diseases:</td>
                        <td><?php echo $hepatic_d ?></td>
                        <td>Previous DVT:</td>
                        <td><?php echo $previous_DVT ?></td>
                    </tr>
                    <tr>
                        <td>Psychiatric illnesses:</td>
                        <td><?php echo $psychiatric_d ?></td>
                        <td>Surgeries other than LSCS:</td>
                        <td><?php echo $surgeries_other ?></td>
                    </tr>
                    <tr>
                        <td>Epilepsy:</td>
                        <td><?php echo $epilepsy ?></td>
                        <td>Other (specify):</td>
                        <td><?php echo $mhistory_other ?></td>
                    </tr>
                    <tr>
                        <td>Malignancies:</td>
                        <td><?php echo $malignancies ?></td>
                        <td>Social Z score:</td>
                        <td><?php echo $social_zscore ?></td>
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
                <h2>Update Medical / Surgical History</h2>
            </div>
            <div class="updatePopup-body">
                <form action="../../Config/mother-mcardPage1.inc.php?mom_id=$mom_id" method="POST">
                    <div class="updateFormTables">
                        <table>
                            <tr>
                                <td>Diabetes:</td>
                                <td>
                                    <input type="radio" name="diabetes2" value="Positive" <?php if($diabetes2 == "Positive") echo "checked" ?>>Positive
                                    <input type="radio" name="diabetes2" value="Negative" <?php if($diabetes2 == "Negative") echo "checked" ?>>Negative
                                </td>
                                <td>Haematologies:</td>
                                <td>
                                    <input type="radio" name="haematologies" value="Positive" <?php if($haematologies == "Positive") echo "checked" ?>>Positive
                                    <input type="radio" name="haematologies" value="Negative" <?php if($haematologies == "Negative") echo "checked" ?>>Negative
                                </td>
                            </tr>
                            <tr>
                                <td>Hypertension:</td>
                                <td>
                                    <input type="radio" name="hypertension2" value="Positive" <?php if($hypertension2 == "Positive") echo "checked" ?>>Positive
                                    <input type="radio" name="hypertension2" value="Negative" <?php if($hypertension2 == "Negative") echo "checked" ?>>Negative
                                </td>
                                <td>Thyroid diseases:</td>
                                <td>
                                    <input type="radio" name="thyroid_d" value="Positive" <?php if($thyroid_d == "Positive") echo "checked" ?>>Positive
                                    <input type="radio" name="thyroid_d" value="Negative" <?php if($thyroid_d == "Negative") echo "checked" ?>>Negative
                                </td>
                            </tr>
                            <tr>
                                <td>Cardiac diseases:</td>
                                <td>
                                    <input type="radio" name="cardiac_d" value="Positive" <?php if($cardiac_d == "Positive") echo "checked" ?>>Positive
                                    <input type="radio" name="cardiac_d" value="Negative" <?php if($cardiac_d == "Negative") echo "checked" ?>>Negative
                                </td>
                                <td>Bronchial asthma:</td>
                                <td>
                                    <input type="radio" name="bronchial_d" value="Positive" <?php if($bronchial_d == "Positive") echo "checked" ?>>Positive
                                    <input type="radio" name="bronchial_d" value="Negative" <?php if($bronchial_d == "Negative") echo "checked" ?>>Negative
                                </td>
                            </tr>
                            <tr>
                                <td>Renal diseases:</td>
                                <td>
                                    <input type="radio" name="renal_d" value="Positive" <?php if($renal_d == "Positive") echo "checked" ?>>Positive
                                    <input type="radio" name="renal_d" value="Negative" <?php if($renal_d == "Negative") echo "checked" ?>>Negative
                                </td>
                                <td>Tuberculosis:</td>
                                <td>
                                    <input type="radio" name="tuberculosis" value="Positive" <?php if($tuberculosis == "Positive") echo "checked" ?>>Positive
                                    <input type="radio" name="tuberculosis" value="Negative" <?php if($tuberculosis == "Negative") echo "checked" ?>>Negative
                                </td>
                            </tr>
                            <tr>
                                <td>Hepatic diseases:</td>
                                <td>
                                    <input type="radio" name="hepatic_d" value="Positive" <?php if($hepatic_d == "Positive") echo "checked" ?>>Positive
                                    <input type="radio" name="hepatic_d" value="Negative" <?php if($hepatic_d == "Negative") echo "checked" ?>>Negative
                                </td>
                                <td>Previous DVT:</td>
                                <td>
                                    <input type="radio" name="previous_DVT" value="Positive" <?php if($previous_DVT == "Positive") echo "checked" ?>>Positive
                                    <input type="radio" name="previous_DVT" value="Negative" <?php if($previous_DVT == "Negative") echo "checked" ?>>Negative
                                </td>
                            </tr>
                            <tr>
                                <td>Psychiatric illnesses:</td>
                                <td>
                                    <input type="radio" name="psychiatric_d" value="Positive" <?php if($psychiatric_d == "Positive") echo "checked" ?>>Positive
                                    <input type="radio" name="psychiatric_d" value="Negative" <?php if($psychiatric_d == "Negative") echo "checked" ?>>Negative
                                </td>
                                <td>Surgeries other than LSCS:</td>
                                <td>
                                    <input type="radio" name="surgeries_other" value="Positive" <?php if($surgeries_other == "Positive") echo "checked" ?>>Positive
                                    <input type="radio" name="surgeries_other" value="Negative" <?php if($surgeries_other == "Negative") echo "checked" ?>>Negative
                                </td>
                            </tr>
                            <tr>
                                <td>Epilepsy:</td>
                                <td>
                                    <input type="radio" name="epilepsy" value="Positive" <?php if($epilepsy == "Positive") echo "checked" ?>>Positive
                                    <input type="radio" name="epilepsy" value="Negative" <?php if($epilepsy == "Negative") echo "checked" ?>>Negative
                                </td>
                                <td>Other (specify):</td>
                                <td><input type="text" name="mhistory_other" value="<?php echo "$mhistory_other" ?>"></td>
                            </tr>
                            <tr>
                                <td>Malignancies:</td>
                                <td><input type="text" name="malignancies" value="<?php echo "$malignancies" ?>"></td>
                                <td>Social Z score:</td>
                                <td><input type="text" name="social_zscore" value="<?php echo "$social_zscore" ?>"></td>
                            </tr>
                        </table>
                    </div>
                    <input type="hidden" name="mom_id" value="<?php echo $mom_id ?>">
                    <div class="updateMcard_submit">
                        <button type="reset">Reset</button>
                        <button type="submit" name="MsHistory_submit">Update</button>
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