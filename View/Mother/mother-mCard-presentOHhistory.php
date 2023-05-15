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
            <div class="MotherCardTableTitles"><h3>Present Obsteric History</h3></div>
            <div class="MotherGeneralDetails">
                <table class="MotherCardTables">
                    <tr>
                        <td>Gravidity G:</td>
                        <td><?php echo $gravidity_G ?></td>
                    </tr>
                    <tr>
                        <td>Age of the youngest child::</td>
                        <td><?php echo $youngest_child_age ?></td>
                    </tr>
                    <tr>
                        <td>LRMP:</td>
                        <td><?php echo $LRMP ?></td>
                    </tr>
                    <tr>
                        <td>EED:</td>
                        <td><?php echo $EED ?></td>
                    </tr>
                    <tr>
                        <td>US corrected EED (To be filled by VOG/MO):</td>
                        <td><?php echo $us_eed ?></td>
                    </tr>
                    <tr>
                        <td>POA at dating scan: :</td>
                        <td><?php echo $poa_at_dating ?></td>
                    </tr>
                    <tr>
                        <td>Date of quickening:</td>
                        <td><?php echo $date_quickning ?></td>
                    </tr>
                    <tr>
                        <td>POA at registration: :</td>
                        <td><?php echo $poa_at_reg ?></td>
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
                                <td>Gravidity G:</td>
                                <td><input type="text" name="gravidity_G" value="<?php echo $gravidity_G ?>"></td>
                            </tr>
                            <tr>
                                <td>Age of the youngest child::</td>
                                <td><input type="text" name="youngest_child_age" value="<?php echo $youngest_child_age ?>"></td>
                            </tr>
                            <tr>
                                <td>LRMP:</td>
                                <td><input type="text" name="LRMP" value="<?php echo $LRMP ?>"></td>
                            </tr>
                            <tr>
                                <td>EED:</td>
                                <td><input type="text" name="EED" value="<?php echo $EED ?>"></td>
                            </tr>
                            <tr>
                                <td>US corrected EED (To be filled by VOG/MO):</td>
                                <td><input type="text" name="us_eed" value="<?php echo $us_eed ?>"></td>
                            </tr>
                            <tr>
                                <td>POA at dating scan: :</td>
                                <td><input type="text" name="poa_at_dating" value="<?php echo $poa_at_dating ?>"></td>
                            </tr>
                            <tr>
                                <td>Date of quickening:</td>
                                <td><input type="date" name="date_quickning" value="<?php echo $date_quickning ?>"></td>
                            </tr>
                            <tr>
                                <td>POA at registration: :</td>
                                <td><input type="text" name="poa_at_reg" value="<?php echo $poa_at_reg ?>"></td>
                            </tr>
                        </table>
                    </div>
                    <input type="hidden" name="mom_id" value="<?php echo $mom_id ?>">
                    <div class="updateMcard_submit">
                        <button type="reset">Reset</button>
                        <button type="submit" name="PO_History_submit">Update</button>
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