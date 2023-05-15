<?php 
session_start();
include "../../Assets/Includes/header_pages.php";
include '../../Config/dbConnection.php';
$mom_id = $_GET['mom_id'];

if (isset($_SESSION['email']) && isset($_SESSION['id'])) { ?>
<?php 
    include "../../Config/mother-mcardPage3.inc.php";
    include "../../Assets/Includes/sideNav-mother.php";    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mother Card</title>
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
            <div class="MotherCardTableTitles"><h3>Birth and emergency preparedness plan</h3></div>
                <div class="MedicalHistory">
                                <table class="MotherCardTables">
                                    <tr>
                                        <td class="emptyTableCell"></td>
                                        <td>Delivery</td>
                                        <td>In an emergency</td>
                                    </tr>
                                    <tr>
                                        <td>Intended hospital</td>
                                        <td><?php echo $mom_ihospital1 ?></td>
                                        <td><?php echo $mom_ihospital2 ?></td>
                                    </tr>
                                    <tr>
                                        <td>Mode of transport</td>
                                        <td><?php echo $mom_transport1 ?></td>
                                        <td><?php echo $mom_transport2 ?></td>
                                    </tr>
                                    <tr>
                                        <td>Distance from home(km)</td>
                                        <td><?php echo $mom_distance1 ?></td>
                                        <td><?php echo $mom_distance2 ?></td>
                                    </tr>
                                    <tr>
                                        <td>Time taken to reach</td>
                                        <td><?php echo $mom_eme_time1 ?></td>
                                        <td><?php echo $mom_eme_time2 ?></td>
                                    </tr>
                                </table>
                </div>
        </div>
        <?php
            if(($_SESSION['id']) == $mom_id){
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
                <h2>Update Emergency Details</h2>
            </div>
            <div class="updatePopup-body">
                <form action="../../Config/mother-mcardPage3.inc.php?mom_id=$mom_id" method="POST">
                    <div class="updateFormTables">
                        <table class="updateFormTable">
                            <tr>
                                <td class="emptyTableCell"></td>
                                <td>Delivery</td>
                                <td>In an emergency</td>
                            </tr>
                            <tr>
                                <td>Intended hospital</td>
                                <td><input type="text" name="mom_ihospital1" value="<?php echo $mom_ihospital1 ?>"></td>
                                <td><input type="text" name="mom_ihospital2" value="<?php echo $mom_ihospital2 ?>"></td>
                            </tr>
                            <tr>
                                <td>Mode of transport</td>
                                <td><input type="text" name="mom_transport1" value="<?php echo $mom_transport1 ?>"></td>
                                <td><input type="text" name="mom_transport2" value="<?php echo $mom_transport2 ?>"></td>
                            </tr>
                            <tr>
                                <td>Distance from home(km)</td>
                                <td><input type="text" name="mom_distance1" value="<?php echo $mom_distance1 ?>"></td>
                                <td><input type="text" name="mom_distance2" value="<?php echo $mom_distance2 ?>"></td>
                            </tr>
                            <tr>
                                <td>Time taken to reach</td>
                                <td><input type="text" name="mom_eme_time1" value="<?php echo $mom_eme_time1 ?>"></td>
                                <td><input type="text" name="mom_eme_time2" value="<?php echo $mom_eme_time2 ?>"></td>
                            </tr>
                        </table>
                    </div>
                    <input type="hidden" name="mom_id" value="<?php echo $mom_id ?>">
                    <div class="updateMcard_submit">
                        <button type="reset">Reset</button>
                        <button type="submit" name="Emergency_submit">Update</button>
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