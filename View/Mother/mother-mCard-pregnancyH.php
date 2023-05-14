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
                        <th>Pregnancy</th>
                        <td><?php echo $pregnancy_type ?></td>
                    </tr>
                    <tr>
                        <th>Antenatal complications</th>
                        <td><?php echo $antenatal ?></td>
                    </tr>
                    <tr>
                        <th>Place & mode of delivery</th>
                        <td><?php echo $place ?></td>
                    </tr>
                    <tr>
                        <th>Outcome</th>
                        <td><?php echo $outcome ?></td>
                    </tr>
                    <tr>
                        <th>Birth weight</th>
                        <td><?php echo $weight ?></td>
                    </tr>
                    <tr>
                        <th>Postal complications(specify)</th>
                        <td><?php echo $postal_complications ?></td>
                    </tr>
                    <tr>
                        <th>Sex</th>
                        <td><?php echo $sex ?></td>
                    </tr>
                    <tr>
                        <th>Age</th>
                        <td><?php echo $age ?></td>
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
                <h2>Update Present Obsteric History</h2>
            </div>
            <div class="updatePopup-body">
                <form action="../../Config/mother-mcardPage1.inc.php?mom_id=$mom_id" method="POST">
                    <div class="updateFormTables">
                        <table>
                            <tr>
                                <th>Pregnancy:</th>
                                <td><input type="text" name="pregnancy_type" value="<?php echo $pregnancy_type ?>"></td>
                            </tr>
                            <tr>
                                <th>Antenatal complications:</th>
                                <td><input type="text" name="antenatal" value="<?php echo $antenatal ?>"></td>
                            </tr>
                            <tr>
                                <th>Place & mode of delivery:</th>
                                <td><input type="text" name="place" value="<?php echo $place ?>"></td>
                            </tr>
                            <tr>
                                <th>Outcome:</th>
                                <td><input type="text" name="outcome" value="<?php echo $outcome ?>"></td>
                            </tr>
                            <tr>
                                <th>Birth weight:</th>
                                <td><input type="text" name="weight" value="<?php echo $weight ?>"></td>
                            </tr>
                            <tr>
                                <th>Postal complications(specify):</th>
                                <td><input type="text" name="postal_complications" value="<?php echo $postal_complications ?>"></td>
                            </tr>
                            <tr>
                                <th>Sex:</th>
                                <td>
                                    <input type="radio" name="sex" value="Male"<?php if($sex == "Male") echo "checked"; ?>>Male
                                    <input type="radio" name="sex" value="Female"<?php if($sex == "Female") echo "checked"; ?>>Female
                                </td>
                            </tr>
                            <tr>
                                <th>Age:</th>
                                <td><input type="text" name="age" value="<?php echo $age ?>"></td>
                            </tr>
                        </table>
                    </div>
                    <input type="hidden" name="mom_id" value="<?php echo $mom_id ?>">
                    <div class="updateMcard_submit">
                        <button type="reset">Reset</button>
                        <button type="submit" name="Pregnancy_History_submit">Update</button>
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