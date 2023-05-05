<?php 
include "../../../Config/dbConnection.php";

if (isset($_POST['submit'])) {
  insertChildInfo($_POST);
}

function insertChildInfo($data)
{
  global $con;
  $child_id = $data['child_id'];
  $child_name = $data['child_name'];
  $child_gender = $data['child_gender'];
  $phm_id = $data['phm_id'];
  $doc_id = $data['doc_id'];
  $guardian_id = $data['guardian_id'];
  $mom_email = $data['mom_email'];
  $mom_id = $data['mom_id'];
  $date_of_birth = $data['date_of_birth'];

  $sql = "INSERT INTO child_details (child_id, child_name, child_gender, phm_id, doc_id, guardian_id, mom_email, mom_id, date_of_birth) 
          VALUES ('$child_id','$child_name','$child_gender', '$phm_id', '$doc_id', '$guardian_id', '$mom_email', '$mom_id', '$date_of_birth')";

  if (mysqli_query($con, $sql)) {
    header("Location: child-cardMenuView.php?success=1");
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
  }
}
?>


<style><?php include '../../../Assets/css/style-child.css'; ?></style>
<html>

<body>
<div class="child-container">
  <h2></h2>
  
    <div class="OneColumnSection"> <!--when a section has only one table, use this class-->
      <div class="MotherCardTableTitles"><h3> Child Information  </h3></div>
      <div class="MotherGeneralDetails">
      <form method="POST">
      <table class="MotherCardTables">
        <tr>
          <th>Child ID</th>
          <th>Child Name</th>
          <th>Child Gender</th>
            <th>PHM ID</th>
            <th>Doc ID</th>
            <th>Guardian ID</th>
            <th>Mom Email</th>
            <th>Mom ID</th>
            <th>Date of Birth</th>
            <th>Actions</th>
        </tr>
            <td><input type="text" id="child_id" name="child_id" required></td>
            <td><input type="text" id="child_name" name="child_name" required></td>
            <td><input type="text" id="child_gender" name="child_gender" required>
            <td><input type="text" id="phm_id" name="phm_id" required></td>
            <td><input type="text" id="doc_id" name="doc_id" required></td>
            <td><input type="text" id="guardian_id" name="guardian_id" required></td>
            <td><input type="text" id="mom_email" name="mom_email" required></td>
            <td><input type="text" id="mom_id" name="mom_id" required></td>
            <td><input type="date" id="date_of_birth" name="date_of_birth" required></td>
            <td ><input type="submit" name="submit" value="Submit">
</td>
        </tr>
        </table>
        </form>
        </div>
    </div>

</br>