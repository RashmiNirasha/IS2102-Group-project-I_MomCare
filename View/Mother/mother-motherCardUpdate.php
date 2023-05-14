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
            <div class="MotherCardTableTitles"><h3>General Details</h3></div>
            <div class="MotherGeneralDetails">
                <table class="MotherCardTables">
                    <tr>
                        <th>Name of the Mother:</th>
                        <td><?php echo $mom_fullname ?></td>
                    </tr>
                    <tr>
                        <th>Age:</th>
                        <td><?php echo $mom_age ?></td>
                    </tr>
                    <tr>
                        <th>MOH area:</th>
                        <td><?php echo $moh_area ?></td>
                    </tr>
                    <tr>
                        <th>PHM area:</th>
                        <td><?php echo $phm_area ?></td>
                    </tr>
                    <tr>
                        <th>Name of the Field Clinic:</th>
                        <td><?php echo $clinic_name ?></td>
                    </tr>
                    <tr>
                        <th>Grama Niladhari Division:</th>
                        <td><?php echo $gn_division ?></td>
                    </tr>
                    <tr>
                        <th>Name of the Hospital Clinic:</th>
                        <td><?php echo $hospital_name ?></td>
                    </tr>
                    <tr>
                        <th>Name of the Consultant Obstetrician:</th>
                        <td><?php echo $vog_name ?></td>
                    </tr>
                    <tr>
                        <th>Identified anatal risks conditions and mobilities:</th>
                        <td><?php echo $anatal_risks ?></td>
                    </tr>
                    <tr>
                        <th>Registration Number:</th>
                        <td><?php echo $reg_number ?></td>
                    </tr>
                    <tr>
                        <th>Registration Date:</th>
                        <td><?php echo $reg_date ?></td>
                    </tr>
                    <tr>
                        <th>Eligible Family Register:</th>
                        <td><?php echo $family_reg ?></td>
                    </tr>
                    <tr>
                        <th>Pregnant Mother's Register:</th>
                        <td><?php echo $mother_reg ?></td>
                    </tr>
                    <tr>
                        <th>Identified antenatal risk conditions & morbidities:</th>
                        <td><?php echo $antenatal_risks ?></td>
                    </tr>
                    <tr>
                        <th>Consanguinity:</th>
                        <td><?php echo $cb1 ?></td>
                    </tr>
                    <tr>
                        <th>Rubella immunization:</th>
                        <td><?php echo $cb2 ?></td>
                    </tr>
                    <tr>
                        <th>Pre-pregnancy screening done:</th>
                        <td><?php echo $cb3 ?></td>
                    </tr>
                    <tr>
                        <th>Preconceptional folic acid:</th>
                        <td><?php echo $cb4 ?></td>
                    </tr>
                    <tr>
                        <th>History of subfertility:</th>
                        <td><?php echo $cb5 ?></td>
                    </tr>
                    <tr>
                        <th>Planned pregnancy or Negativet:</th>
                        <td><?php echo $cb6 ?></td>
                    </tr>
                    <tr>
                        <th>Family planning method last used:</th>
                        <td><?php echo $cb7 ?></td>
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
                <h2>Update Mother Card</h2>
            </div>
            <div class="updatePopup-body">
                <form action="../../Config/mother-mcardPage1.inc.php?mom_id=$mom_id" method="POST">
                    <div class="updateFormTables">
                        <table>
                            <tr>
                                <th>Mother ID:</th>
                                <td><label for="mom_id"><?php echo $mom_id ?></label></td>
                            </tr>
                            <tr>
                                <th>Name of the Mother:</th>
                                <td><input type="text" name="mom_fullname" value="<?php echo $mom_fullname ?>"></td>
                            </tr>
                            <tr>
                                <th>Age:</th>
                                <td><input type="text" name="mom_age" value="<?php echo $mom_age ?>"></td>
                            </tr>
                            <tr>
                                <th>MOH area:</th>
                                <td><input type="text" name="moh_area" value="<?php echo $moh_area ?>"></td>
                            </tr>
                            <tr>
                                <th>PHM area:</th>
                                <td><input type="text" name="phm_area" value="<?php echo $phm_area ?>"></td>
                            </tr>
                            <tr>
                                <th>Name of the Field Clinic:</th>
                                <td><input type="text" name="clinic_name" value="<?php echo $clinic_name ?>"></td>
                            </tr>
                            <tr>
                                <th>Grama Niladhari Division:</th>
                                <td><input type="text" name="gn_division" value="<?php echo $gn_division ?>"></td>
                            </tr>
                            <tr>
                                <th>Name of the Hospital Clinic:</th>
                                <td><input type="text" name="hospital_name" value="<?php echo $hospital_name ?>"></td>
                            </tr>
                            <tr>
                                <th>Name of the Consultant Obstetrician:</th>
                                <td><input type="text" name="vog_name" value="<?php echo $vog_name ?>"></td>
                            </tr>
                            <tr>
                                <th>Identified anatal risks conditions and mobilities:</th>
                                <td><input type="text" name="anatal_risks" value="<?php echo $anatal_risks ?>"></td>
                            </tr>
                            <tr>
                                <th>Registration Number:</th>
                                <td><input type="text" name="reg_number" value="<?php echo $reg_number ?>"></td>
                            </tr>
                        </table>
                        <table>
                            <tr>
                                <th>Registration Date:</th>
                                <td><input type="date" name="reg_date" id="reg_date" value="<?php echo $reg_date ?>"></td>
                            </tr>
                            <tr>
                                <th>Eligible Family Register:</th>
                                <td><input type="text" name="family_reg" value="<?php echo $family_reg ?>"></td>
                            </tr>
                            <tr>
                                <th>Pregnant Mother's Register:</th>
                                <td><input type="text" name="mother_reg" value="<?php echo $mother_reg ?>"></td>
                            </tr>
                            <tr>
                                <th>Identified antenatal risk conditions & morbidities:</th>
                                <td><input type="text" name="antenatal_risks" value="<?php echo $antenatal_risks ?>"></td>
                            </tr>
                            <tr>
                                <th>Consanguinity:</th>
                                <td>
                                    <input type="radio" name="cb1" value="Positive" <?php if($cb1 == "Positive") echo "checked"; ?>>Positive
                                    <input type="radio" name="cb1" value="Negative" <?php if($cb1 == "Negative") echo "checked"; ?>>Negative
                                </td>
                            </tr>
                            <tr>
                                <th>Rubella immunization:</th>
                                <td>
                                    <input type="radio" name="cb2" value="Positive" <?php if($cb2 == "Positive") echo "checked"; ?>>Positive
                                    <input type="radio" name="cb2" value="Negative" <?php if($cb2 == "Negative") echo "checked"; ?>>Negative
                                </td>
                            </tr>
                            <tr>
                                <th>Pre-pregnancy screening done:</th>
                                <td>
                                    <input type="radio" name="cb3" value="Positive" <?php if($cb3 == "Positive") echo "checked"; ?>>Positive
                                    <input type="radio" name="cb3" value="Negative" <?php if($cb3 == "Negative") echo "checked"; ?>>Negative
                                </td>
                            </tr>
                            <tr>
                                <th>Preconceptional folic acid:</th>
                                <td>
                                    <input type="radio" name="cb4" value="Positive" <?php if($cb4 == "Positive") echo "checked"; ?>>Positive
                                    <input type="radio" name="cb4" value="Negative" <?php if($cb4 == "Negative") echo "checked"; ?>>Negative
                                </td>
                            </tr>
                            <tr>
                                <th>History of subfertility:</th>
                                <td>
                                    <input type="radio" name="cb5" value="Positive" <?php if($cb5 == "Positive") echo "checked"; ?>>Positive
                                    <input type="radio" name="cb5" value="Negative" <?php if($cb5 == "Negative") echo "checked"; ?>>Negative
                                </td>
                            </tr>
                            <tr>
                                <th>Planned pregnancy or Negativet:</th>
                                <td>
                                    <input type="radio" name="cb6" value="Positive" <?php if($cb6 == "Positive") echo "checked"; ?>>Positive
                                    <input type="radio" name="cb6" value="Negative" <?php if($cb6 == "Negative") echo "checked"; ?>>Negative
                                </td>
                            </tr>
                            <tr>
                                <th>Family planning method last used:</th>
                                <td><input type="text" name="family_plan" value="<?php echo $cb7 ?>"></td>
                            </tr>
                        </table>
                    </div>
                    <input type="hidden" name="mom_id" value="<?php echo $mom_id ?>">
                    <div class="updateMcard_submit">
                        <button type="reset">Reset</button>
                        <button type="submit" name="updateMcard_submit">Update</button>
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