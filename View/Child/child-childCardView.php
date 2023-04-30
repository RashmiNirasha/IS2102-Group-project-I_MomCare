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
  <h2>Child Profile</h2>
  <div class="OneColumnSection"> <!--when a section has only one table, use this class-->
                        <div class="MotherCardTableTitles"><h3> </h3></div>
                        <div class="MotherGeneralDetails">
                            <table class="MotherCardTables">
                                <tr>
                                    <th>Child Name:</th>
                                    <td>Tharushi Senanayake</td>
                                <tr>
                                <tr>
                                    <th>Birth Date</th>
                                    <td>2007.10.15</td>
                                </tr>
                                <tr>
                                    <th>Child Age </th>
                                    <td>13</td>
                                </tr>
                                <tr>
                                    <th>Name of the Mother:</th>
                                    <td>Ruwanmali Senanayake</td>
                                </tr>
                                <tr>
                                    <th>Mother Age:</th>
                                    <td>27</td>
                                </tr>
                                <tr>
                                    <th>MOH area:</th>
                                    <td>Colombo 15</td>
                                </tr>
                                <tr>
                                    <th>PHM area:</th>
                                    <td>Colombo 15</td>
                                </tr>
                                <tr>
                                    <th>Name of the Field Clinic:</th>
                                    <td>Colombo 15 main</td>
                                </tr>
                                <tr>
                                    <th>Grama Niladhari Division:</th>
                                    <td>Colombo 15</td>
                                </tr>
                                <tr>
                                    <th>Name of the Hospital Clinic:</th>
                                    <td>Colombo Central</td>
                                </tr>
                                <tr>
                                    <th>Name of the Consultant Obstetrician:</th>
                                    <td>Name of the Consultant</td>
                                </tr>
                                <tr>
                                    <th>Identified anatal risks conditions and mobilities:</th>
                                    <td>Nothing</td>
                                </tr>
                                <tr>
                                    <th>Registration Number:</th>
                                    <td>455623</td>
                                </tr>
                                <tr>
                                    <th>Registration Date:</th>
                                    <td>02/05/2021</td>
                                </tr>
                                
                               
                            </table>
                            <input type="submit" name="generate_pdf" class="NextBtn" value="Generate PDF" />
                        </div>
                    </div>

  </body>
</html>


