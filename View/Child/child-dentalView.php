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
                        <div class="MotherCardTableTitles"><h3>   </h3></div>
                        <div class="MotherGeneralDetails">
                            <table class="MotherCardTables">
                                <tr>
                                    <th>Age (months)</th>
                                    <th>6 mos</th>
                                    <th>7 mos</th>
                                    <th>8 mos</th>
                                    <th>9 mos</th>
                                    <th>10 mos</th>
                                    <th>11 mos</th>
                                    <th>12 mos</th>
                                    <th>13 mos</th>
                                    <th>14 mos</th>
                                    <th>15 mos</th>
                                    <th>16 mos</th>
                                    <th>17 mos</th>
                                    <th>18 mos</th>
                                </tr>
                                <tr>
                                    <th>Number of erupted teeth</th>
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
                                    <th>Status : healthy/unhealthy</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>Date : </th>
                                    <td></td>
                            </table>
                            </div>

                            <!-- <input type="submit" name="generate_pdf" class="NextBtn" value="Generate PDF" /> -->
  </body>
</html>


