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
    <title>Attendence</title>
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
            <div class="MotherCardTableTitles"><h3>Attendance at antenatal classes</h3></div>
                <div class="AttendanceAtAntenatalClasses">
                                <table class="MotherCardTables">
                                    <tr>
                                        <th>Session</th>
                                        <th>Date</th>
                                        <th>Husband</th>
                                        <th>Wife</th>
                                        <th>Other</th>
                                        <th>Signature</th>
                                    </tr>
                                    <?php
                                        $sql = "SELECT * FROM mcard_attendance WHERE mom_id = '$mom_id'";
                                        $result = $con->query($sql);
                                        if($result->num_rows > 0)
                                        {
                                            while($row=mysqli_fetch_assoc($result)){
                                                $mom_antenatal_id = $row['antenatal_id'];
                                                $mom_antenatal_date = $row['date'];
                                                $mom_antenatal_husband = $row['husband'];
                                                $mom_antenatal_wife = $row['wife'];
                                                $mom_antenatal_other = $row['other'];
                                                $mom_antenatal_sign= $row['sign'];
                                    
                                                $output = "<tr>
                                                    <td>$mom_antenatal_id</td>
                                                    <td>$mom_antenatal_date</td>
                                                    <td>$mom_antenatal_husband</td>
                                                    <td>$mom_antenatal_wife</td>
                                                    <td>$mom_antenatal_other</td>
                                                    <td>$mom_antenatal_sign</td>
                                                    </tr>";
                                                echo $output;
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                        $next_id = $mom_antenatal_id + 1;

                                    ?>
                                </table>
                    </div>
        </div>
        <?php
            if(($_SESSION['id']) == $mom_id){
                $output ='<div class="updateMcardTable">
                <button onclick="updateMcardTable()">Add</button>
                </div>';
                echo $output;
            }
        ?>
        
    </div>
    <div class="updateMcardTable-popup" id="updateMcardTable-popup">
        <div class="updatePopup-content">
            <div class="updatePopup-header">
                <span class="close" onclick="closePopup()">&times;</span>
                <h2>Add Attendence</h2>
            </div>
            <div class="updatePopup-body">
                <form action="../../Config/mother-mcardPage3.inc.php?mom_id=$mom_id" method="POST">
                    <div class="updateFormTables">
                        <table class="updateFormTable">
                            <tr>
                                <th>Session</th>
                                <td><label for="antenatal_id"><?php echo $next_id ?></label>
                            </tr>
                            <tr>
                                <th>Date</th>
                                <td><input type="date" name="date" placeholder="Date" value="<?php echo $mom_antenatal_date ?>"></td>
                            </tr>
                            <tr>
                                <th>Husband</th>
                                <td><input type="radio" name="husband" value="Present" <?php if($mom_antenatal_husband == "Came") ?>>Present
                                    <input type="radio" name="husband" value="Absent" <?php if($mom_antenatal_husband == "Did not Came") ?>>Absent
                                </td>
                            </tr>
                            <tr>
                                <th>Wife</th>
                                <td><input type="radio" name="wife" value="Present" <?php if($mom_antenatal_wife == "Came") ?>>Present
                                    <input type="radio" name="wife" value="Absent" <?php if($mom_antenatal_wife == "Did not Came") ?>>Absent
                                </td>
                            </tr>
                            <tr>
                                <th>Other</th>
                                <td><input type="text" name="other" placeholder="Other" value="<?php echo $mom_antenatal_other ?>"></td>
                            </tr>
                            <tr>
                                <th>Signature</th>
                                <td><input type="text" name="sign" placeholder="Signature" value="<?php echo $mom_antenatal_sign ?>"></td>
                            </tr>
                        </table>
                    </div>
                    <input type="hidden" name="mom_id" value="<?php echo $mom_id ?>">
                    <div class="updateMcard_submit">
                        <button type="reset">Reset</button>
                        <button type="submit" name="Attendence_submit">Add</button>
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