<?php 
session_start();
include '../../Config/dbConnection.php';
include "../../Assets/Includes/header_pages.php";
include "../../Assets/Includes/sidenav.php";?>

<!DOCTYPE html>
<html lang="en">
<Head>
  <Link Href="Https://Fonts.Googleapis.Com/Css?Family=Quicksand:400,700" Rel="Stylesheet">
  <style><?php include "../../Assets/css/style-child.css";?></style>
</Head>
<body>

<div class="child-container">
  <h2>Nutrition Report</h2>
  <div class="OneColumnSection"> <!--when a section has only one table, use this class-->
                        <div class="MotherCardTableTitles"><h3> Vitamin A  </h3></div>
                        <div class="MotherGeneralDetails">
                        <?php
                               $child_id = $_GET['child_id'];
                               $sql = "SELECT * FROM child_cvitamin_view WHERE child_id = '$child_id'";
                               $result = mysqli_query($con, $sql);
                               if (mysqli_num_rows($result) > 0) {
                                   echo '<table class="MotherCardTables">';
                                   echo '<tr>
                                           <th>Age</th>
                                           <th>Date</th>
                                           <th>Batch No</th>
                                         </tr>';
                                   while($row = mysqli_fetch_assoc($result)) {
                                       echo "<tr>
                                               <th>".$row["age"]."</th>
                                               <td>".$row["date"]."</td>
                                               <td>".$row["batch_no"]."</td>
                                             </tr>";
                                   }
                                   echo "</table>";
                               } else {
                                   echo "0 results";
                               }
                                ?>
                            <!-- <input type="submit" name="generate_pdf" class="NextBtn" value="Generate PDF" /> -->
                        </div>
                        <div class="OneColumnSection"> <!--when a section has only one table, use this class-->
                        <div class="MotherCardTableTitles"><h3> Worm Treatment  </h3></div>
                        <div class="MotherGeneralDetails">
                            <?php 
                                $sql = "SELECT * FROM child_cworm_treatment WHERE child_id = '$child_id'";
                                $result = mysqli_query($con, $sql);
                                if (mysqli_num_rows($result) > 0) {
                                    echo '<table class="MotherCardTables">';
                                    echo '<tr>
                                            <th>Age</th>
                                            <th>Date</th>
                                            <th>Batch No</th>
                                          </tr>';
                                    while($row = mysqli_fetch_assoc($result)) {
                                        echo "<tr>
                                                <th>".$row["age"]."</th>
                                                <td>".$row["date"]."</td>
                                                <td>".$row["batchno"]."</td>
                                              </tr>";
                                    }
                                    echo "</table>";
                                } else {
                                    echo "0 results";
                                }
                            ?>
                           
                        </div>
                    </div>

  </body>
</html>


