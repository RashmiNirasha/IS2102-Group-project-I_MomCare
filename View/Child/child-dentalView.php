<?php 
session_start();
include '../../Config/dbConnection.php';
include "../../Assets/Includes/header_pages.php";
include "../../Assets/Includes/sidenav.php";?>

<!DOCTYPE html>
<html lang="en">
<Head>
  <Link Href="Https://Fonts.Googleapis.Com/Css?Family=Quicksand:400,700" Rel="Stylesheet">
</Head>
<body>

<div class="child-container">
  <h2>Dental Report</h2>
  
    <div class="OneColumnSection"> <!--when a section has only one table, use this class-->
      <div class="MotherCardTableTitles"><h3>  Dental Records  </h3></div>
      <div class="MotherGeneralDetails">
      <table class="MotherCardTables">
    <?php
        // Get the dental report data for the specified child
        $child_id = mysqli_real_escape_string($con, $_GET['child_id']);
        $sql = "SELECT * FROM child_dental_report WHERE child_id = '$child_id'";
        $result = mysqli_query($con, $sql); 
    
        // Display the dental report data for the specified child
        if (mysqli_num_rows($result) > 0) {
            echo "<tr><th>Age (months)</th><th>Number of erupted teeth</th><th>Status : healthy/unhealthy</th><th>Date : </th></tr>";
            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                        <td>".$row["age"]."</td>
                        <td>".$row["no_of_teeth"]."</td>
                        <td>".$row["status"]."</td>
                        <td>".$row["date"]."</td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No dental report data found.</td></tr>";
        }?>

    </table>
    <br>
    </div>
    


        
    </div>
   
</body>
</html>
