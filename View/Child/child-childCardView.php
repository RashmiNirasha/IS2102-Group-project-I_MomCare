<?php 
session_start();
include '../../Config/dbConnection.php';
include "../../Assets/Includes/header_pages.php";?>

<!DOCTYPE html>
<html lang="en">
<Head>
  <Link Href="Https://Fonts.Googleapis.Com/Css?Family=Quicksand:400,700" Rel="Stylesheet">
  <style><?php include "../../Assets/css/style-child.css";?></style>
</Head>
<body>

<div class="child-sidenav">
    <a href="child-childDashboard.php?child_id=<?php echo $_GET['child_id']; ?>">Dashboard</a>
    <a href="#">Child Profile</a>
  <a href="#">General information</a>
  <a href="#">Infant Care</a>
  <a href="#">Dental Care</a>
  <a href="#">Medical Check</a>
</div>

<div class="child-container">
  <h2>General Information</h2>
  <div class="OneColumnSection"> <!--when a section has only one table, use this class-->
                        <div class="MotherCardTableTitles"><h3> </h3></div>
                        <div class="MotherGeneralDetails">
                            <table class="MotherCardTables">
                                <tr>
                                    <th>Name of the Mother:</th>
                                    <td>Ruwanmali Senanayake</td>
                                </tr>
                                <tr>
                                    <th>Age:</th>
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
                                <tr>
                                    <th>Eligible Family Register:</th>
                                    <td>Mr.Roshan Weerasinghe</td>
                                </tr>
                                <tr>
                                    <th>Pregnant Mother's Register:</th>
                                    <td>Ms. Rasangi Rathnayake</td>
                                </tr>
                                <tr>
                                    <th>Identified antenatal risk conditions & morbidities:</th>
                                    <td>Nothing</td>
                                </tr>
                                <tr>
                                    <th>Consanguinity:</th>
                                    <td>Positive</td>
                                </tr>
                                <tr>
                                    <th>Rubella immunization:</th>
                                    <td>Positive</td>
                                </tr>
                                <tr>
                                    <th>Pre-pregnancy screening done:</th>
                                    <td>Positive</td>
                                </tr>
                                <tr>
                                    <th>Preconceptional folic acid:</th>
                                    <td>Negative</td>
                                </tr>
                                <tr>
                                    <th>History of subfertility:</th>
                                    <td>Positive</td>
                                </tr>
                                <tr>
                                    <th>Planned pregnancy or not:</th>
                                    <td>Negative</td>
                                </tr>
                                <tr>
                                    <th>Family planning method last used:</th>
                                    <td>Positive</td>
                                </tr>
                            </table>
                            <input type="submit" name="generate_pdf" class="NextBtn" value="Generate PDF" />
                        </div>
                    </div>

  </body>
</html>


