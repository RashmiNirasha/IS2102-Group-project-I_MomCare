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
            <div class="MotherCardTableTitles"><h3>Present Obsteric History</h3></div>
            <div class="MotherGeneralDetails">
                <table class="MotherCardTables">
                    <tr>
                        <td>Date of Visit</td>
                        <td><?php echo $mom_clinicdate ?></td>
                    </tr>
                    <tr>
                        <td>POA</td>
                        <td><?php echo $mom_poa ?></td>
                    </tr>
                    <tr>
                        <td>Urine
                            <table class="innerTable">
                                <tr>
                                    <td>Sugar</td>
                                </tr>
                                <tr>
                                    <td>Albumin</td>
                                </tr>
                            </table>
                        </td>
                        <td>Status<table class="innerTable">
                            <tr>
                                <td><?php echo $mom_urine_sugar ?></td>
                            </tr>
                            <tr>
                                <td><?php echo $mom_urine_albumin ?></td>
                            </tr>
                        </table></td>
                    </tr>
                    <tr>
                        <td>Pallor</td>
                        <td><?php echo $mom_pallor ?></td>
                    </tr>
                    <tr>
                        <td>Oedema<table class="innerTable">
                            <tr>
                                <td>Sugar</td>
                            </tr>
                            <tr>
                                <td>Albumin</td>
                            </tr>
                        </table></td>
                        <td>Status<table class="innerTable">
                            <tr>
                                <td><?php echo $mom_oedema_sugar ?></td>
                            </tr>
                            <tr>
                                <td><?php echo $mom_oedema_albumin ?></td>
                            </tr>
                        </table></td>
                    </tr>
                    <tr>
                        <td>BP</td>
                        <td><?php echo $mom_bp ?></td>
                    </tr>
                    <tr>
                        <td>Fundal height(cm)</td>
                        <td><?php echo $mom_fh ?></td>
                    </tr>
                    <tr>
                        <td>Foetal lie</td>
                        <td><?php echo $mom_fl ?></td>
                    </tr>
                    <tr>
                        <td>Presentation</td>
                        <td><?php echo $mom_presentation ?></td>
                    </tr>
                    <tr>
                        <td>Engagement of the presenting parent</td>
                        <td><?php echo $mom_engagement ?></td>
                    </tr>
                    <tr>
                        <td>FM</td>
                        <td><?php echo $mom_fm ?></td>
                    </tr>
                    <tr>
                        <td>FHS</td>
                        <td><?php echo $mom_fhs ?></td>
                    </tr>
                    <tr>
                        <td>Iron</td>
                        <td><?php echo $mom_iron ?></td>
                    </tr>
                    <tr>
                        <td>Folate</td>
                        <td><?php echo $mom_folate ?></td>
                    </tr>
                    <tr>
                        <td>Calcium</td>
                        <td><?php echo $mom_calcium ?></td>
                    </tr>
                    <tr>
                        <td>Vitamin C</td>
                        <td><?php echo $mom_vitamin ?></td>
                    </tr>
                    <tr>
                        <td>Food supplementation</td>
                        <td><?php echo $mom_food_suppliment ?></td>
                    </tr>
                    <tr>
                        <td>Signature of the officer examined</td>
                        <td><?php echo $siganture ?></td>
                    </tr>
                    <tr>
                        <td>Designation</td>
                        <td><?php echo $designation ?></td>
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
                <h2>Update Present Obsteric History</h2>
            </div>
            <div class="updatePopup-body">
                <form action="../../Config/mother-mcardPage1.inc.php?mom_id=$mom_id" method="POST">
                    <div class="updateFormTables">
                        <table>
                            <tr>
                                <td>Date of Visit</td>
                                <td><input type="date" name="mom_clinicdate" value="<?php echo $mom_clinicdate ?>"></td>
                            </tr>
                            <tr>
                                <td>POA</td>
                                <td><input type="text" name="mom_poa" value="<?php echo $mom_poa ?>"></td>
                            </tr>
                            <tr>
                                <td>Urine
                                    <table class="innerTable">
                                        <tr>
                                            <td>Sugar</td>
                                        </tr>
                                        <tr>
                                            <td>Albumin</td>
                                        </tr>
                                    </table>
                                </td>
                                <td>Status<table class="innerTable">
                                    <tr>
                                        <td><input type="text" name="mom_urine_sugar" value="<?php echo $mom_urine_sugar ?>"></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="mom_urine_albumin" value="<?php echo $mom_urine_albumin ?>"></td>
                                    </tr>
                                </table></td>
                            </tr>
                            <tr>
                                <td>Pallor</td>
                                <td><input type="text" name="mom_pallor" value="<?php echo $mom_pallor ?>"></td>
                            </tr>
                            <tr>
                                <td>Oedema<table class="innerTable">
                                    <tr>
                                        <td>Sugar</td>
                                    </tr>
                                    <tr>
                                        <td>Albumin</td>
                                    </tr>
                                </table></td>
                                <td>Status<table class="innerTable">
                                    <tr>
                                        <td><input type="text" name="mom_oedema_sugar" value="<?php echo $mom_oedema_sugar ?>"></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="mom_oedema_albumin" value="<?php echo $mom_oedema_albumin ?>"></td>
                                    </tr>
                                </table></td>
                            </tr>
                            <tr>
                                <td>BP</td>
                                <td><input type="text" name="mom_bp" value="<?php echo $mom_bp ?>"></td>
                            </tr>
                            <tr>
                                <td>Fundal height(cm)</td>
                                <td><input type="text" name="mom_fh" value="<?php echo $mom_fh ?>"></td>
                            </tr>
                            <tr>
                                <td>Foetal lie</td>
                                <td><input type="text" name="mom_fl" value="<?php echo $mom_fl ?>"></td>
                            </tr>
                        </table>
                        <table>
                            <tr>
                                <td>Presentation</td>
                                <td><input type="text" name="mom_presentation" value="<?php echo $mom_presentation ?>"></td>
                            </tr>
                            <tr>
                                <td>Engagement of the presenting parent</td>
                                <td><input type="text" name="mom_engagement" value="<?php echo $mom_engagement ?>"></td>
                            </tr>
                            <tr>
                                <td>FM</td>
                                <td><input type="text" name="mom_fm" value="<?php echo $mom_fm ?>"></td>
                            </tr>
                            <tr>
                                <td>FHS</td>
                                <td><input type="text" name="mom_fhs" value="<?php echo $mom_fhs ?>"></td>
                            </tr>
                            <tr>
                                <td>Iron</td>
                                <td><input type="text" name="mom_iron" value="<?php echo $mom_iron ?>"></td>
                            </tr>
                            <tr>
                                <td>Folate</td>
                                <td><input type="text" name="mom_folate" value="<?php echo $mom_folate ?>"></td>
                            </tr>
                            <tr>
                                <td>Calcium</td>
                                <td><input type="text" name="mom_calcium" value="<?php echo $mom_calcium ?>"></td>
                            </tr>
                            <tr>
                                <td>Vitamin C</td>
                                <td><input type="text" name="mom_vitamin" value="<?php echo $mom_vitamin ?>"></td>
                            </tr>
                            <tr>
                                <td>Food supplementation</td>
                                <td><input type="text" name="mom_food_suppliment" value="<?php echo $mom_food_suppliment ?>"></td>
                            </tr>
                            <tr>
                                <td>Signature of the officer examined</td>
                                <td><input type="text" name="siganture" value="<?php echo $siganture ?>"></td>
                            </tr>
                            <tr>
                                <td>Designation</td>
                                <td><input type="text" name="designation" value="<?php echo $designation ?>"></td>
                            </tr>
                        </table>
                    </div>
                    <input type="hidden" name="mom_id" value="<?php echo $mom_id ?>">
                    <div class="updateMcard_submit">
                        <button type="reset">Reset</button>
                        <button type="submit" name="clinicCare_submit">Update</button>
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