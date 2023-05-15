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
    <title>Birth Plan View</title>
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
            <div class="MotherCardTableTitles"><h3>Birth Plan</h3></div>
                <div class="FamilyPlanning">
                                <table class="MotherCardTables">
                                    <tr>
                                        <td>Date of counselling</td>
                                        <td><?php echo $mom_counselldate ?></td>
                                    </tr>
                                    <tr>
                                        <td>Chosen method</td>
                                        <td><?php echo $mom_planmethod ?></td>
                                    </tr>
                                    <tr>
                                        <td>Reason for not using a method</td>
                                        <td><?php echo $mom_planreason ?></td>
                                    </tr>
                                    <tr>
                                        <td>Consent from sign date</td>
                                        <td><?php echo $mom_plansigneddate ?></td>
                                    </tr>
                                </table>
                </div>
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