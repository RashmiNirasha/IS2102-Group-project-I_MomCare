<?php 
session_start();
include "../../Assets/Includes/header_pages.php";
include '../../Config/dbConnection.php';
include "../../Assets/Includes/sidenav2.php";

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
<!DOCTYPE html>
<html lang="en">
<Head>
  <Link Href="Https://Fonts.Googleapis.Com/Css?Family=Quicksand:400,700" Rel="Stylesheet">
  <style><?php include "../../Assets/css/style-common.css";?></style>
</Head>
<body>

<div class="child-container">
  <h2>New Child Card</h2>
  <div class="OneColumnSection"> <!--when a section has only one table, use this class-->
                        <div class="MotherCardTableTitles"><h3> </h3></div>
                        <div class="MotherGeneralDetails">
                        <form method="POST">
      <table class="MotherCardTables">
        <tr>
          <th>Child ID</th> <td><input type="text" id="child_id" name="child_id" required></td> </tr>
          <tr><th>Child Name</th> <td><input type="text" id="child_name" name="child_name" required></td></tr>
          <tr><th>Child Gender</th> <td><input type="text" id="child_gender" name="child_gender" required></tr>
          <tr>  <th>PHM ID</th><td><input type="text" id="phm_id" name="phm_id" required></td></tr>
           <tr> <th>Doc ID</th><td><input type="text" id="doc_id" name="doc_id" required></td></tr>
           <tr> <th>Guardian ID</th><td><input type="text" id="guardian_id" name="guardian_id" required></td></tr>
            <tr><th>Mom Email</th> <td><input type="text" id="mom_email" name="mom_email" required></td></tr>
            <tr><th>Mom ID</th> <td><input type="text" id="mom_id" name="mom_id" required></td></tr></tr>
           <tr> <th>Date of Birth</th>            <td><input type="date" id="date_of_birth" name="date_of_birth" required></td></tr>
            <tr><th>Actions</th>            <td ><input type="submit" name="submit" value="Submit">

        </tr>
        </table>
        </form>
                           
                       
                        </div>
                    </div>
  </body>
</html>


