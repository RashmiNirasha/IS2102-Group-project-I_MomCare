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
                            <table class="MotherCardTables">
                                <tr>
                                    <th>Vitamin A</th>
                                    <th>6 months</th>
                                    <th>1 Year</th>
                                    <th>1 1/2 Year</th>
                                    <th>2 Years</th>
                                    <th>2 1/2 Year</th>
                                    <th>3 Years</th>
                                    <th>3 1/2 Year</th>
                                    <th>4 Years</th>
                                    <th>4 1/2 Year</th>
                                    <th>5 Years</th>
                                </tr>
                                <tr>
                                    <th>Date:</th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>Batch no:</th>
                                    <td></td>
                                </tr>
                            </table>

                            <!-- <input type="submit" name="generate_pdf" class="NextBtn" value="Generate PDF" /> -->
                        </div>
                        <div class="OneColumnSection"> <!--when a section has only one table, use this class-->
                        <div class="MotherCardTableTitles"><h3> Worm Treatment  </h3></div>
                        <div class="MotherGeneralDetails">
                            <table class="MotherCardTables">
                                <tr>
                                    <th>Dewormer</th>
                                    <th>1 1/2 Year</th>
                                    <th>2 Years</th>
                                    <th>3 Years</th>
                                    <th>4 Years</th>
                                    <th>5 Years</th>
                                </tr>
                                <tr>
                                    <th>Date:</th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>Batch no:</th>
                                    <td></td>
                                </tr>
                            </table>
                        </div>
                    </div>

  </body>
</html>


