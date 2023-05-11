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
  <style></style> -->
<!-- </Head>
<body>

<div class="child-container">
  <h2>Vaccination Records</h2>
  <div class="OneColumnSection">
      <div class="MotherCardTableTitles"><h3> Vaccination Records  </h3></div>
      <div class="MotherGeneralDetails">
      <form method="POST" action="../../../Config/phm-enterVaccinModel.php">
      <table class="MotherCardTables">
        <tr>
          <th>Child ID</th>
          <th>Age</th>
            <th>type of Vaccine</th>
            <th>Date</th>
            <th>Batch No</th>
            <th>Adverse Effects</th>
            
            <th>Actions</th>
        </tr>
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
  <!-- </td> -->
   <?php
            // $ret = mysqli_query($con, "SELECT *
            // FROM child_details
            // INNER JOIN phm_details
            // ON child_details.phm_id = phm_details.phm_id
            // WHERE child_details.child_id = '$child_id'");
            // $cnt = 1;
            // while ($row = mysqli_fetch_array($ret)) {
            //     $phm_id = $row['phm_id'];
            //     $ofiicial_name=($row['phm_name']);
            //     $dateOfBirth = $row['birth_date'];}
            ?>
            <!-- <td><input type="text" id="age" name="age" ></td>
            <td>   <select id="type_of_vaccine" name="type_of_vaccine" required>
                        <option value="">Select a vaccine</option> -->
                        <?php
                        // $ret = mysqli_query($con, "SELECT * FROM `vaccinetypes`");
                        // while($row = mysqli_fetch_array($ret)) {
                        // ?>
                        <!-- <option value=" -->
                        <?php 
                        // echo htmlentities($row['Vaccine']);
                        ?>
                        <!-- "> -->
                            <?
                            // php echo htmlentities($row['Vaccine']);
                            ?>
                        <!-- </option> -->
                        <?php
                        // }
                        ?> 
                        <!-- </td> -->
            <!-- <td><input type="date" id="date" name="date" required></td>
            <td><input type="text" id="batch_no" name="batch_no" required></td>
            <td><input type="text" id="adverse_effects" name="adverse_effects"></td>
            <td ><input type="submit" value="Submit"></td>
        </tr>
        <tr> 
            <th>Officer Name</th><td colspan="3"><input type="text" id="official_name" name="official_name" value="<?php echo htmlentities($ofiicial_name); ?>" > </td><th>Officer ID</th> <td colspan="3"><input type="text" id="phm_id" name="phm_id" value="<?php echo htmlentities($phm_id); ?>"><br></td>
                    </tr>
                    
                    </table>
                    </form>
                    </div>
                    </div>
  </body>
</html> -->

?>
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
  <h2>Immunization Chart</h2>
      <div class="OneColumnSection"> <!--when a section has only one table, use this class-->
                        <div class="acc-title"><h3>Vaccine Records</h3></div>
                        <div class="MotherGeneralDetails">
                        <form method="POST">
      <table class="acc-table">
        <tr>
          <th>Child ID</th> <td><div class="acc-input"><input type="text" id="child_id" name="child_id" required></div></td> </tr>
          <tr><th>Age</th> <td><div class="acc-input"><input type="text" id="child_age" name="child_age" required></div></td></tr>
          <tr> <th>Type of Vaccine</th><td><div class="acc-input"><input type="text" id="type" name="type" required></div></td></tr>
          <tr> <th>Date</th><td><div class="acc-input"><input type="date" id="batch_no" name="batch_no" required></div></td></tr>
          <tr> <th>Batch No</th><td><div class="acc-input"><input type="text" id="batch_no" name="batch_no" required></div></td></tr>
          <tr> <th>Adverse Effect</th><td><div class="acc-input"><input type="text" id="effect" name="effect" required></div></td></tr>
          <tr><th>Actions</th><td><button class = "acc-btn" type="submit" name="submit" value="Submit">Submit</button></td></tr>
        </tr>
        </table>
        </form>
        </div>
  </body>
</html>





