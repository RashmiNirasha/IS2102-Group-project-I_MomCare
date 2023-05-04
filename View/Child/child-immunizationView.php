<?php 
session_start();
include '../../Config/dbConnection.php';
include "../../Assets/Includes/header_pages.php";
include "../../Config/child_fetchDataModel.php";

$sql = "SELECT * FROM child_details WHERE child_id = '{$_GET['child_id']}'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$child_name = $row['child_name'];   

?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style><?php include "../../Assets/css/style-common.css"; ?></style>
</head>
<body>
<div class="top-button" >
<a href="child-childDashboard.php?child_id=<?php echo $_GET['child_id']; ?>"><button class="goBackBtn">Go back</button></a>
        </div>
    <div class="ChildCardMain">
        <!-- title section -->
        <div class="ChildCardMain-titleOuter">
            <div class="ChildCardMain-TitleInner">
                <h3>ප්‍රතිශක්‍රීයකරණය&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Immunization&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;நோய்த்தடுப்பு</h3>
            </div>
        </div>
        <!-- title section end -->
      <br/>
      <div class="child-container2">
      <div class="OneColumnSection">
      <div class="MotherCardTableTitles">
      <h3>Vaccination Table </h3>
    </div>
    <div class="MotherGeneralDetails">
      <table class="MotherCardTables">
        <tr>
            <th>Age</th>
            <th>Type of Vaccine</th>
            <th>Date</th>
            <th>Batch No</th>
            <th>Adverse Effects</th>
            <th>Name of the official</th>
        </tr>
            <?php echo fetch_data(); ?>
        </table>
        <br/>

                <div class="OneColumnSection">
                <div class="MotherCardTableTitles">
                    <h3>Referrals on Immunization</h3> </div>
                    <div class="MotherGeneralDetails">
                    <table class="MotherCardTables">
                        <tr>
                            <th colspan="2">Date</td>
                            <th>Reason for referral</td>
                            <th>Place</th>
                        <th colspan="2">Notes</th>
                        </tr>
                        <?php 
                                $sql = "SELECT * FROM child_immunization_referrals WHERE child_id = '".$_GET["child_id"]."'";
                                $result = mysqli_query($con, $sql);
                                if (!$result) {
                                    echo "Error executing query: " . mysqli_error($con);
                                } else {
                                    if (mysqli_num_rows($result) > 0) {
                                        while($row = mysqli_fetch_assoc($result)) {
                                            echo "<tr><td colspan='2'>".$row["referral_date"]."</td><td>".$row["referral_reason"]."</td><td>".$row["referral_place"]."</td><td colspan='2'>".$row["referral_notes"]."</td></tr>";
                                        }
                                    } else {
                                        echo "<tr><td colspan='6'>No records found</td></tr>";
                                    }
                                }
                                ?>
                    </table>
                </div>
            </div>
        </div>
<!-- form section 2 -->
       
<div class="ChildFormButtons">
            <a href="child-vaccineReport.php?child_id=<?php echo $_GET['child_id']; ?>"><button class="NextBtn">Generate pdf</button></a>
             
        </div>
    </div>
  </body>
</html>
