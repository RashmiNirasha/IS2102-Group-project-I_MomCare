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
            <div class="MotherCardTableTitles"><h3>Tetanus Toxoid Immunization</h3></div>
            <div class="MotherGeneralDetails">
            <table class="MotherCardTables">
                <tr>
                    <th>Dose</th>
                    <th>Date</th>
                    <th>Batch No</th>
                </tr>
                <?php
                        $sql = "SELECT * FROM mcard_tetanus WHERE mom_id = '$mom_id'";
                        $result = $con->query($sql);
                        if($result->num_rows > 0)
                        {
                            while($row=mysqli_fetch_assoc($result)){
                                $mom_tetanus_dose = $row['dose'];
                                $mom_tetanus_date = $row['date'];
                                $mom_tetanus_batch = $row['batch_no'];

                                $output ='
                                <tr>
                                    <td>'.$mom_tetanus_dose.'</td>
                                    <td>'.$mom_tetanus_date.'</td>
                                    <td>'.$mom_tetanus_batch.'</td>
                                ';
                                echo $output;
                            }
                        }
                        else{
                            echo "0 results";
                        }
                ?>
                
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
                <h2>Update Tetanus Toxoid Immunization</h2>
            </div>
            <div class="updatePopup-body">
                <form action="../../Config/mother-mcardPage1.inc.php?mom_id=$mom_id" method="POST">
                    <div class="updateFormTables">
                        <table>
                            <tr>
                                <td><label for="mom_tetanus_dose">Dose</label></td>
                                <td><input type="text" name="mom_tetanus_dose" value="<?php echo $mom_tetanus_dose ?>"></td>
                            </tr>
                            <tr>
                                <td><label for="mom_tetanus_date">Date</label></td>
                                <td><input type="date" name="mom_tetanus_date" value="<?php echo $mom_tetanus_date ?>"></td>
                            </tr>
                            <tr>
                                <td><label for="mom_tetanus_batch">Batch No</label></td>
                                <td><input type="text" name="mom_tetanus_batch" value="<?php echo $mom_tetanus_batch ?>"></td>
                            </tr>
                        </table>
                    </div>
                    <input type="hidden" name="mom_id" value="<?php echo $mom_id ?>">
                    <div class="updateMcard_submit">
                        <button type="reset">Reset</button>
                        <button type="submit" name="Tetanus_submit">Update</button>
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