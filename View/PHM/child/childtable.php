<?php 
//include "../../Assets/Includes/header_pages.php";

include "child-cardFunctionsModel.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form field values
    $child_id = $_POST['child_id'];
    $child_name = $_POST['child_name'];
    $child_gender = $_POST['child_gender'];
    $phm_id = $_POST['phm_id'];
    $doc_id = $_POST['doc_id'];
    $guardian_id = $_POST['guardian_id'];
    $mom_email = $_POST['mom_email'];
    $mom_id = $_POST['mom_id'];
    $date_of_birth = $_POST['date_of_birth'];

    // Call the insertChildInfo function with form field values
    insertChildInfo($child_id, $child_name, $child_gender, $phm_id, $doc_id, $guardian_id, $mom_email, $mom_id, $date_of_birth);}
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
            <td ><input type="submit" value="Submit"></td>
        </tr>
        </table>
        </form>
        </div>
    </div>

</br>