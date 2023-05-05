<?php

include "../../../Assets/Includes/header_pages.php";
include '../../../Config/dbConnection.php';

?>
<style><?php include '../../../Assets/css/style-child.css'; ?></style>
<html>

<body>
<div class="child-container">
  <h2>Add Records</h2>
  
  <!------------------------------------------------------- dental Section  ----------------------------------->

    <div class="OneColumnSection"> <!--when a section has only one table, use this class-->
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
        <td>
  <?php
  $sql = "SELECT child_id FROM child_details ORDER BY child_id DESC";
  $result = mysqli_query($con, $sql);
  if (mysqli_num_rows($result) > 0) {
    echo '<select id="child_id" name="child_id">';
    while ($row = mysqli_fetch_assoc($result)) {
      $child_id = $row['child_id'];
      echo "<option value='$child_id'>$child_id</option>";
    }
    echo '</select>';
  } else {
    echo 'No child IDs found in the database.';
  }
  ?>
</td>
        <td><select id="age" name="age">
            <?php for ($i = 6; $i <= 20; $i++) { // loop through months
                $label = $i . ' months';
                echo '<option value="' . $i . '">' . $label . '</option>'; // generate option
            } ?>
            </select></td>
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

<!---------------------------------------------- Vaccine Section  ----------------------------------------------------------------------->

      <div class="OneColumnSection"> <!--when a section has only one table, use this class-->
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
            <td><?php
  $sql = "SELECT child_id FROM child_details ORDER BY child_id DESC";
  $result = mysqli_query($con, $sql);
  if (mysqli_num_rows($result) > 0) {
    echo '<select id="child_id" name="child_id">';
    while ($row = mysqli_fetch_assoc($result)) {
      $child_id = $row['child_id'];
      echo "<option value='$child_id'>$child_id</option>";
    }
    echo '</select>';
  } else {
    echo 'No child IDs found in the database.';
  }
  ?></td>
   <?php
            $ret = mysqli_query($con, "SELECT *
            FROM child_details
            INNER JOIN phm_details
            ON child_details.phm_id = phm_details.phm_id
            WHERE child_details.child_id = '$child_id'");
            $cnt = 1;
            while ($row = mysqli_fetch_array($ret)) {
                $phm_id = $row['phm_id'];
                $ofiicial_name=($row['phm_name']);
                $dateOfBirth = $row['date_of_birth'];}
            ?>
            <td><input type="text" id="age" name="age" ></td>
            <td>   <select id="type_of_vaccine" name="type_of_vaccine" required>
                        <option value="">Select a vaccine</option>
                        <?php
                        $ret = mysqli_query($con, "SELECT * FROM `vaccinetypes`");
                        while($row = mysqli_fetch_array($ret)) {
                        ?>
                        <option value="<?php echo htmlentities($row['Vaccine']);?>">
                            <?php echo htmlentities($row['Vaccine']);?>
                        </option>
                        <?php
                        }
                        ?> </td>
            <td><input type="date" id="date" name="date" required></td>
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

</br>
        </div>
        </body>
        </html>



