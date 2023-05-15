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
            <div class="MotherCardTableTitles"><h3>Family History</h3></div>
            <div class="MotherGeneralDetails">
                <table class="MotherCardTables">
                    <tr>
                        <td>Diabetes mellitus:</td>
                        <td><?php echo $diabetes ?></td>
                    </tr>
                    <tr>
                        <td>Hypertension:</td>
                        <td><?php echo $hypertension ?></td>
                    </tr>
                    <tr>
                        <td>Haematological diseases:</td>
                        <td><?php echo $h_diseases ?></td>
                    </tr>
                    <tr>
                        <td>Twin / multiple pregnancies:</td>
                        <td><?php echo $m_pregnancies ?></td>
                    </tr>
                    <tr>
                        <td>Any other (specify):</td>
                        <td><?php echo $fhistory_others ?></td>
                    </tr>
                </table>
            </div>
        </div>
        <?php
            if(($_SESSION['id']) != $mom_id){
                $output ='<div class="updateMcardTable">
                <button onclick="updateMcardTable()">Update</button>
                </div>';
                echo $output;
            }
        ?>
    </div>
    <div class="updateMcardTable-popup" id="updateMcardTable-popup">
        <div class="updatePopup-content">
            <div class="updatePopup-header">
                <span class="close" onclick="closePopup()">&times;</span>
                <h2>Update Mother Card</h2>
            </div>
            <div class="updatePopup-body">
                <form action="../../Config/mother-mcardPage1.inc.php?mom_id=$mom_id" method="POST">
                    <div class="updateFormTables">
                        <table>
                            <tr>
                                <td>Diabetes mellitus:</td>
                                <td>
                                    <input type="radio" name="diabetes" value="Positive" <?php if($diabetes == "Positive") echo "checked"; ?>>Positive
                                    <input type="radio" name="diabetes" value="Negative" <?php if($diabetes == "Negative") echo "checked"; ?>>Negative
                                </td>
                            </tr>
                            <tr>
                                <td>Hypertension:</td>
                                <td>
                                    <input type="radio" name="hypertension" value="Positive" <?php if($hypertension == "Positive") echo "checked"; ?>>Positive
                                    <input type="radio" name="hypertension" value="Negative" <?php if($hypertension == "Negative") echo "checked"; ?>>Negative
                                </td>
                            </tr>
                            <tr>
                                <td>Haematological diseases:</td>
                                <td>
                                    <input type="radio" name="h_diseases" value="Positive" <?php if($h_diseases == "Positive") echo "checked"; ?>>Positive
                                    <input type="radio" name="h_diseases" value="Negative" <?php if($h_diseases == "Negative") echo "checked"; ?>>Negative
                                </td>
                            </tr>
                            <tr>
                                <td>Twin / multiple pregnancies:</td>
                                <td>
                                    <input type="radio" name="m_pregnancies" value="Positive" <?php if($m_pregnancies == "Positive") echo "checked"; ?>>Positive
                                    <input type="radio" name="m_pregnancies" value="Negative" <?php if($m_pregnancies == "Negative") echo "checked"; ?>>Negative
                                </td>
                            </tr>
                            <tr>
                                <td>Any other (specify):</td>
                                <td><input type="text" name="fhistory_others" value="<?php echo $fhistory_others ?>"></td>
                            </tr>
                        </table>
                    </div>
                    <input type="hidden" name="mom_id" value="<?php echo $mom_id ?>">
                    <div class="updateMcard_submit">
                        <button type="reset">Reset</button>
                        <button type="submit" name="familyB_submit">Update</button>
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