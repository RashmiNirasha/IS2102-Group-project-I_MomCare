<?php 
session_start();
if (isset($_SESSION['email']) && isset($_SESSION['id'])) { 
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
    <?php
        $child_id = $_GET['child_id'];
        $sql = "SELECT * FROM child_details WHERE child_id = '$child_id'";
        $result = mysqli_query($con, $sql);
        if (mysqli_num_rows($result) > 0) {
            echo '<table class="MotherCardTables">';
            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                        <th>Child Name:</th>
                        <td>".$row["child_name"]."</td>
                    </tr>
                    <tr>
                        <th>Birth Date:</th>
                        <td>".$row["birth_date"]."</td>
                    </tr>
                    <tr>
                        <th>Child Age:</th>
                        <td>".$row["child_age"]."</td>
                    </tr>
                    <tr>
                        <th>Name of the Mother:</th>
                        <td>".$row["mother_name"]."</td>
                    </tr>
                    <tr>
                        <th>Mother Age:</th>
                        <td>".$row["mother_age"]."</td>
                    </tr>
                    <tr>
                        <th>MOH Area:</th>
                        <td>".$row["MOH_area"]."</td>
                    </tr>
                    <tr>
                        <th>PHM Area:</th>
                        <td>".$row["PHM_area"]."</td>
                    </tr>
                    <tr>
                        <th>Name of the Field Clinic:</th>
                        <td>".$row["field_clinic"]."</td>
                    </tr>
                    <tr>
                        <th>Grama Niladhari Division:</th>
                        <td>".$row["GN_division"]."</td>
                    </tr>
                    <tr>
                        <th>Name of the Hospital Clinic:</th>
                        <td>".$row["hospital_clinic"]."</td>
                    </tr>
                    <tr>
                        <th>Name of the Consultant Obstetrician:</th>
                        <td>".$row["consultant_obstetrician"]."</td>
                    </tr>
                    <tr>
                        <th>Identified Antenatal Risks Conditions and Mobilities:</th>
                        <td>".$row["identified_antatal_risks"]."</td>
                    </tr>
                    <tr>
                        <th>Registration Number:</th>
                        <td>".$row["registration_number"]."</td>
                    </tr>
                    <tr>
                        <th>Registration Date:</th>
                        <td>".$row["registration_date"]."</td>
                    </tr>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }
        ?>
    <a href="child-fullChildCard.php?child_id=<?php echo $_GET['child_id']; ?>">
    <button class="next" type="submit" class="btn btn-primary">Generate Child Card</button></a>
    </div>
    </div>
  </body>
</html>
<?php } else {
   header("Location: ../../mainLogin.php");
    exit();}
?>

