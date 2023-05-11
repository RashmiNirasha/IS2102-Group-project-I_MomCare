<?php 
session_start();
include "../../Assets/Includes/header_pages.php";
// include '../../Config/dbConnection.php';
include "../../Assets/Includes/sidenavphm.php";

?>
<!-- <!DOCTYPE html>
<html lang="en">
<Head>
  <Link Href="Https://Fonts.Googleapis.Com/Css?Family=Quicksand:400,700" Rel="Stylesheet">
  <style> -->
  <?php 
  // include "../../Assets/css/style-common.css";
  ?>
  <!-- </style>
</Head>
<body>

<div class="child-container">
  <h2>Dental Records</h2>
  <div class="OneColumnSection"> 
      <div class="MotherCardTableTitles"><h3> Dental Records  </h3></div>
      <div class="MotherGeneralDetails">

      <table class="MotherCardTables">
    <tr>
        <th>Child ID</th>
        <th>Age (months)</th>
        <th>Number of erupted teeth</th>
        <th>Status : healthy/unhealthy</th>
        <th>Date : </th>
        <th>Actions</th>
    </tr>
    <tr>
        <form method='POST' action='../../../Config/Child-updateDentalReportModel.php' >
        <td> -->
  <?php
  // $sql = "SELECT child_id FROM child_details ORDER BY child_id DESC";
  // $result = mysqli_query($con, $sql);
  // if (mysqli_num_rows($result) > 0) {
  //   echo '<select id="child_id" name="child_id">';
  //   while ($row = mysqli_fetch_assoc($result)) {
  //     $child_id = $row['child_id'];
  //     echo "<option value='$child_id'>$child_id</option>";
  //   }
  //   echo '</select>';
  // } else {
  //   echo 'No child IDs found in the database.';
  // }
  ?>
<!-- </td>
        <td><select id="age" name="age"> -->
            <?php 
            // for ($i = 6; $i <= 20; $i++) { // loop through months
            //     $label = $i . ' months';
            //     echo '<option value="' . $i . '">' . $label . '</option>'; // generate option
            // } 
            ?>
            <!-- </select></td>
        <td><input type="text" id="number_erupted_teeth" name="number_erupted_teeth"></td>
        <td><select id="status" name="status">
            <option value="healthy">Healthy</option>
            <option value="unhealthy">Unhealthy</option>
            </select></td>
        <td><input type="date" id="date" name="date"></td>
        <td><input type="submit" name="submit" value="Update"></td>
        </form>
    </tr>
    </table>
        </form>
        </div>
        </div>
  </body>
</html> -->

<!DOCTYPE html>
<html lang="en">
<Head>
  <Link Href="Https://Fonts.Googleapis.Com/Css?Family=Quicksand:400,700" Rel="Stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
  <style><?php include "../../Assets/css/style-common.css";?></style>
</Head>
<body>
<div class = "acc-icons"><i class="material-icons" alt="edit">edit</i>
<i class="material-icons" alt="delete">delete</i></div>
<div class="acc-container">
  <h2>Dental Care</h2>
      <div class="OneColumnSection"> <!--when a section has only one table, use this class-->
                        <div class="acc-title"><h3>Dental Records</h3></div>
                        <div class="MotherGeneralDetails">
                        <form method="POST">
      <table class="acc-table">
        <tr>
          <th>Child ID</th> <td><div class="acc-input"><input type="text" id="child_id" name="child_id" required></div></td> </tr>
          <tr><th>Age (months)</th> <td><div class="acc-input"><input type="text" id="child_age" name="child_age" required></div></td></tr>
          <tr> <th>Number of erupted teeth</th><td><div class="acc-input"><input type="number" id="type" name="type" required></div></td></tr>
          <!-- <tr> <th>Date</th><td><div class="acc-input"><input type="date" id="batch_no" name="batch_no" required></div></td></tr> -->
          <tr> <th>Status</th><td><div class="acc-input"><input type="text" id="batch_no" name="batch_no" required></div></td></tr>
          <tr> <th>Date</th><td><div class="acc-input"><input type="date" id="effect" name="effect" required></div></td></tr>
          <tr><th>Actions</th><td><button class = "acc-btn" type="submit" name="submit" value="Submit">Submit</button></td></tr>
        </tr>
        </table>
        </form>
        </div>
  </body>
</html>









